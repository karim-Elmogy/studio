/* Accounting Tree init (no inline script to satisfy CSP) */
(function () {
  'use strict';

  function initEditAccountTree(modalSelector, treeSelector, searchInputSelector, parentIdInputSelector, parentChainInputSelector) {
    if (typeof $ === 'undefined' || !window.document) return;
    $(document).on('shown.bs.modal', modalSelector, function () {
      var $modal = $(this);
      var accountTreeData = $modal.data('accounts') || [];
      var existingParentId = $(parentIdInputSelector).val() || null;
      if ($.jstree.reference(treeSelector)) { $(treeSelector).jstree('destroy'); }
      $(treeSelector).jstree({
        core: { data: accountTreeData, themes: { icons: false, responsive: true } },
        plugins: ['search', 'wholerow', 'dnd', 'types'],
        types: { account: { icon: 'fas fa-folder text-success' }, transaction: { icon: 'fas fa-money-bill-wave text-warning' }, children: { icon: 'fas fa-folder' } }
      });
      var to = false;
      $(searchInputSelector).on('keyup', function () { if (to) clearTimeout(to); to = setTimeout(function(){ $(treeSelector).jstree(true).search($(searchInputSelector).val()); }, 300); });
      $(treeSelector).on('select_node.jstree', function (e, data) { 
        var selectedId = data.node.id; 
        var parentIds = $(treeSelector).jstree(true).get_path(data.node, '/', true); 
        $(parentIdInputSelector).val(selectedId); 
        $(parentChainInputSelector).val(JSON.stringify(parentIds));
        
        // Update current parent display for edit modal
        if (selectedId && $('#current-parent-display').length) {
          var nodeText = data.node.text || data.node.original.text;
          var nodeCode = data.node.original.acc_code || '';
          var displayText = nodeCode ? '<strong>' + nodeCode + '</strong> - ' + nodeText : nodeText;
          $('#current-parent-display').html('<i class="fas fa-folder text-success me-2"></i>' + displayText);
          
          // Show remove button if not already visible
          if (!$('#remove-parent-btn').length) {
            $('#current-parent-display').parent().append('<button type="button" id="remove-parent-btn" class="btn btn-sm btn-outline-danger ms-2" title="Remove Parent Account"><i class="fas fa-times"></i></button>');
          }
        }
      });
      if (existingParentId) { $(treeSelector).on('ready.jstree', function () { $(treeSelector).jstree(true).select_node(existingParentId); }); }
      
      // Handle remove parent button
      $(document).off('click', '#remove-parent-btn').on('click', '#remove-parent-btn', function(e) {
        e.preventDefault();
        $('#edit_parent_id').val('');
        $('#edit_parent_chain').val('');
        $('#current-parent-display').html('<span class="text-muted">No parent account</span>');
        $(this).remove();
        $('#jstree-edit').jstree(true).deselect_all();
      });
    });
  }

  function initCreateModalTree() {
    $('#kt_modal_create_account').on('shown.bs.modal', function () {
      var $jstreeInModal = $('#jstree-create');
      if (!$jstreeInModal.length) return;
      
      var accountTreeData = $jstreeInModal.data('accounts') || [];
      
      if ($.jstree.reference($jstreeInModal)) {
        $jstreeInModal.jstree('destroy');
      }
      
      $jstreeInModal.jstree({
        core: {
          data: accountTreeData,
          themes: { icons: false, responsive: true }
        },
        plugins: ['search', 'wholerow', 'types'],
        types: {
          account: { icon: 'fas fa-folder text-success' },
          transaction: { icon: 'fas fa-money-bill-wave text-warning' }
        }
      });
      
      var searchTimeout = false;
      $('#jstree-search-create').off('keyup').on('keyup', function () {
        if (searchTimeout) clearTimeout(searchTimeout);
        searchTimeout = setTimeout(function() {
          $jstreeInModal.jstree(true).search($('#jstree-search-create').val());
        }, 300);
      });
      
      $jstreeInModal.off('select_node.jstree').on('select_node.jstree', function (e, data) {
        var selectedId = data.node.id;
        var parentIds = $jstreeInModal.jstree(true).get_path(data.node, '/', true);
        $('#create_parent_id').val(selectedId);
        $('#create_parent_chain').val(JSON.stringify(parentIds));
      });
    });
  }

  function handleCreateFormSubmit() {
    var $form = $('#kt_modal_create_account_form');
    if (!$form.length) return;
    
    $form.off('submit').on('submit', function(e) {
      e.preventDefault();
      var submitBtn = document.querySelector('#kt_modal_create_account_submit');
      var formData = new FormData(this);
      
      submitBtn.setAttribute('data-kt-indicator', 'on');
      submitBtn.disabled = true;
      
      axios.post($form.attr('action'), formData)
        .then(function(response) {
          if (response.data.success) {
            var modal = bootstrap.Modal.getInstance(document.querySelector('#kt_modal_create_account'));
            if (modal) modal.hide();
            if (typeof $ !== 'undefined' && $('#accountTree').length) {
              $('#accountTree').jstree(true).refresh();
            }
            Swal.fire({
              text: response.data.message,
              icon: "success",
              buttonsStyling: false,
              confirmButtonText: "Ok",
              customClass: { confirmButton: "btn btn-primary" }
            });
            $form[0].reset();
            $('#create_parent_id').val('');
            $('#create_parent_chain').val('');
          }
        })
        .catch(function(error) {
          var msg = error.response?.data?.message || 'Error creating account';
          Swal.fire({
            text: msg,
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok",
            customClass: { confirmButton: "btn btn-primary" }
          });
        })
        .finally(function() {
          submitBtn.removeAttribute('data-kt-indicator');
          submitBtn.disabled = false;
        });
    });
  }

  function boot() {
    if (typeof $ === 'undefined') return;
    var $container = $('#treeContainer');
    if (!$container.length) return;
    var routes = {
      tree: $container.data('tree-url'),
      edit: $container.data('edit-url'),
      delete: $container.data('delete-url'),
      move: $container.data('move-url'),
      csrf: $container.data('csrf')
    };
    function resizeContainer() {
      var padding = $(window).width() < 768 ? '20px' : '30px';
      $container.css('padding', padding);
    }
    resizeContainer();
    $(window).on('resize', resizeContainer);

    var $tree = $('#accountTree');
    if ($.jstree.reference($tree)) { $tree.jstree('destroy').empty(); }
    $tree.jstree({
      core: { check_callback: true, data: { url: function (node) { return node.id === '#' ? routes.tree : (routes.tree + '?parentId=' + node.id); }, dataType: 'json' }, themes: { responsive: true } },
      plugins: ['wholerow', 'types', 'state', 'dnd'],
      types: { account: { icon: 'fas fa-folder text-success' }, transaction: { icon: 'fas fa-file text-warning' } }
    });
    $tree.on('select_node.jstree', function (e, data) { $tree.jstree('open_node', data.node); });
    $tree.on('loaded.jstree open_node.jstree refresh.jstree', function(){
      $('#accountTree li').each(function(){
        var $li = $(this), id = $li.attr('id'), $a = $li.find('> a');
        if (!$a.find('.edit-icon').length) { $('<a href="#" class="edit-icon ml-2" data-id="' + id + '" title="Edit"><i class="fas fa-edit text-primary"></i></a>').appendTo($a); }
        if (!$a.find('.delete-icon').length) { $('<a href="#" class="delete-icon ml-2" data-id="' + id + '" title="Delete"><i class="fas fa-trash text-danger"></i></a>').appendTo($a); }
      });
      var hasNodes = $('#accountTree').find('li').length > 0; $('#treeEmptyHelp').toggle(!hasNodes);
    });
    $(document).on('click', '.edit-icon', function(e){ e.preventDefault(); var id = $(this).data('id'); axios.get(routes.edit, { params: { accountId: id } }).then(function(resp){ document.getElementById('editModalDynamic')?.remove(); document.body.insertAdjacentHTML('beforeend', resp.data); var modalEl = document.getElementById('editModalDynamic'); var modal = new bootstrap.Modal(modalEl); modal.show(); }).catch(console.error); });
    $(document).on('click', '.delete-icon', function(e){ e.preventDefault(); var id = $(this).data('id'); if (confirm('هل أنت متأكد من حذف هذا الحساب؟')) { axios.post(routes.delete, { accountId: id, _token: routes.csrf }).then(function(){ $('#accountTree').jstree(true).refresh(); }).catch(console.error); } });
    $tree.on('move_node.jstree', function(e, data){ var movedId = data.node.id, newParentId = data.parent === '#' ? null : data.parent, newPosition = data.position; $.ajax({ url: routes.move, method: 'POST', data: { _token: routes.csrf, id: movedId, parent_id: newParentId, position: newPosition } }); });

    // modal helper
    initEditAccountTree('#editModalDynamic', '#jstree-edit', '#jstree-search-edit', '#edit_parent_id', '#edit_parent_chain');
    
    // init create modal tree
    initCreateModalTree();
    
    // handle create form
    handleCreateFormSubmit();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();


