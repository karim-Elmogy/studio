@extends('admin.layouts.master')

@section('title', 'View Contact Message')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contact Message Details</h1>
        <div>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> {{ __('admin.back') }}
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Message Information</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.name') }}</h6>
                            <p>{{ $contact->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.email') }}</h6>
                            <p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.phone') }}</h6>
                            <p>{{ $contact->phone ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.company') }}</h6>
                            <p>{{ $contact->company ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-muted">{{ __('admin.subject') }}</h6>
                        <p>{{ $contact->subject }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-muted">{{ __('admin.message') }}</h6>
                        <div class="card bg-light">
                            <div class="card-body">
                                <p class="mb-0">{{ $contact->message }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('admin.received_at') }}</h6>
                            <p>{{ $contact->created_at->format('F d, Y') }}<br>
                               <small class="text-muted">{{ $contact->created_at->format('H:i:s') }}</small>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">IP Address</h6>
                            <p>{{ $contact->ip_address ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Status Management</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.contacts.update', $contact) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="status">Current Status</label>
                            <select class="form-control @error('status') is-invalid @enderror"
                                    id="status" name="status" required>
                                <option value="pending" {{ $contact->status === 'pending' ? 'selected' : '' }}>
                                    Pending
                                </option>
                                <option value="in_progress" {{ $contact->status === 'in_progress' ? 'selected' : '' }}>
                                    In Progress
                                </option>
                                <option value="resolved" {{ $contact->status === 'resolved' ? 'selected' : '' }}>
                                    Resolved
                                </option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="notes">Internal Notes (Optional)</label>
                            <textarea class="form-control" id="notes" name="notes" rows="4"
                                      placeholder="Add internal notes about this message...">{{ old('notes', $contact->notes) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save"></i> {{ __('admin.update_status') }}
                        </button>
                    </form>

                    <hr>

                    <div class="mt-3">
                        <h6 class="text-muted mb-2">Quick Actions</h6>
                        <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}"
                           class="btn btn-info btn-block btn-sm">
                            <i class="fas fa-envelope"></i> Reply via Email
                        </a>
                        @if($contact->phone)
                            <a href="tel:{{ $contact->phone }}" class="btn btn-success btn-block btn-sm">
                                <i class="fas fa-phone"></i> Call {{ $contact->phone }}
                            </a>
                        @endif
                        <form action="{{ route('admin.contacts.destroy', $contact) }}"
                              method="POST"
                              onsubmit="return confirm('{{ __('admin.confirm_delete') }}');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block btn-sm">
                                <i class="fas fa-trash"></i> Delete Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            @if($contact->notes)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Notes</h6>
                </div>
                <div class="card-body">
                    <p class="mb-0">{{ $contact->notes }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
