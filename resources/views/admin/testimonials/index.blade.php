@extends('admin.layouts.master')

@section('title', __('admin.testimonials_management'))

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('admin.testimonials_management') }}</h1>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> {{ __('admin.add_testimonial') }}
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
                            <th width="80">{{ __('admin.image') }}</th>
                            <th>{{ __('admin.name_en') }}</th>
                            <th>{{ __('admin.name_ar') }}</th>
                            <th>{{ __('admin.role_en') }}</th>
                            <th>{{ __('admin.role_ar') }}</th>
                            <th width="150">{{ __('admin.rating') }}</th>
                            <th width="80">{{ __('admin.order') }}</th>
                            <th width="100">{{ __('admin.status') }}</th>
                            <th width="200">{{ __('admin.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $testimonial)
                            <tr>
                                <td>
                                    @if($testimonial->image)
                                        <img src="{{ asset('storage/' . $testimonial->image) }}"
                                             alt="{{ $testimonial->name['en'] ?? '' }}"
                                             class="img-thumbnail rounded-circle"
                                             style="width: 60px; height: 60px; object-fit: cover;">
                                    @else
                                        <div class="bg-light text-center rounded-circle" style="width: 60px; height: 60px; line-height: 60px;">
                                            <i class="fas fa-user text-muted"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $testimonial->name['en'] ?? 'N/A' }}</td>
                                <td>{{ $testimonial->name['ar'] ?? 'N/A' }}</td>
                                <td>{{ $testimonial->role['en'] ?? 'N/A' }}</td>
                                <td>{{ $testimonial->role['ar'] ?? 'N/A' }}</td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial->rating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-muted"></i>
                                        @endif
                                    @endfor
                                    <span class="ml-2 text-muted">({{ $testimonial->rating }}/5)</span>
                                </td>
                                <td class="text-center">{{ $testimonial->order }}</td>
                                <td class="text-center">
                                    @if($testimonial->is_active)
                                        <span class="badge badge-success">{{ __('admin.active') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('admin.inactive') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.testimonials.show', $testimonial) }}"
                                       class="btn btn-sm btn-info" title="{{ __('admin.view') }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                                       class="btn btn-sm btn-warning" title="{{ __('admin.edit') }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}"
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
                                <td colspan="9" class="text-center py-4">
                                    <p class="text-muted mb-0">No testimonials found.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($testimonials->hasPages())
                <div class="mt-3">
                    {{ $testimonials->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
