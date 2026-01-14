<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lawyer Profile - LegalQ&A</title>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">

    <style>
        .profile-header { background: linear-gradient(135deg, var(--bg-tertiary) 0%, var(--bg-secondary) 100%); }
        .nav-tabs .nav-link { color: var(--text-muted); border: none; border-bottom: 2px solid transparent; }
        .nav-tabs .nav-link:hover { color: var(--text-primary); }
        .nav-tabs .nav-link.active { background: transparent; color: var(--primary); border-bottom: 2px solid var(--primary); font-weight: bold; }
    </style>
</head>
<body class="bg-dark text-white">

    @include('partials.public-navbar')

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
                            <a href="edit-lawyer-profile?id=1" class="btn btn-sm btn-outline-light rounded-pill px-3">
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
                            <h5 class="card-title"><a href="question-details" class="text-white text-decoration-none hover-primary">What are the penalties for cybercrime defamation in KSA?</a></h5>
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
                            <h5 class="card-title"><a href="question-details" class="text-white text-decoration-none hover-primary">Custody rights for expatriate mothers after divorce?</a></h5>
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
                                <h5 class="card-title"><a href="article-details" class="text-white text-decoration-none hover-primary">Understanding the New Commercial Courts Law</a></h5>
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
                                <h5 class="card-title"><a href="article-details" class="text-white text-decoration-none hover-primary">Property Ownership Rules for Non-Saudis</a></h5>
                                <p class="card-text text-muted small">An updated guide on REGA regulations concerning foreign ownership of residential and commercial real estate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark border-secondary">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title fw-bold">Edit Profile</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="editProfileForm">
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Full Name</label>
                            <input type="text" id="editName" class="form-control" value="Atty. Marcus Aurelius">
                        </div>
                         <div class="mb-3">
                            <label class="form-label small fw-bold">Specialization</label>
                            <select id="editSpec" class="form-select">
                                <option>Criminal Law & Human Rights</option>
                                <option>Corporate Law</option>
                                <option>Family Law</option>
                                <option>Intellectual Property</option>
                                <option>Real Estate Law</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Bio</label>
                            <textarea id="editBio" class="form-control" rows="4">Marcus Aurelius is a distinguished legal professional with over 15 years of experience in criminal defense and human rights litigation.</textarea>
                        </div>
                        <div class="row">
                             <div class="col-md-6 mb-3">
                                <label class="form-label small fw-bold">Email</label>
                                <input type="email" id="editEmail" class="form-control" value="marcus@law.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-bold">Phone</label>
                                <input type="text" id="editPhone" class="form-control" value="+966 55 123 4567">
                             </div>
                             <div class="col-md-12 mb-3">
                                <label class="form-label small fw-bold">LinkedIn URL</label>
                                <input type="text" id="editLinkedin" class="form-control" value="linkedin.com/in/marcus">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-secondary">
                    <button type="button" class="btn btn-outline-light rounded-pill" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary rounded-pill px-4" onclick="saveProfile()">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Toast -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div id="saveToast" class="toast bg-success text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            <i class="fas fa-check-circle me-2"></i> Demo: Profile updated locally!
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/ui.js') }}"></script>
    <script>
        // Profile Editing Logic
        const profileModal = new bootstrap.Modal(document.getElementById('editProfileModal'));
        const toastEl = document.getElementById('saveToast');
        const toast = new bootstrap.Toast(toastEl);

        function openEditProfile() {
            // Populate form with current DOM values
            document.getElementById('editName').value = document.getElementById('profileName').innerText;
            document.getElementById('editSpec').value = document.getElementById('profileSpecialization').innerText;
            document.getElementById('editBio').value = document.getElementById('profileBio').innerText;
            // Contact info is tricky to parse back from icons, so we use static defaults or simple parsing if strictly needed for demo

            profileModal.show();
        }

        function saveProfile() {
            // Update DOM
            document.getElementById('profileName').innerText = document.getElementById('editName').value;
            document.getElementById('profileSpecialization').innerText = document.getElementById('editSpec').value;
            document.getElementById('profileBio').innerText = document.getElementById('editBio').value;

            const email = document.getElementById('editEmail').value;
            const linkedin = document.getElementById('editLinkedin').value;
            const phone = document.getElementById('editPhone').value;

            // Rebuild contact display
            const contactHtml = `
                <span><i class="fab fa-linkedin me-1"></i> ${linkedin}</span>
                <span><i class="fas fa-envelope me-1"></i> ${email}</span>
                <span><i class="fas fa-phone me-1"></i> ${phone}</span>
            `;
            document.getElementById('contactDisplay').innerHTML = contactHtml;

            // Close and notify
            profileModal.hide();
            toast.show();
        }
    </script>
</body>
</html>

