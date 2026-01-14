@extends('layouts.app')

@section('title', 'LegalQ&A - Browse Lawyers')

@section('content')
    <section class="hero-section text-center pt-5 mt-5 bg-dark">
        <div class="container mt-5">
            <h1 class="display-4 fw-bold mb-4">Find the Right <span class="text-warning">Legal Expert</span></h1>
            <p class="lead text-muted mb-5">Verified professionals specialized in over 15 areas of law.</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control rounded-pill py-3 border-secondary bg-primary-navy" placeholder="Search lawyer by name..." data-filter-search data-filter-target="lawyers-grid">
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-4 mb-3">
                <label class="small text-muted mb-1">Filter by Specialization</label>
                <select class="form-select rounded-pill border-secondary bg-primary-navy" data-filter-category data-filter-target="lawyers-grid">
                    <option value="">All Specializations</option>
                    <option value="Corporate Law">Corporate Law</option>
                    <option value="Family Law">Family Law</option>
                    <option value="IP Law">IP Law</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Criminal Law">Criminal Law</option>
                    <option value="Consumer Rights">Consumer Rights</option>
                </select>
            </div>
        </div>

        <div id="lawyers-grid" class="row">
            <!-- Sample Lawyer 1 -->
            <div class="col-md-4 mb-4" data-search-item data-category-item data-category="Family Law">
                <div class="card h-100 border-secondary p-4 text-center card-hover overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=fbbf24&color=000" class="rounded-circle mx-auto mb-3 border border-secondary p-1" width="100">
                    <h5 class="fw-bold mb-1">Atty. Sarah Johnson</h5>
                    <div class="mb-3"><span class="badge bg-soft-primary text-primary-soft badge-outline rounded-pill">Family Law</span></div>
                    <p class="text-muted small mb-4">Over 15 years experience in child custody and divorce settlements in California.</p>
                    <div class="d-flex justify-content-center gap-2 mb-4">
                        <span class="small text-white"><i class="fas fa-star text-warning me-1"></i> 4.9</span>
                        <span class="small text-muted text-decoration-none">| 124 Answers</span>
                    </div>
                    <a href="{{ url('/lawyer-profile') }}" class="btn btn-gold w-100 rounded-pill fw-bold">View Profile</a>
                </div>
            </div>

            <!-- Sample Lawyer 2 -->
            <div class="col-md-4 mb-4" data-search-item data-category-item data-category="Corporate Law">
                <div class="card h-100 border-secondary p-4 text-center card-hover overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Marcus+Vane&background=fbbf24&color=000" class="rounded-circle mx-auto mb-3 border border-secondary p-1" width="100">
                    <h5 class="fw-bold mb-1">Atty. Marcus Vane</h5>
                    <div class="mb-3"><span class="badge bg-soft-primary text-primary-soft badge-outline rounded-pill">Corporate Law</span></div>
                    <p class="text-muted small mb-4">Specialist in startup advisory, M&A and venture capital financing rounds.</p>
                    <div class="d-flex justify-content-center gap-2 mb-4">
                        <span class="small text-white"><i class="fas fa-star text-warning me-1"></i> 5.0</span>
                        <span class="small text-muted text-decoration-none">| 89 Answers</span>
                    </div>
                    <a href="{{ url('/lawyer-profile') }}" class="btn btn-gold w-100 rounded-pill fw-bold">View Profile</a>
                </div>
            </div>

            <!-- Sample Lawyer 3 -->
            <div class="col-md-4 mb-4" data-search-item data-category-item data-category="Criminal Law">
                <div class="card h-100 border-secondary p-4 text-center card-hover overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=David+Hale&background=fbbf24&color=000" class="rounded-circle mx-auto mb-3 border border-secondary p-1" width="100">
                    <h5 class="fw-bold mb-1">Atty. David Hale</h5>
                    <div class="mb-3"><span class="badge bg-soft-primary text-primary-soft badge-outline rounded-pill">Criminal Law</span></div>
                    <p class="text-muted small mb-4">Aggressive defense for DUI, white-collar crimes and felony charges.</p>
                    <div class="d-flex justify-content-center gap-2 mb-4">
                        <span class="small text-white"><i class="fas fa-star text-warning me-1"></i> 4.8</span>
                        <span class="small text-muted text-decoration-none">| 210 Answers</span>
                    </div>
                    <a href="{{ url('/lawyer-profile') }}" class="btn btn-gold w-100 rounded-pill fw-bold">View Profile</a>
                </div>
            </div>

            <!-- Add more instances to reach ~8 -->
            <div class="col-md-4 mb-4" data-search-item data-category-item data-category="Real Estate">
                <div class="card h-100 border-secondary p-4 text-center card-hover overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Elena+Rodriguez&background=fbbf24&color=000" class="rounded-circle mx-auto mb-3 border border-secondary p-1" width="100">
                    <h5 class="fw-bold mb-1">Atty. Elena Rodriguez</h5>
                    <div class="mb-3"><span class="badge bg-soft-primary text-primary-soft badge-outline rounded-pill">Real Estate</span></div>
                    <p class="text-muted small mb-4">Expert in commercial leasing, property disputes and closing procedures.</p>
                    <a href="{{ url('/lawyer-profile') }}" class="btn btn-gold w-100 rounded-pill fw-bold">View Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection
