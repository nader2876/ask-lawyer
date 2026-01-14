@extends('layouts.app')

@section('title', 'LegalQ&A - Register')

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
                            <button class="nav-link active py-3 fw-bold rounded-0" id="user-tab" data-bs-toggle="tab" data-bs-target="#user-pane" type="button" role="tab" style="color: var(--text-primary);">Individual User</button>
                            <button class="nav-link py-3 fw-bold rounded-0" id="lawyer-tab" data-bs-toggle="tab" data-bs-target="#lawyer-pane" type="button" role="tab" style="color: var(--text-primary);">Legal Professional</button>
                        </div>
                    </div>

                    <div class="card-body p-4 pt-5">
                        <div class="tab-content" id="myTabContent">
                            <!-- USER FLOW -->
                            <div class="tab-pane fade show active" id="user-pane" role="tabpanel">
                                <form onsubmit="event.preventDefault(); alert('Demo: Created User Account'); window.location.href='{{ url('/login') }}'">
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Full Name</label>
                                        <input type="text" class="form-control rounded-pill px-4" placeholder="Jane Doe" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Email Address</label>
                                        <input type="email" class="form-control rounded-pill px-4" placeholder="jane@example.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Password</label>
                                        <input type="password" class="form-control rounded-pill px-4" placeholder="Min 8 characters" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label small fw-bold text-white">Confirm Password</label>
                                        <input type="password" class="form-control rounded-pill px-4" placeholder="Confirm password" required>
                                    </div>
                                    <div class="d-grid mb-4">
                                        <button type="submit" class="btn btn-gold rounded-pill py-2 fw-bold">Register as User</button>
                                    </div>
                                </form>
                            </div>

                            <!-- LAWYER FLOW -->
                            <div class="tab-pane fade" id="lawyer-pane" role="tabpanel">
                                <form onsubmit="event.preventDefault(); alert('Demo: Lawyer Request Submitted. Pending Admin Approval.'); window.location.href='{{ url('/') }}'">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Full Name</label>
                                            <input type="text" class="form-control rounded-pill px-4" placeholder="Atty. John Smith" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Bar Association #</label>
                                            <input type="text" class="form-control rounded-pill px-4" placeholder="BAR-12345" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Specialization</label>
                                        <select class="form-select rounded-pill px-4" required>
                                            <option value="">Select Primary Category...</option>
                                            <option value="corporate">Corporate Law</option>
                                            <option value="criminal">Criminal Law</option>
                                            <option value="family">Family Law</option>
                                            <option value="ip">Intellectual Property</option>
                                            <option value="real-estate">Real Estate</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Email Address</label>
                                        <input type="email" class="form-control rounded-pill px-4" placeholder="office@lawfirm.com" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Password</label>
                                            <input type="password" class="form-control rounded-pill px-4" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label small fw-bold text-white">Confirm</label>
                                            <input type="password" class="form-control rounded-pill px-4" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-white">Upload CV / Credentials</label>
                                        <input type="file" class="form-control rounded-pill px-4">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label small fw-bold text-white">Short Bio</label>
                                        <textarea class="form-control rounded-3 px-4" rows="3" placeholder="Brief introduction..."></textarea>
                                    </div>

                                    <div class="d-grid mb-4">
                                        <button type="submit" class="btn btn-outline-warning rounded-pill py-2 fw-bold">Submit for Approval</button>
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
