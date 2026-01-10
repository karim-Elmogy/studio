@extends('admin.layouts.master')

@section('title', __('admin.web_project_details'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.web_project_details') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('admin.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('admin.projects.index') }}" class="text-muted text-hover-primary">{{ __('admin.projects') }}</a>
            </li>
            <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
            <li class="breadcrumb-item text-muted">{{ $project->title['en'] ?? 'N/A' }}</li>
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-light">
            <i class="fa-solid fa-arrow-left"></i>
            {{ __('admin.back') }}
        </a>
    </div>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="fa-solid fa-circle-check fs-2 me-3 text-success"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('admin.projects.web-details.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow-sm">
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark fs-2">
                        <i class="fa-solid fa-globe text-info me-2"></i>
                        {{ __('admin.web_project_details') }}
                    </span>
                    <span class="text-muted mt-1 fw-semibold fs-7">{{ __('admin.additional_web_info') }}</span>
                </h3>
            </div>
            <div class="card-body">
                {{-- Hero Banner Image --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.hero_banner') }}</label>
                    <div class="col-lg-10">
                        @if($project->web_details['hero_banner'] ?? null)
                            <div class="mb-3">
                                <img id="hero_banner_preview" src="{{ asset('storage/' . $project->web_details['hero_banner']) }}"
                                     alt="Hero Banner"
                                     class="img-thumbnail"
                                     style="max-height: 200px;">
                            </div>
                        @else
                            <div class="mb-3">
                                <img id="hero_banner_preview" src="#" alt="Preview"
                                     class="img-thumbnail"
                                     style="max-height: 200px; display: none;">
                            </div>
                        @endif
                        <input type="file" name="hero_banner"
                               class="form-control form-control-solid @error('hero_banner') is-invalid @enderror"
                               accept="image/*" />
                        <div class="form-text">{{ __('admin.optional_image') }}</div>
                        @error('hero_banner')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Project Subtitle --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.subtitle') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="subtitle_en"
                                       class="form-control form-control-solid @error('subtitle_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.subtitle_en') }}"
                                       value="{{ old('subtitle_en', $project->web_details['subtitle']['en'] ?? '') }}" />
                                @error('subtitle_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subtitle_ar"
                                       class="form-control form-control-solid @error('subtitle_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.subtitle_ar') }}"
                                       value="{{ old('subtitle_ar', $project->web_details['subtitle']['ar'] ?? '') }}" dir="rtl" />
                                @error('subtitle_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Project Overview --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.overview') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="overview_en" rows="4"
                                          class="form-control form-control-solid @error('overview_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.overview_en') }}">{{ old('overview_en', $project->web_details['overview']['en'] ?? '') }}</textarea>
                                @error('overview_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="overview_ar" rows="4"
                                          class="form-control form-control-solid @error('overview_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.overview_ar') }}" dir="rtl">{{ old('overview_ar', $project->web_details['overview']['ar'] ?? '') }}</textarea>
                                @error('overview_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service Type --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.service') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="service_en"
                                       class="form-control form-control-solid @error('service_en') is-invalid @enderror"
                                       placeholder="{{ __('admin.service_en') }}"
                                       value="{{ old('service_en', $project->web_details['service']['en'] ?? '') }}" />
                                @error('service_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="service_ar"
                                       class="form-control form-control-solid @error('service_ar') is-invalid @enderror"
                                       placeholder="{{ __('admin.service_ar') }}"
                                       value="{{ old('service_ar', $project->web_details['service']['ar'] ?? '') }}" dir="rtl" />
                                @error('service_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Website URL --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.website_url') }}</label>
                    <div class="col-lg-10">
                        <input type="url" name="website_url"
                               class="form-control form-control-solid @error('website_url') is-invalid @enderror"
                               placeholder="https://example.com"
                               value="{{ old('website_url', $project->web_details['website_url'] ?? '') }}" />
                        @error('website_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Gallery Images --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.gallery_images') }}</label>
                    <div class="col-lg-10">
                        <div class="row mb-3" id="gallery_preview_container">
                            @if(!empty($project->web_details['gallery_images']))
                                @foreach($project->web_details['gallery_images'] as $index => $img)
                                    <div class="col-md-3 mb-2" id="gallery_image_{{ $index }}" draggable="true" data-index="{{ $index }}">
                                        <div class="position-relative">
                                            <img src="{{ asset('storage/' . $img) }}"
                                                 alt="Gallery"
                                                 class="img-thumbnail"
                                                 style="max-height: 150px; width: 100%; cursor: move;">
                                            <button type="button"
                                                    class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2"
                                                    onclick="showDeleteModal('gallery_images', '{{ $img }}', {{ $index }})"
                                                    title="حذف">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                            <span class="badge badge-secondary position-absolute bottom-0 start-0 m-2">{{ $index + 1 }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <input type="hidden" name="gallery_images_order" id="gallery_images_order" value="">
                        <input type="file" name="gallery_images[]"
                               class="form-control form-control-solid @error('gallery_images') is-invalid @enderror"
                               accept="image/*" multiple />
                        <div class="form-text">{{ __('admin.multiple_images_help') }} - اسحب الصور لتغيير الترتيب</div>
                        @error('gallery_images')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- The Challenge --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.challenge') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="challenge_en" rows="4"
                                          class="form-control form-control-solid @error('challenge_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.challenge_en') }}">{{ old('challenge_en', $project->web_details['challenge']['en'] ?? '') }}</textarea>
                                @error('challenge_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="challenge_ar" rows="4"
                                          class="form-control form-control-solid @error('challenge_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.challenge_ar') }}" dir="rtl">{{ old('challenge_ar', $project->web_details['challenge']['ar'] ?? '') }}</textarea>
                                @error('challenge_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Challenge Image --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.challenge_image') }}</label>
                    <div class="col-lg-10">
                        @if($project->web_details['challenge_image'] ?? null)
                            <div class="mb-3">
                                <img id="challenge_image_preview" src="{{ asset('storage/' . $project->web_details['challenge_image']) }}"
                                     alt="Challenge"
                                     class="img-thumbnail"
                                     style="max-height: 200px;">
                            </div>
                        @else
                            <div class="mb-3">
                                <img id="challenge_image_preview" src="#" alt="Preview"
                                     class="img-thumbnail"
                                     style="max-height: 200px; display: none;">
                            </div>
                        @endif
                        <input type="file" name="challenge_image"
                               class="form-control form-control-solid @error('challenge_image') is-invalid @enderror"
                               accept="image/*" />
                        <div class="form-text">{{ __('admin.optional_image') }}</div>
                        @error('challenge_image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- The Solution --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.solution') }}</label>
                    <div class="col-lg-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <textarea name="solution_en" rows="4"
                                          class="form-control form-control-solid @error('solution_en') is-invalid @enderror"
                                          placeholder="{{ __('admin.solution_en') }}">{{ old('solution_en', $project->web_details['solution']['en'] ?? '') }}</textarea>
                                @error('solution_en')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <textarea name="solution_ar" rows="4"
                                          class="form-control form-control-solid @error('solution_ar') is-invalid @enderror"
                                          placeholder="{{ __('admin.solution_ar') }}" dir="rtl">{{ old('solution_ar', $project->web_details['solution']['ar'] ?? '') }}</textarea>
                                @error('solution_ar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Solution Image --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.solution_image') }}</label>
                    <div class="col-lg-10">
                        @if($project->web_details['solution_image'] ?? null)
                            <div class="mb-3">
                                <img id="solution_image_preview" src="{{ asset('storage/' . $project->web_details['solution_image']) }}"
                                     alt="Solution"
                                     class="img-thumbnail"
                                     style="max-height: 200px;">
                            </div>
                        @else
                            <div class="mb-3">
                                <img id="solution_image_preview" src="#" alt="Preview"
                                     class="img-thumbnail"
                                     style="max-height: 200px; display: none;">
                            </div>
                        @endif
                        <input type="file" name="solution_image"
                               class="form-control form-control-solid @error('solution_image') is-invalid @enderror"
                               accept="image/*" />
                        <div class="form-text">{{ __('admin.optional_image') }}</div>
                        @error('solution_image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="separator separator-dashed my-8"></div>

                {{-- Additional Gallery Images --}}
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('admin.additional_gallery') }}</label>
                    <div class="col-lg-10">
                        <div class="row mb-3" id="additional_gallery_preview_container">
                            @if(!empty($project->web_details['additional_gallery']))
                                @foreach($project->web_details['additional_gallery'] as $index => $img)
                                    <div class="col-md-3 mb-2" id="additional_gallery_image_{{ $index }}" draggable="true" data-index="{{ $index }}">
                                        <div class="position-relative">
                                            <img src="{{ asset('storage/' . $img) }}"
                                                 alt="Additional Gallery"
                                                 class="img-thumbnail"
                                                 style="max-height: 150px; width: 100%; cursor: move;">
                                            <button type="button"
                                                    class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2"
                                                    onclick="showDeleteModal('additional_gallery', '{{ $img }}', {{ $index }})"
                                                    title="حذف">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                            <span class="badge badge-secondary position-absolute bottom-0 start-0 m-2">{{ $index + 1 }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <input type="hidden" name="additional_gallery_order" id="additional_gallery_order" value="">
                        <input type="file" name="additional_gallery[]"
                               class="form-control form-control-solid @error('additional_gallery') is-invalid @enderror"
                               accept="image/*" multiple />
                        <div class="form-text">{{ __('admin.multiple_images_help') }} - اسحب الصور لتغيير الترتيب</div>
                        @error('additional_gallery')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-light btn-active-light-primary me-2">
                    {{ __('admin.cancel') }}
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-save"></i>
                    {{ __('admin.save_changes') }}
                </button>
            </div>
        </div>
    </form>

    {{-- Delete Confirmation Modal --}}
    <div class="modal fade" id="deleteImageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bold">تأكيد الحذف</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-5">
                        <i class="fa-solid fa-triangle-exclamation fs-5x text-warning mb-5"></i>
                        <p class="fs-4 fw-semibold text-gray-800">هل أنت متأكد من حذف هذه الصورة؟</p>
                        <p class="fs-6 text-gray-600">لن تتمكن من استرجاع الصورة بعد الحذف</p>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                        إلغاء
                    </button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">
                        <i class="fa-solid fa-trash"></i>
                        حذف الصورة
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Delete Modal
    let deleteImageData = null;

    function showDeleteModal(imageType, imagePath, imageIndex) {
        deleteImageData = {
            type: imageType,
            path: imagePath,
            index: imageIndex
        };
        const modal = new bootstrap.Modal(document.getElementById('deleteImageModal'));
        modal.show();
    }

    // Preview single image
    function previewImage(input, previewId) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById(previewId);
                if (preview) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
            }
            reader.readAsDataURL(file);
        }
    }

    // Preview multiple images
    function previewMultipleImages(input, containerId) {
        const container = document.getElementById(containerId);
        if (!container) return;

        // Clear previous previews
        const existingPreviews = container.querySelectorAll('.preview-item');
        existingPreviews.forEach(item => item.remove());

        const files = input.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const div = document.createElement('div');
                    div.className = 'col-md-3 mb-2 preview-item';
                    div.innerHTML = `
                        <div class="position-relative">
                            <img src="${e.target.result}" alt="Preview" class="img-thumbnail" style="max-height: 150px;">
                            <span class="badge badge-success position-absolute top-0 end-0 m-1">New</span>
                        </div>
                    `;
                    container.appendChild(div);
                }
                reader.readAsDataURL(file);
            }
        }
    }

    // Drag and Drop functionality
    function initializeDragAndDrop(containerId, orderInputId) {
        const container = document.getElementById(containerId);
        if (!container) return;

        let draggedElement = null;

        const draggableElements = container.querySelectorAll('[draggable="true"]');

        draggableElements.forEach(element => {
            element.addEventListener('dragstart', function(e) {
                draggedElement = this;
                this.style.opacity = '0.5';
                e.dataTransfer.effectAllowed = 'move';
            });

            element.addEventListener('dragend', function() {
                this.style.opacity = '1';
                updateOrder(containerId, orderInputId);
            });

            element.addEventListener('dragover', function(e) {
                e.preventDefault();
                e.dataTransfer.dropEffect = 'move';

                if (this !== draggedElement) {
                    const rect = this.getBoundingClientRect();
                    const midpoint = rect.left + rect.width / 2;

                    if (e.clientX < midpoint) {
                        this.parentNode.insertBefore(draggedElement, this);
                    } else {
                        this.parentNode.insertBefore(draggedElement, this.nextSibling);
                    }
                }
            });
        });
    }

    // Update order after drag and drop
    function updateOrder(containerId, orderInputId) {
        const container = document.getElementById(containerId);
        const orderInput = document.getElementById(orderInputId);
        if (!container || !orderInput) return;

        const items = container.querySelectorAll('[data-index]');
        const order = Array.from(items).map(item => item.getAttribute('data-index'));
        orderInput.value = JSON.stringify(order);

        // Update badge numbers
        items.forEach((item, index) => {
            const badge = item.querySelector('.badge');
            if (badge) {
                badge.textContent = index + 1;
            }
        });

        // Save order automatically via AJAX
        const galleryType = containerId === 'gallery_preview_container' ? 'gallery' : 'additional';
        saveOrderAjax(galleryType, order);
    }

    // Save order via AJAX
    function saveOrderAjax(galleryType, order) {
        const form = document.querySelector('form[action*="web-details"]');
        const url = form.action;
        const csrfToken = document.querySelector('input[name="_token"]').value;

        const formData = new FormData();
        formData.append('_token', csrfToken);
        formData.append('_method', 'PUT');
        formData.append('save_order_only', '1');

        if (galleryType === 'gallery') {
            formData.append('gallery_images_order', JSON.stringify(order));
        } else {
            formData.append('additional_gallery_order', JSON.stringify(order));
        }

        fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                showToast('تم حفظ الترتيب بنجاح!', 'success');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showToast('حدث خطأ أثناء حفظ الترتيب', 'error');
        });
    }

    // Show toast notification
    function showToast(message, type) {
        // Remove existing toast if any
        const existingToast = document.querySelector('.order-toast');
        if (existingToast) {
            existingToast.remove();
        }

        const toast = document.createElement('div');
        toast.className = 'order-toast alert alert-' + (type === 'success' ? 'success' : 'danger');
        toast.style.cssText = 'position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 250px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);';
        toast.innerHTML = `
            <i class="fa-solid fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
            ${message}
        `;
        document.body.appendChild(toast);

        setTimeout(() => {
            toast.style.transition = 'opacity 0.5s';
            toast.style.opacity = '0';
            setTimeout(() => toast.remove(), 500);
        }, 2000);
    }

    // Initialize preview listeners
    document.addEventListener('DOMContentLoaded', function() {
        // Delete Modal Confirm Button
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        if (confirmDeleteBtn) {
            confirmDeleteBtn.addEventListener('click', function() {
                if (deleteImageData) {
                    deleteImage(deleteImageData.type, deleteImageData.path, deleteImageData.index);
                }
            });
        }

        // Delete Image via AJAX
        function deleteImage(imageType, imagePath, imageIndex) {
            const formData = new FormData();
            formData.append('_token', document.querySelector('input[name="_token"]').value);
            formData.append('_method', 'PUT');
            
            if (imageType === 'gallery_images') {
                formData.append('delete_gallery_image', imagePath);
            } else if (imageType === 'additional_gallery') {
                formData.append('delete_additional_gallery_image', imagePath);
            }

            fetch('{{ route('admin.projects.web-details.update', $project) }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (response.redirected) {
                    window.location.href = response.url;
                } else {
                    return response.json();
                }
            })
            .then(data => {
                if (data && data.success) {
                    // Remove image from DOM
                    const imageElement = document.getElementById(imageType === 'gallery_images' ? 'gallery_image_' + imageIndex : 'additional_gallery_image_' + imageIndex);
                    if (imageElement) {
                        imageElement.remove();
                    }
                    // Close modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('deleteImageModal'));
                    if (modal) {
                        modal.hide();
                    }
                    // Reload page to refresh images
                    window.location.reload();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('حدث خطأ أثناء حذف الصورة');
            });
        }

        // Hero Banner
        const heroBannerInput = document.querySelector('input[name="hero_banner"]');
        if (heroBannerInput) {
            heroBannerInput.addEventListener('change', function() {
                previewImage(this, 'hero_banner_preview');
            });
        }

        // Gallery Images
        const galleryInput = document.querySelector('input[name="gallery_images[]"]');
        if (galleryInput) {
            galleryInput.addEventListener('change', function() {
                previewMultipleImages(this, 'gallery_preview_container');
            });
        }

        // Challenge Image
        const challengeImageInput = document.querySelector('input[name="challenge_image"]');
        if (challengeImageInput) {
            challengeImageInput.addEventListener('change', function() {
                previewImage(this, 'challenge_image_preview');
            });
        }

        // Solution Image
        const solutionImageInput = document.querySelector('input[name="solution_image"]');
        if (solutionImageInput) {
            solutionImageInput.addEventListener('change', function() {
                previewImage(this, 'solution_image_preview');
            });
        }

        // Additional Gallery
        const additionalGalleryInput = document.querySelector('input[name="additional_gallery[]"]');
        if (additionalGalleryInput) {
            additionalGalleryInput.addEventListener('change', function() {
                previewMultipleImages(this, 'additional_gallery_preview_container');
            });
        }

        // Initialize Drag and Drop for Gallery Images
        initializeDragAndDrop('gallery_preview_container', 'gallery_images_order');

        // Initialize Drag and Drop for Additional Gallery
        initializeDragAndDrop('additional_gallery_preview_container', 'additional_gallery_order');
    });
</script>
@endpush
