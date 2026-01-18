@extends('layouts.public')

@section('title', 'Legal Q&A - Ask a Question')

@section('content')
    <!-- Main Content -->
    <div class="container page-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card border-secondary shadow-lg">
                    <div class="card-header border-bottom border-secondary bg-transparent text-center py-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3 shadow" style="width: 64px; height: 64px;">
                            <i class="fas fa-question fa-2x"></i>
                        </div>
                        <h2 class="fw-bold mb-1">Ask a Question</h2>
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
                                <label class="form-check-label text-muted" for="anonCheck">
                                    Post anonymously
                                </label>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Submit Question
                                </button>
                                <a href="{{ url('/') }}" class="btn btn-link text-muted text-decoration-none">
                                    <i class="fas fa-arrow-left me-1"></i> Cancel & Return Home
                                </a>
                            </div>
                        </form>
                    </div>
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
