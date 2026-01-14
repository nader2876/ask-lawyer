@extends('layouts.app')

@section('title', 'LegalQ&A - Login')

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 60px;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-center mb-5">
                    <a href="{{ url('/') }}" class="text-decoration-none h2 fw-bold text-white">
                        <i class="fas fa-balance-scale text-warning me-2"></i>LEGAL<span class="text-warning">Q&A</span>
                    </a>
                </div>
                <div class="card shadow-lg border-secondary p-4 p-md-5 bg-dark">
                    <h3 class="fw-bold mb-4 text-white">Welcome Back</h3>
                    <form onsubmit="event.preventDefault(); window.location.href='{{ url('/') }}'">
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-white">Email Address</label>
                            <input type="email" class="form-control rounded-pill px-4 py-2" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold text-white">Password</label>
                            <input type="password" class="form-control rounded-pill px-4 py-2" placeholder="Enter password" required>
                        </div>
                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-gold rounded-pill py-2 fw-bold">Sign In</button>
                        </div>
                        <div class="text-center">
                            <p class="small text-muted mb-0">Don't have an account? <a href="{{ url('/register') }}" class="text-warning text-decoration-none">Register Now</a></p>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-4">
                    <p class="small text-muted">Demo Credentials:<br>admin@legalqa.com | user@demo.com | lawyer@demo.com</p>
                </div>
            </div>
        </div>
    </div>
@endsection
