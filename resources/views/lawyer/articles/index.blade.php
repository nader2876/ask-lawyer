@extends('layouts.lawyer')

@section('title', 'My Articles - Legal Q&A')

@section('page-title', 'My Articles')

@section('styles')
    <!-- Optional: Site specific styles -->
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div></div> <!-- Spacer -->
            <a href="{{ route('lawyer.articles.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Write New Article
            </a>
        </div>

        <!-- Articles List -->
        <!-- BACKEND: GET /lawyer/articles -->
        <div id="articlesContainer">
            <div class="row g-4">
                <!-- Sample Article 1 -->
                <div class="col-12">
                    <div class="card card-hover shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 class="mb-2">Understanding Corporate Governance in UAE</h5>
                                    <div class="d-flex gap-3 text-muted small">
                                        <span><i class="fas fa-tag me-1"></i>Corporate Law</span>
                                        <span><i class="fas fa-calendar me-1"></i>2026-01-13</span>
                                        <span><i class="fas fa-eye me-1"></i>245 views</span>
                                    </div>
                                </div>
                                <span class="badge bg-success">Published</span>
                            </div>
                            <p class="text-secondary mb-3">
                                A comprehensive guide to corporate governance principles and best practices in the United Arab Emirates...
                            </p>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary"> <!-- Use route('public.articles.show', $id) in production -->
                                    <i class="fas fa-eye me-1"></i>View
                                </a>
                                <a href="{{ route('lawyer.articles.edit') }}" class="btn btn-sm btn-outline-warning">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteArticle('ART-001')">
                                    <i class="fas fa-trash me-1"></i>Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sample Article 2 -->
                <div class="col-12">
                    <div class="card card-hover shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 class="mb-2">Starting a Business in UAE Free Zones</h5>
                                    <div class="d-flex gap-3 text-muted small">
                                        <span><i class="fas fa-tag me-1"></i>Corporate Law</span>
                                        <span><i class="fas fa-calendar me-1"></i>2026-01-08</span>
                                        <span><i class="fas fa-eye me-1"></i>189 views</span>
                                    </div>
                                </div>
                                <span class="badge bg-success">Published</span>
                            </div>
                            <p class="text-secondary mb-3">
                                Everything you need to know about establishing your business in one of UAE's many free zones...
                            </p>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye me-1"></i>View
                                </a>
                                <a href="{{ route('lawyer.articles.edit') }}" class="btn btn-sm btn-outline-warning">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteArticle('ART-002')">
                                    <i class="fas fa-trash me-1"></i>Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sample Draft -->
                <div class="col-12">
                    <div class="card card-hover shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 class="mb-2">Mergers and Acquisitions in the UAE</h5>
                                    <div class="d-flex gap-3 text-muted small">
                                        <span><i class="fas fa-tag me-1"></i>Corporate Law</span>
                                        <span><i class="fas fa-calendar me-1"></i>2026-01-05</span>
                                    </div>
                                </div>
                                <span class="badge bg-secondary">Draft</span>
                            </div>
                            <p class="text-secondary mb-3">
                                An in-depth analysis of M&A regulations and procedures...
                            </p>
                            <div class="d-flex gap-2">
                                <a href="{{ route('lawyer.articles.create') }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-pen me-1"></i>Continue Writing
                                </a>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteArticle('ART-003')">
                                    <i class="fas fa-trash me-1"></i>Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Empty State (Hidden for demo since we have items) -->
            <div id="emptyState" style="display: none;">
                <div class="text-center py-5">
                    <i class="fas fa-file-alt text-muted" style="font-size: 4rem; opacity: 0.3;"></i>
                    <h4 class="mt-3 text-secondary">No Articles Yet</h4>
                    <p class="text-muted">Start sharing your legal expertise by writing your first article.</p>
                    <a href="{{ route('lawyer.articles.create') }}" class="btn btn-primary mt-3">
                        <i class="fas fa-plus me-2"></i>Write Your First Article
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Delete article
        function deleteArticle(articleId) {
            if (confirm('Are you sure you want to delete this article?')) {
                // In a real app, this would be an AJAX call
                if (typeof Toast !== 'undefined') {
                    Toast.success('Article deleted successfully! (Demo)');
                } else {
                    alert('Article deleted successfully! (Demo)');
                }
            }
        }
    </script>
@endsection
