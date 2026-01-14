@extends('layouts.app')

@section('title', 'Become a Verified Lawyer - LegalQ&A')

@section('content')
    <div class="container py-5 mt-5">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-8">
                <div class="card border-secondary shadow-lg overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-5 bg-primary p-5 text-white d-flex flex-column justify-content-center">
                            <i class="fas fa-certificate fa-4x mb-4 text-warning"></i>
                            <h2 class="fw-bold mb-3">Join the Professional Network</h2>
                            <p class="opacity-75">Connect with clients, establish your authority, and help the community with expert legal advice.</p>
                            <ul class="list-unstyled small mt-4">
                                <li class="mb-2"><i class="fas fa-check-circle me-2 text-warning"></i> Professional Badge</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2 text-warning"></i> Unlimited Articles</li>
                                <li><i class="fas fa-check-circle me-2 text-warning"></i> Priority Listing</li>
                            </ul>
                        </div>
                        <div class="col-md-7 p-4 p-md-5">
                            <h4 class="fw-bold mb-4">Submit Verification Request</h4>
                            <form onsubmit="event.preventDefault(); handleDemoAction('Submit Verification', 'Lawyer Onboarding')">
                                <div class="mb-3">
                                    <label class="form-label small fw-bold">Full Professional Name</label>
                                    <input type="text" class="form-control" placeholder="Atty. Jane Smith" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold">Primary Specialization</label>
                                    <select class="form-select" required>
                                        <option value="">Select a Category</option>
                                        <option>Corporate Law</option>
                                        <option>Family Law</option>
                                        <option>IP Law</option>
                                        <option>Real Estate</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold">License / Bar ID Number</label>
                                    <input type="text" class="form-control" placeholder="BAR-XXXXX-XX" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label small fw-bold">Years of Experience</label>
                                    <input type="number" class="form-control" min="0" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary rounded-pill py-3 fw-bold">Submit for Admin Review</button>
                                </div>
                                <p class="text-muted small text-center mt-3 mb-0">Review usually takes 24-48 business hours.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
