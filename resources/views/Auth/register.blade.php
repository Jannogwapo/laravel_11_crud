@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card register-card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Create Account</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   placeholder="Enter your full name"
                                   value="{{ old('name') }}"
                                   autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   placeholder="Enter your email"
                                   value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password" 
                                   placeholder="Create a password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" 
                                   class="form-control @error('password_confirmation') is-invalid @enderror" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   placeholder="Confirm your password">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Create Account
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <p class="mb-0">Already have an account? 
                            <a href="{{ route('login') }}" class="text-primary">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }
    .register-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .card-body {
        padding: 2.5rem;
    }
    h2 {
        color: #333;
        font-weight: 600;
    }
    .form-label {
        color: #555;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    .form-control {
        padding: 0.75rem 1rem;
        border-radius: 8px;
        border: 1px solid #ddd;
        transition: border-color 0.2s ease;
    }
    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
    }
    .btn-primary {
        padding: 0.75rem;
        font-weight: 500;
        border-radius: 8px;
        background-color: #0d6efd;
        border: none;
        transition: background-color 0.2s ease;
    }
    .btn-primary:hover {
        background-color: #0b5ed7;
    }
    .text-primary {
        color: #0d6efd !important;
        text-decoration: none;
        font-weight: 500;
    }
    .text-primary:hover {
        text-decoration: underline;
    }
    .invalid-feedback {
        font-size: 0.875rem;
    }
    .alert {
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }
</style>
@endpush
@endsection