@extends('layouts.lawyer')

@section('title', 'Edit Article - LegalQ&A')
@section('page-title', 'Edit Article')

@section('styles')
    <!-- Optional styles -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-pen-nib me-2 text-primary"></i>Edit Article</h5>
                        <span class="badge bg-warning text-dark">Draft Mode</span>
                    </div>
                    <div class="card-body p-4">
                        <form id="editArticleForm" onsubmit="event.preventDefault(); saveArticle();">
                            <div class="mb-4">
                                <label class="form-label fw-bold small text-uppercase text-secondary">Article Title</label>
                                <input type="text" class="form-control form-control-lg" name="title" value="Understanding the New Commercial Courts Law" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold small text-uppercase text-secondary">Category</label>
                                <select class="form-select" name="category" required>
                                    <option value="">Select Category...</option>
                                    <option value="Corporate Law" selected>Corporate Law</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Intellectual Property">Intellectual Property</option>
                                    <option value="Criminal Law">Criminal Law</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold small text-uppercase text-secondary">Content</label>
                                <textarea class="form-control" rows="12" required>The new Commercial Courts Law in Saudi Arabia represents a significant shift towards efficiency and modernization in the legal landscape.

Key provisions include:
1. Digital case management
2. Strict timelines for proceedings
3. Private sector involvement in enforcement

[Sample content truncated for editing...]</textarea>
                                <small class="text-muted">Markdown formatting supported.</small>
                            </div>

                            <div class="mb-5">
                                <label class="form-label fw-bold small text-uppercase text-secondary">Tags</label>
                                <input type="text" class="form-control" name="tags" value="Corporate, Saudi Law, Commercial Court, Business">
                                <small class="text-muted">Comma separated tags.</small>
                            </div>

                            <!-- Actions -->
                            <div class="d-flex justify-content-end gap-3 pt-3 border-top">
                                <a href="{{ route('lawyer.articles.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary px-4 fw-bold">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function saveArticle() {
            // Use shared Toast if available, otherwise alert
            if (typeof Toast !== 'undefined') {
                Toast.success('Demo: Article updated locally!');
            } else {
                alert('Demo: Article updated locally!');
            }

            // Redirect back after delay
            setTimeout(() => {
                window.location.href = "{{ route('lawyer.articles.index') }}";
            }, 1000);
        }
    </script>
@endsection
