@extends('layouts.public')

@section('title', 'LegalQ&A - Public Questions Feed')

@section('content')
    <section class="hero-section text-center pt-5 mt-5">
        <div class="container mt-5">
            <h1 class="display-4 fw-bold mb-4">Get Expert Legal Advice, <span class="text-warning">Instantly</span></h1>
            <p class="lead text-muted mb-5">Browse legal questions or ask your own to verified professionals.</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="input-group input-group-lg shadow-lg border border-secondary rounded-pill overflow-hidden bg-primary-navy">
                        <span class="input-group-text bg-transparent border-0 text-muted ps-4"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control bg-transparent border-0 py-3" placeholder="Search questions by keyword..." 
                               data-filter-search data-filter-target="questions-container">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="filter-sidebar">
                    <div class="card p-3 shadow-sm border-secondary mb-4">
                        <h6 class="fw-bold mb-3"><i class="fas fa-filter text-warning me-2"></i> Categories</h6>
                        <select class="form-select mb-3" data-filter-category data-filter-target="questions-container">
                            <option value="">All Categories</option>
                            <option value="Corporate Law">Corporate Law</option>
                            <option value="Family Law">Family Law</option>
                            <option value="IP Law">IP Law</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Criminal Law">Criminal Law</option>
                            <option value="Consumer Rights">Consumer Rights</option>
                        </select>
                    </div>
                    <div class="card p-3 shadow-sm border-secondary">
                        <h6 class="fw-bold mb-3"><i class="fas fa-sort text-warning me-2"></i> Sort By</h6>
                        <select class="form-select" data-sort-selector data-sort-target="questions-container">
                            <option value="date-newest">Newest First</option>
                            <option value="date-oldest">Oldest First</option>
                            <option value="answers-most">Most Answered</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('/ask-question') }}" class="btn btn-gold w-100 rounded-pill py-3 fw-bold shadow">
                            <i class="fas fa-plus me-2"></i> Ask a Question
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="questions-container" class="row">
                    <!-- Sample Item 1 -->
                    <div class="col-12 mb-4" data-search-item data-category-item data-category="Corporate Law" data-date="2026-01-13" data-answers="5" data-sort-item>
                        <div class="card question-card h-100 p-4 card-hover overflow-hidden">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-soft-primary text-primary-soft badge-outline px-3 py-2 rounded-pill">Corporate Law</span>
                                <span class="text-muted small"><i class="fas fa-clock me-1"></i> Today</span>
                            </div>
                            <h5 class="fw-bold mb-3"><a href="{{ url('/question-details') }}" class="text-white text-decoration-none">Intellectual property rights for software algorithms?</a></h5>
                            <p class="text-muted small mb-4">I developed a unique sorting algorithm and want to know if I can patent it or if it falls under copyright only...</p>
                            <div class="d-flex align-items-center pt-3 border-top border-secondary">
                                <div class="small"><i class="fas fa-comments text-warning me-2"></i> <span class="text-white">5 Answers</span></div>
                                <div class="ms-4 small"><i class="fas fa-eye text-warning me-2"></i> <span class="text-white">342 Views</span></div>
                                <a href="{{ url('/question-details') }}" class="btn btn-outline-warning btn-sm rounded-pill px-4 ms-auto">Read Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Item 2 -->
                    <div class="col-12 mb-4" data-search-item data-category-item data-category="Family Law" data-date="2026-01-12" data-answers="3" data-sort-item>
                        <div class="card question-card h-100 p-4 card-hover overflow-hidden">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-soft-primary text-primary-soft badge-outline px-3 py-2 rounded-pill">Family Law</span>
                                <span class="text-muted small"><i class="fas fa-clock me-1"></i> Yesterday</span>
                            </div>
                            <h5 class="fw-bold mb-3"><a href="{{ url('/question-details') }}" class="text-white text-decoration-none">Divorce processing time in New York State?</a></h5>
                            <p class="text-muted small mb-4">Starting the process of mutual consent divorce. How long does the paperwork usually take to clear through the courts?</p>
                            <div class="d-flex align-items-center pt-3 border-top border-secondary">
                                <div class="small"><i class="fas fa-comments text-warning me-2"></i> <span class="text-white">3 Answers</span></div>
                                <div class="ms-4 small"><i class="fas fa-eye text-warning me-2"></i> <span class="text-white">128 Views</span></div>
                                <a href="{{ url('/question-details') }}" class="btn btn-outline-warning btn-sm rounded-pill px-4 ms-auto">Read Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Item 3 -->
                    <div class="col-12 mb-4" data-search-item data-category-item data-category="Real Estate" data-date="2026-01-10" data-answers="0" data-sort-item>
                        <div class="card question-card h-100 p-4 card-hover overflow-hidden">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-soft-primary text-primary-soft badge-outline px-3 py-2 rounded-pill">Real Estate</span>
                                <span class="text-muted small"><i class="fas fa-clock me-1"></i> 3 days ago</span>
                            </div>
                            <h5 class="fw-bold mb-3"><a href="{{ url('/question-details') }}" class="text-white text-decoration-none">Security deposit dispute with former landlord?</a></h5>
                            <p class="text-muted small mb-4">My landlord is withholding $800 from my deposit for carpet cleaning that I believe is normal wear and tear...</p>
                            <div class="d-flex align-items-center pt-3 border-top border-secondary">
                                <div class="small"><i class="fas fa-comments text-warning me-2"></i> <span class="text-white">0 Answers</span></div>
                                <div class="ms-4 small"><i class="fas fa-eye text-warning me-2"></i> <span class="text-white">56 Views</span></div>
                                <a href="{{ url('/question-details') }}" class="btn btn-outline-warning btn-sm rounded-pill px-4 ms-auto">Read Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Item 4 -->
                    <div class="col-12 mb-4" data-search-item data-category-item data-category="Criminal Law" data-date="2026-01-08" data-answers="10" data-sort-item>
                        <div class="card question-card h-100 p-4 card-hover overflow-hidden">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-soft-primary text-primary-soft badge-outline px-3 py-2 rounded-pill">Criminal Law</span>
                                <span class="text-muted small"><i class="fas fa-clock me-1"></i> 5 days ago</span>
                            </div>
                            <h5 class="fw-bold mb-3"><a href="{{ url('/question-details') }}" class="text-white text-decoration-none">DUI first offense consequences?</a></h5>
                            <p class="text-muted small mb-4">Facing a first-time DUI charge. What are the typical license suspension periods and mandatory fines?</p>
                            <div class="d-flex align-items-center pt-3 border-top border-secondary">
                                <div class="small"><i class="fas fa-comments text-warning me-2"></i> <span class="text-white">10 Answers</span></div>
                                <div class="ms-4 small"><i class="fas fa-eye text-warning me-2"></i> <span class="text-white">942 Views</span></div>
                                <a href="{{ url('/question-details') }}" class="btn btn-outline-warning btn-sm rounded-pill px-4 ms-auto">Read Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Item 5 -->
                    <div class="col-12 mb-4" data-search-item data-category-item data-category="IP Law" data-date="2026-01-05" data-answers="2" data-sort-item>
                        <div class="card question-card h-100 p-4 card-hover overflow-hidden">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-soft-primary text-primary-soft badge-outline px-3 py-2 rounded-pill">IP Law</span>
                                <span class="text-muted small"><i class="fas fa-clock me-1"></i> 1 week ago</span>
                            </div>
                            <h5 class="fw-bold mb-3"><a href="{{ url('/question-details') }}" class="text-white text-decoration-none">Trademarking a catchy slogan for small business?</a></h5>
                            <p class="text-muted small mb-4">I have a slogan for my boutique and want to protect it nationally. What is the USPTO filing process like?</p>
                            <div class="d-flex align-items-center pt-3 border-top border-secondary">
                                <div class="small"><i class="fas fa-comments text-warning me-2"></i> <span class="text-white">2 Answers</span></div>
                                <a href="{{ url('/question-details') }}" class="btn btn-outline-warning btn-sm rounded-pill px-4 ms-auto">Read Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
