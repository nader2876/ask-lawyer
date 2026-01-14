@extends('layouts.app')

@section('title', 'Legal Q&A - Ask a Question')

@section('content')
    <!-- Main Content -->
    <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card border-secondary shadow-lg">
                    <div class="card-header border-secondary bg-transparent text-center py-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-question fa-2x text-white"></i>
                        </div>
                        <h2 class="fw-bold mb-0">Ask a Question</h2>
                        <p class="text-muted mb-0">Get verified answers from legal professionals</p>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form id="askForm" onsubmit="event.preventDefault(); submitQuestion();">
                            <div class="mb-4">
                                <label class="form-label fw-bold">Question Title</label>
                                <input type="text" class="form-control form-control-lg" placeholder="E.g., Landlord dispute regarding security deposit" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Legal Category</label>
                                <select class="form-select form-select-lg" required>
                                    <option value="">Select Category...</option>
                                    <option>Criminal Law</option>
                                    <option>Corporate Law</option>
                                    <option>Family Law</option>
                                    <option>Labor Law</option>
                                    <option>Real Estate</option>
                                    <option>Intellectual Property</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Details</label>
                                <textarea class="form-control" rows="6" placeholder="Describe your situation in detail. Do not include personal names or sensitive data." required></textarea>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="anonCheck">
                                <label class="form-check-label text-muted small" for="anonCheck">
                                    Post anonymously
                                </label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-bold">
                                    Submit Question
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ url('/') }}" class="text-muted text-decoration-none small"><i class="fas fa-arrow-left me-1"></i> Back to Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Toast -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div id="submitToast" class="toast bg-success text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            <i class="fas fa-check-circle me-2"></i> Demo: Question submitted successfully!
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
    <script>
        function submitQuestion() {
            // Check if user is allowed
            // In a real app we would check session. In demo, if they are on this page (and it's not hidden), they are likely a user.
            // But let's check ui.js state just in case.

            const toastEl = document.getElementById('submitToast');
            const toast = new bootstrap.Toast(toastEl);
            toast.show();

            // clear form
            document.getElementById('askForm').reset();

            // Redirect after delay
            setTimeout(() => {
                window.location.href = "{{ url('/') }}";
            }, 1500);
        }
    </script>
@endsection
