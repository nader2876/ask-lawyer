@extends('layouts.lawyer')

@section('title', 'Write Article - Legal Q&A')
@section('page-title', 'Write New Article')

@section('styles')
    <!-- Optional: Site specific styles if needed, though admin.css should cover most -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm">
                    <div class="card-header py-3">
                        <h5 class="mb-0"><i class="fas fa-pen me-2 text-primary"></i>Write New Article</h5>
                    </div>
                    <div class="card-body">
                        <!-- Article Form -->
                        <!-- BACKEND: POST /lawyer/articles -->
                        <form id="articleForm" action="#" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Article Title</label>
                                <input type="text" class="form-control" name="title" placeholder="e.g., Understanding Corporate Governance in UAE" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Category</label>
                                <select class="form-select" name="category" required>
                                    <option value="">Select a category...</option>
                                    <option value="Corporate Law">Corporate Law</option>
                                    <option value="Family Law">Family Law</option>
                                    <option value="Criminal Law">Criminal Law</option>
                                    <option value="IP Law">IP Law</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Employment Law">Employment Law</option>
                                    <option value="Tax Law">Tax Law</option>
                                    <option value="Immigration">Immigration</option>
                                    <option value="Consumer Rights">Consumer Rights</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Article Content</label>
                                <textarea class="form-control" name="content" rows="15" placeholder="Write your article here..." required></textarea>
                                <small class="text-muted">You can use markdown formatting</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tags (optional)</label>
                                <input type="text" class="form-control" name="tags" placeholder="e.g., business, startup, LLC">
                                <small class="text-muted">Separate tags with commas</small>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i>Publish Article
                                </button>
                                <button type="button" class="btn btn-outline-secondary" onclick="saveDraft()">
                                    <i class="fas fa-save me-2"></i>Save Draft
                                </button>
                                <a href="{{ route('lawyer.articles.index') }}" class="btn btn-outline-danger">
                                    <i class="fas fa-times me-2"></i>Cancel
                                </a>
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
        // Handle form submission demo
        document.getElementById('articleForm')?.addEventListener('submit', (e) => {
            e.preventDefault();
            // In a real app, this would submit to the backend
            // For now, we simulate success
            if (typeof Toast !== 'undefined') {
                Toast.success('Article published successfully! (Demo)');
            } else {
                alert('Article published successfully! (Demo)');
            }
            
            setTimeout(() => {
                window.location.href = "{{ route('lawyer.articles.index') }}";
            }, 1000);
        });

        // Save draft
        function saveDraft() {
             if (typeof Toast !== 'undefined') {
                Toast.info('Draft saved! (Demo)');
            } else {
                alert('Draft saved! (Demo)');
            }
        }
    </script>
@endsection
