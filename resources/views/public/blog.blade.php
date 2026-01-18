@extends('layouts.public')

@section('title', 'LegalQ&A - Insights Blog')

@section('content')
    <section class="hero-section text-center pt-5 mt-5 bg-dark">
        <div class="container mt-5">
            <h1 class="display-4 fw-bold mb-4">Legal <span class="text-warning">Insights & Tips</span></h1>
            <p class="lead text-muted mb-5">Read articles written by verified legal professionals to stay informed.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill py-3 border-secondary bg-primary-navy" placeholder="Search articles..." data-filter-search data-filter-target="blog-grid">
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <select class="form-select rounded-pill py-3 border-secondary bg-primary-navy" data-filter-category data-filter-target="blog-grid">
                    <option value="">All Topics</option>
                    <option value="Corporate Law">Corporate Law</option>
                    <option value="Family Law">Family Law</option>
                    <option value="IP Law">IP Law</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Criminal Law">Criminal Law</option>
                    <option value="Consumer Rights">Consumer Rights</option>
                </select>
            </div>
        </div>

        <div id="blog-grid" class="row">
            <!-- Article 1 -->
            <div class="col-md-6 col-lg-4 mb-4" data-search-item data-category-item data-category="Consumer Rights">
                <div class="card h-100 border-secondary card-hover overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=800&auto=format&fit=crop&q=60" class="card-img-top" alt="Law">
                    <div class="card-body p-4">
                        <div class="mb-3"><span class="badge bg-soft-primary text-primary-soft badge-outline rounded-pill">Consumer Rights</span></div>
                        <h5 class="fw-bold mb-3"><a href="{{ route('article-details') }}" class="text-white text-decoration-none">How to handle faulty products: A legal guide</a></h5>
                        <p class="text-muted small">Understanding the consumer protection act and your rights to refund or replacement...</p>
                        <div class="d-flex align-items-center mt-4 pt-3 border-top border-secondary">
                            <span class="small text-muted">Atty. David Hale</span>
                            <span class="ms-auto small text-muted">Jan 10, 2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="col-md-6 col-lg-4 mb-4" data-search-item data-category-item data-category="Startups">
                <div class="card h-100 border-secondary card-hover overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&auto=format&fit=crop&q=60" class="card-img-top" alt="Startup">
                    <div class="card-body p-4">
                        <div class="mb-3"><span class="badge bg-soft-primary text-primary-soft badge-outline rounded-pill">Startups</span></div>
                        <h5 class="fw-bold mb-3"><a href="{{ route('article-details') }}" class="text-white text-decoration-none">LLC vs C-Corp: Which is right for your startup?</a></h5>
                        <p class="text-muted small">A deep dive into tax implications and legal protections for new business owners...</p>
                        <div class="d-flex align-items-center mt-4 pt-3 border-top border-secondary">
                            <span class="small text-muted">Atty. Marcus Vane</span>
                            <span class="ms-auto small text-muted">Jan 12, 2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More articles... -->
        </div>
    </div>
@endsection
