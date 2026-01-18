@extends('layouts.public')

@section('title', 'Question Details - Legal Q&A')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
@endsection

@section('content')
    <div class="container py-5" style="margin-top: 60px;">
        <div class="row">
            <div class="col-lg-8">
                <!-- Question Section -->
                <!-- BACKEND: GET /api/questions/{id} -->
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge badge-secondary">IP Law</span>
                            <span class="text-muted small">Asked on Jan 13, 2026</span>
                        </div>
                        <h2 class="mb-3">How to register a trademark in UAE?</h2>
                        <p class="text-secondary mb-4">
                            I'm planning to launch a new tech startup in Dubai and want to protect my brand name and logo. 
                            What is the process for trademark registration in the UAE? How long does it take, and what are the costs involved?
                            Also, does UAE trademark protection extend to other GCC countries automatically?
                        </p>
                        <div class="d-flex align-items-center pt-3 border-top" style="border-color: var(--border-color) !important;">
                            <img src="https://ui-avatars.com/api/?name=Ahmed+Hassan&background=2563eb&color=fff" class="rounded-circle me-3" width="40">
                            <div>
                                <p class="mb-0 fw-semibold">Ahmed Hassan</p>
                                <small class="text-muted">Tech Entrepreneur</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Answers Header -->
                <h4 class="mb-3"><i class="fas fa-comments me-2" style="color: var(--primary);"></i>Answers (2)</h4>

                <!-- Answer 1 -->
                <!-- BACKEND: GET /api/questions/{id}/answers -->
                <div class="card mb-3">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=Dr+Khalid+Rahman&background=10b981&color=fff" class="rounded-circle me-3" width="40">
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-semibold">Dr. Khalid Rahman</p>
                                <small class="text-muted">IP & Corporate Law Specialist</small>
                            </div>
                            <span class="badge badge-success">Verified Lawyer</span>
                        </div>
                        <p class="text-secondary mb-3">
                            Trademark registration in UAE is handled by the Ministry of Economy. The process typically takes 6-12 months. 
                            You'll need to file an application with your brand details, pay the filing fee (around AED 1,000-3,000 depending on classes), 
                            and wait for examination. UAE trademark protection is territorial and does NOT automatically extend to other GCC countries - 
                            you need separate applications for each country or use the Madrid Protocol for international registration.
                        </p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-primary" onclick="likeAnswer('ANS-001')">
                                <i class="far fa-thumbs-up me-1"></i>Helpful (15)
                            </button>
                            <small class="text-muted align-self-center">Answered on Jan 13, 2026</small>
                        </div>
                    </div>
                </div>

                <!-- Answer 2 -->
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=Noor+Hassan&background=10b981&color=fff" class="rounded-circle me-3" width="40">
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-semibold">Noor Hassan</p>
                                <small class="text-muted">IP Law Expert</small>
                            </div>
                            <span class="badge badge-success">Verified Lawyer</span>
                        </div>
                        <p class="text-secondary mb-3">
                            To add to Dr. Khalid's answer: Before filing, conduct a comprehensive trademark search to ensure your mark isn't already registered. 
                            The UAE follows the Nice Classification system (45 classes). Consider hiring a local IP agent to handle the application - 
                            they can navigate the Arabic documentation requirements and follow up with the Ministry more efficiently.
                        </p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-primary" onclick="likeAnswer('ANS-002')">
                                <i class="far fa-thumbs-up me-1"></i>Helpful (8)
                            </button>
                            <small class="text-muted align-self-center">Answered on Jan 13, 2026</small>
                        </div>
                    </div>
                </div>

                <!-- Answer Form (Approved Lawyers Only) -->
                <!-- BACKEND: POST /api/questions/{id}/answers -->
                <div id="answerFormSection" style="display: none;">
                    <h5 class="mb-3">Your Answer</h5>
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <form id="answerForm">
                                <div class="mb-3">
                                    <label class="form-label">Provide your professional answer</label>
                                    <textarea class="form-control" rows="6" name="answer" placeholder="Share your legal expertise..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i>Post Answer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- CTA for Non-Lawyers -->
                <div id="answerCTA" class="card text-center" style="border: 2px dashed var(--border-color);">
                    <div class="card-body p-4">
                        <i class="fas fa-gavel mb-3" style="font-size: 2rem; color: var(--primary);"></i>
                        <h5 class="mb-2">Are you a legal professional?</h5>
                        <p class="text-muted mb-3">Share your expertise and help answer this question.</p>
                        <a href="{{ route('lawyer-request') }}" class="btn btn-primary">
                            <i class="fas fa-user-check me-2"></i>Become a Verified Lawyer
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Top Answerer -->
                <div class="card mb-3">
                    <div class="card-body p-4">
                        <h6 class="fw-semibold mb-3">Top Answerer</h6>
                        <div class="text-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=Dr+Khalid+Rahman&background=10b981&color=fff" class="rounded-circle mb-2" width="60">
                            <h6 class="mb-1">Dr. Khalid Rahman</h6>
                            <p class="small text-muted mb-0">IP & Corporate Law</p>
                        </div>
                        <a href="{{ route('lawyer-profile') }}" class="btn btn-outline-primary btn-sm w-100">
                            <i class="fas fa-user me-1"></i>View Profile
                        </a>
                    </div>
                </div>

                <!-- Related Questions -->
                <div class="card">
                    <div class="card-body p-4">
                        <h6 class="fw-semibold mb-3">Related Questions</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <a href="{{ route('question-details') }}" class="text-decoration-none" style="color: var(--text-primary);">
                                    <small class="d-block mb-1">Patent application process in UAE</small>
                                </a>
                                <small class="text-muted">3 Answers</small>
                            </li>
                            <li class="mb-3">
                                <a href="{{ route('question-details') }}" class="text-decoration-none" style="color: var(--text-primary);">
                                    <small class="d-block mb-1">Copyright protection for software</small>
                                </a>
                                <small class="text-muted">5 Answers</small>
                            </li>
                            <li>
                                <a href="{{ route('question-details') }}" class="text-decoration-none" style="color: var(--text-primary);">
                                    <small class="d-block mb-1">GCC trademark registration</small>
                                </a>
                                <small class="text-muted">2 Answers</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/shared.js') }}"></script>
    <script>
        // Use shared Toast if available
        const showToast = (msg) => {
            if (typeof Toast !== 'undefined') Toast.success(msg);
            else alert(msg);
        };

        function updateAnswerSection() {
            // Wait for ui.js to possibly set the role, or default to what's in session/window
            const role = window.currentDemoRole || sessionStorage.getItem('demoRole') || 'guest';
            console.log('Question Details Role Check:', role);

            const formSection = document.getElementById('answerFormSection');
            const ctaSection = document.getElementById('answerCTA');

            if (role === 'lawyer-approved') {
                formSection.style.display = 'block';
                ctaSection.style.display = 'none';
            } else if (role === 'lawyer-pending') {
                formSection.style.display = 'none';
                ctaSection.style.display = 'none';
            } else {
                formSection.style.display = 'none';
                ctaSection.style.display = 'block';
            }
        }

        // Run on load
        document.addEventListener('DOMContentLoaded', () => {
             updateAnswerSection();

             // Listen for changes from the navbar selector
             const selector = document.getElementById('roleSelector');
             if (selector) {
                 selector.addEventListener('change', () => {
                     // small delay to let ui.js update global state if needed
                     setTimeout(updateAnswerSection, 50);
                 });
             }
        });

        // Handle answer submission
        document.getElementById('answerForm')?.addEventListener('submit', (e) => {
            e.preventDefault();
            showToast('Demo Mode: Your answer will be posted via PHP backend later.');
            document.getElementById('answerForm').reset();
        });

        // Like answer
        function likeAnswer(answerId) {
            showToast('Demo Mode: Like will be saved via PHP backend later.');
        }
    </script>
@endsection
