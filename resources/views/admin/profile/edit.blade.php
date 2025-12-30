@extends('layouts.master')

@section('title', __('My Profile'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('My Profile') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">{{ __('My Profile') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="row g-5 g-xl-10">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Update Profile') }}</h3>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" class="form" novalidate>
                    @csrf
                    <div class="card-body p-9">
                        <div class="row mb-6">
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('Name') }}</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control" required />
                                @error('name')<div class="text-danger fs-7 mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-2 col-form-label required fw-semibold fs-6">{{ __('Email') }}</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="form-control" required />
                                @error('email')<div class="text-danger fs-7 mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


