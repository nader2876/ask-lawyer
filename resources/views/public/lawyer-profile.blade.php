@extends('layouts.app')

@section('title', 'Lawyer Profile - LegalQ&A')

@section('styles')
    <style>
        .profile-header { background: linear-gradient(135deg, var(--bg-tertiary) 0%, var(--bg-secondary) 100%); }
        .nav-tabs .nav-link { color: var(--text-muted); border: none; border-bottom: 2px solid transparent; }
        .nav-tabs .nav-link:hover { color: var(--text-primary); }
        .nav-tabs .nav-link.active { background: transparent; color: var(--primary); border-bottom: 2px solid var(--primary); font-weight: bold; }
    </style>
@endsection

@section('content')
    <!-- PROFILE HEADER -->
    <div class="container mt-5 pt-5">
        <div class="card bg-dark border-secondary shadow-lg mt-4 text-white">
            <div class="card-body p-4 p-lg-5">
                <div class="row">
                    <!-- Profile Image -->
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mx-auto" style="width: 150px; height: 150px; border: 4px solid var(--primary);">
                            <i class="fas fa-user-tie fa-4x text-white"></i>
                        </div>
                         <!-- Edit Button (Lawyer Only) -->
                         <div class="mt-3 lawyer-only d-none">
                            <a href="{{ route('lawyer.profile.edit') }}" class="btn btn-sm btn-outline-light rounded-pill px-3">
                                <i class="fas fa-edit me-1"></i> Edit Profile
                            </a>
                        </div>
                    </div>

                    <!-- Main Info -->
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h1 class="fw-bold mb-1" id="profileName">Atty. Marcus Aurelius</h1>
                                <p class="text-primary fs-5 mb-3" id="profileSpecialization">Criminal Law & Human Rights</p>
                                <div class="d-flex gap-2 ms-0 mb-4">
                                     <span class="badge bg-success"><i class="fas fa-check-circle me-1"></i>Verified</span>
                                     <span class="badge border border-secondary text-muted">15 Years Exp.</span>
                                </div>
                            </div>
                            <!-- Contact Actions (User Only) -->
                            <div class="ms-auto user-only d-none">
                                <button class="btn btn-gold rounded-pill px-4 mb-2 d-block w-100"><i class="fas fa-envelope me-2"></i>Message</button>
                                <button class="btn btn-outline-light rounded-pill px-4 d-block w-100"><i class="fas fa-phone me-2"></i>Call</button>
                            </div>
                        </div>

                        <div class="d-flex gap-4 text-muted small mt-2" id="contactDisplay">
                             <span><i class="fab fa-linkedin me-1"></i> linkedin.com/in/marcus</span>
                             <span><i class="fas fa-envelope me-1"></i> marcus@law.com</span>
                             <span><i class="fas fa-phone me-1"></i> +966 55 123 4567</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABS NAVIGATION -->
        <ul class="nav nav-tabs mt-5 border-secondary" id="profileTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active py-3 px-4" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">Overview</button>
            </li>
            <li class="nav-item">
                <button class="nav-link py-3 px-4" id="answers-tab" data-bs-toggle="tab" data-bs-target="#answers" type="button" role="tab">Answers (142)</button>
            </li>
            <li class="nav-item">
                <button class="nav-link py-3 px-4" id="articles-tab" data-bs-toggle="tab" data-bs-target="#articles" type="button" role="tab">Articles (12)</button>
            </li>
        </ul>

        <!-- TABS CONTENT -->
        <div class="tab-content py-4" id="profileTabsContent">

            <!-- OVERVIEW TAB -->
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card bg-dark border-secondary mb-4">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3 text-warning"><i class="fas fa-user me-2"></i>About</h5>
                                <p class="text-muted" id="profileBio">
                                    Marcus Aurelius is a distinguished legal professional with over 15 years of experience in criminal defense and human rights litigation. He has successfully represented clients in high-profile cases and is known for his strategic approach and unwavering dedication to justice.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card bg-dark border-secondary h-100">
                                    <div class="card-body">
                                        <h6 class="fw-bold text-white mb-2"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Location</h6>
                                        <p class="text-muted mb-0">Riyadh, Saudi Arabia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card bg-dark border-secondary h-100">
                                    <div class="card-body">
                                        <h6 class="fw-bold text-white mb-2"><i class="fas fa-university me-2 text-info"></i>Education</h6>
                                        <p class="text-muted mb-0">LL.M. from King Saud University</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold mb-3 text-secondary text-uppercase small">Stats</h6>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="card bg-dark border-secondary text-center py-3">
                                    <h3 class="fw-bold text-primary mb-0">98%</h3>
                                    <small class="text-muted">Success Rate</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bg-dark border-secondary text-center py-3">
                                    <h3 class="fw-bold text-warning mb-0">4.9</h3>
                                    <small class="text-muted">Rating</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bg-dark border-secondary text-center py-3">
                                    <h3 class="fw-bold text-success mb-0">1.2k</h3>
                                    <small class="text-muted">Consultations</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bg-dark border-secondary text-center py-3">
                                    <h3 class="fw-bold text-info mb-0">15yr</h3>
                                    <small class="text-muted">Experience</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ANSWERS TAB -->
            <div class="tab-pane fade" id="answers" role="tabpanel">
                <div class="d-flex flex-column gap-3">
                    <!-- Sample Answer 1 -->
                    <div class="card bg-dark border-secondary card-hover">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-secondary text-info">Criminal Law</span>
                                <small class="text-muted">2 days ago</small>
                            </div>
                            <h5 class="card-title"><a href="{{ route('question-details') }}" class="text-white text-decoration-none hover-primary">What are the penalties for cybercrime defamation in KSA?</a></h5>
                            <p class="card-text text-muted mb-0">Under the Anti-Cyber Crime Law, defamation via electronic means involves penalties including imprisonment for up to one year and a fine not exceeding 500,000 riyals...</p>
                        </div>
                    </div>
                    <!-- Sample Answer 2 -->
                    <div class="card bg-dark border-secondary card-hover">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-secondary text-warning">Family Law</span>
                                <small class="text-muted">5 days ago</small>
                            </div>
                            <h5 class="card-title"><a href="{{ route('question-details') }}" class="text-white text-decoration-none hover-primary">Custody rights for expatriate mothers after divorce?</a></h5>
                            <p class="card-text text-muted mb-0">The Personal Status Law 2022 prioritizes the child's best interest. Generally, custody remains with the mother unless proven unfit, regardless of nationality...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ARTICLES TAB -->
            <div class="tab-pane fade" id="articles" role="tabpanel">
                <div class="row g-4">
                    <!-- Sample Article 1 -->
                    <div class="col-md-6">
                        <div class="card bg-dark border-secondary h-100 card-hover">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-primary">Corporate</span>
                                    <small class="text-muted">1 week ago</small>
                                </div>
                                <h5 class="card-title"><a href="{{ route('article-details') }}" class="text-white text-decoration-none hover-primary">Understanding the New Commercial Courts Law</a></h5>
                                <p class="card-text text-muted small">A deep dive into how the new regulations streamline commercial litigation and what it means for foreign investors.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Sample Article 2 -->
                    <div class="col-md-6">
                        <div class="card bg-dark border-secondary h-100 card-hover">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="badge bg-success">Real Estate</span>
                                    <small class="text-muted">2 weeks ago</small>
                                </div>
                                <h5 class="card-title"><a href="{{ route('article-details') }}" class="text-white text-decoration-none hover-primary">Property Ownership Rules for Non-Saudis</a></h5>
                                <p class="card-text text-muted small">An updated guide on REGA regulations concerning foreign ownership of residential and commercial real estate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
