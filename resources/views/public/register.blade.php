@extends('layouts.public')

@section('title', 'LegalQ&A - Register')

@section('styles')
<style>
    .nav-tabs {
        border-bottom-color: var(--border-color);
    }
    .nav-tabs .nav-link {
        color: var(--text-secondary);
        border: none;
        border-bottom: 2px solid transparent;
    }
    .nav-tabs .nav-link:hover {
        color: var(--text-primary);
        border-color: transparent;
    }
    .nav-tabs .nav-link.active {
        background-color: transparent !important;
        color: var(--warning) !important;
        border-bottom: 2px solid var(--warning);
    }
    /* File Input Styling */
    input[type="file"]::file-selector-button {
        background-color: var(--bg-tertiary) !important;
        color: var(--text-primary) !important;
        border: 1px solid var(--border-color) !important;
        border-right: 1px solid var(--border-color) !important;
        padding: 0.375rem 0.75rem;
        border-radius: 50rem;
        margin-right: 1rem;
        transition: all 0.2s;
    }
    input[type="file"]::file-selector-button:hover {
        background-color: var(--bg-secondary) !important;
        color: var(--primary) !important;
    }
</style>
@endsection

@section('content')
    <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Branding Header -->
                <div class="text-center mb-5">
                    <a href="{{ url('/') }}" class="text-decoration-none h2 fw-bold text-white">
                        <i class="fas fa-balance-scale text-warning me-2"></i>LEGAL<span class="text-warning">Q&A</span>
                    </a>
                </div>

                <div class="card shadow-lg border-secondary pb-4 bg-dark">
                    <div class="card-header border-bottom border-secondary bg-transparent p-0">
                        <!-- Dual Flow Tabs -->
                        <div class="nav nav-tabs nav-justified" id="regTab" role="tablist">
                            <button class="nav-link active py-3 fw-bold rounded-0" id="user-tab" data-bs-toggle="tab" data-bs-target="#user-pane" type="button" role="tab">Individual User</button>
                            <button class="nav-link py-3 fw-bold rounded-0" id="lawyer-tab" data-bs-toggle="tab" data-bs-target="#lawyer-pane" type="button" role="tab">Legal Professional</button>
                        </div>
                    </div>

                    <div class="card-body p-4 pt-5">
                        <div class="tab-content" id="myTabContent">
                            <!-- USER FLOW -->
                            <div class="tab-pane fade show active" id="user-pane" role="tabpanel">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <input type="hidden" name="role" value="user">
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Full Name</label>
                                        <input type="text" name="name" class="form-control rounded-pill px-4" placeholder="Jane Doe" value="{{ old('name') }}" required autofocus>
                                        @error('name')
                                            <span class="text-danger small ms-3">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Email Address</label>
                                        <input type="email" name="email" class="form-control rounded-pill px-4" placeholder="jane@example.com" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger small ms-3">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Password</label>
                                        <input type="password" name="password" class="form-control rounded-pill px-4" placeholder="Min 8 characters" required>
                                        @error('password')
                                            <span class="text-danger small ms-3">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label small fw-bold text-white">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control rounded-pill px-4" placeholder="Confirm password" required>
                                    </div>
                                    <div class="d-grid mb-4">
                                        <button type="submit" class="btn btn-gold rounded-pill py-2 fw-bold">Register as User</button>
                                    </div>
                                </form>
                            </div>

                            <!-- LAWYER FLOW -->
                            <div class="tab-pane fade" id="lawyer-pane" role="tabpanel">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="role" value="lawyer">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Full Name</label>
                                            <input type="text" name="name" class="form-control rounded-pill px-4" placeholder="Atty. John Smith" value="{{ old('name') }}" required>
                                            @error('name')
                                                <span class="text-danger small ms-3">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Bar Association #</label>
                                            <input type="text" name="bar_id" class="form-control rounded-pill px-4" placeholder="BAR-12345" value="{{ old('bar_id') }}" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Specialization</label>
                                        <select name="specialization" class="form-select rounded-pill px-4" required>
                                            <option value="">Select Primary Category...</option>
                                            <option value="corporate" {{ old('specialization') == 'corporate' ? 'selected' : '' }}>Corporate Law</option>
                                            <option value="criminal" {{ old('specialization') == 'criminal' ? 'selected' : '' }}>Criminal Law</option>
                                            <option value="family" {{ old('specialization') == 'family' ? 'selected' : '' }}>Family Law</option>
                                            <option value="ip" {{ old('specialization') == 'ip' ? 'selected' : '' }}>Intellectual Property</option>
                                            <option value="real-estate" {{ old('specialization') == 'real-estate' ? 'selected' : '' }}>Real Estate</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Email Address</label>
                                        <input type="email" name="email" class="form-control rounded-pill px-4" placeholder="office@lawfirm.com" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger small ms-3">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Password</label>
                                            <input type="password" name="password" class="form-control rounded-pill px-4" required>
                                            @error('password')
                                                <span class="text-danger small ms-3">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Confirm</label>
                                            <input type="password" name="password_confirmation" class="form-control rounded-pill px-4" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Upload CV / Credentials</label>
                                        <input type="file" name="cv" class="form-control rounded-pill px-4">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label small fw-bold text-white">Short Bio</label>
                                        <textarea name="bio" class="form-control rounded-3 px-4" rows="3" placeholder="Brief introduction...">{{ old('bio') }}</textarea>
                                    </div>

                                    <div class="d-grid mb-4">
                                        <button type="submit" class="btn btn-gold rounded-pill py-2 fw-bold">Submit for Approval</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="text-center border-top border-secondary pt-4">
                            <p class="small text-muted mb-0">Already have an account? <a href="{{ url('/login') }}" class="text-warning text-decoration-none">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
