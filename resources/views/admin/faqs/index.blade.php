@extends('admin.layouts.master')

@section('title', __('admin.faqs_management'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.faqs_management') }}</h1>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> {{ __('admin.add_faq') }}
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th width="5%">#</th>
                            <th width="30%">{{ __('admin.question_en') }}</th>
                            <th width="30%">{{ __('admin.question_ar') }}</th>
                            <th width="15%">{{ __('admin.category') }}</th>
                            <th width="8%">{{ __('admin.order') }}</th>
                            <th width="8%">{{ __('admin.status') }}</th>
                            <th width="15%">{{ __('admin.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($faqs as $faq)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $faq->question['en'] ?? 'N/A' }}</td>
                                <td dir="rtl">{{ $faq->question['ar'] ?? 'N/A' }}</td>
                                <td>{{ $faq->category['en'] ?? 'N/A' }}</td>
                                <td class="text-center">{{ $faq->order }}</td>
                                <td class="text-center">
                                    @if($faq->is_active)
                                        <span class="badge badge-success">{{ __('admin.active') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('admin.inactive') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.faqs.show', $faq) }}"
                                       class="btn btn-sm btn-info" title="{{ __('admin.view') }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.faqs.edit', $faq) }}"
                                       class="btn btn-sm btn-warning" title="{{ __('admin.edit') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.faqs.destroy', $faq) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('{{ __('admin.confirm_delete') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="{{ __('admin.delete') }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    <p class="text-muted mb-0">No FAQs found.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($faqs->hasPages())
                <div class="mt-3">
                    {{ $faqs->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
