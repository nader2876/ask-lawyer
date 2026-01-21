<footer class="footer bg-dark border-top border-secondary pt-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <!-- Brand Column -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <a class="d-flex align-items-center mb-3 text-decoration-none" href="{{ route('home') }}">
                    <i class="fas fa-balance-scale fa-2x text-warning me-2"></i>
                    <span class="fs-4 fw-bold text-white">LegalQ&A</span>
                </a>
                <p class="text-secondary mb-4">
                    Connecting you with trusted legal professionals for quick answers and expert representation. Confidential, secure, and easy to use.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-white fw-bold text-uppercase mb-4 letter-spacing-1">Platform</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-secondary text-decoration-none hover-white transition-base">Home</a></li>
                    <li class="mb-2"><a href="{{ route('index') }}" class="text-secondary text-decoration-none hover-white transition-base">Browse Questions</a></li>
                    <li class="mb-2"><a href="{{ route('lawyers') }}" class="text-secondary text-decoration-none hover-white transition-base">Find a Lawyer</a></li>
                    <li class="mb-2"><a href="{{ route('blog') }}" class="text-secondary text-decoration-none hover-white transition-base">Legal Articles</a></li>
                </ul>
            </div>

            <!-- For Lawyers -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-white fw-bold text-uppercase mb-4 letter-spacing-1">For Lawyers</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('lawyer-request') }}" class="text-secondary text-decoration-none hover-white transition-base">Join as a Lawyer</a></li>
                    <li class="mb-2"><a href="{{ route('login') }}" class="text-secondary text-decoration-none hover-white transition-base">Lawyer Login</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-white transition-base">Success Stories</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-white transition-base">Resources</a></li>
                </ul>
            </div>

            <!-- Newsletter/Contact -->
            <div class="col-lg-4 col-md-6">
                <h6 class="text-white fw-bold text-uppercase mb-4 letter-spacing-1">Stay Updated</h6>
                <p class="text-secondary mb-3 small">Subscribe to our newsletter for the latest legal insights and platform updates.</p>
                <form action="#" class="mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control bg-tertiary border-secondary text-white" placeholder="Your email address" aria-label="Your email address">
                        <button class="btn btn-gold" type="button"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
                <div class="text-secondary small">
                    <i class="fas fa-envelope text-warning me-2"></i> support@legalqa.bg
                </div>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="text-muted small mb-0">&copy; {{ date('Y') }} LegalQ&A. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <ul class="list-inline mb-0 small">
                    <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none hover-white">Privacy Policy</a></li>
                    <li class="list-inline-item"><span class="text-secondary mx-2">|</span></li>
                    <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none hover-white">Terms of Service</a></li>
                    <li class="list-inline-item"><span class="text-secondary mx-2">|</span></li>
                    <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none hover-white">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
