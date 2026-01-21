<div>
  <div class="row g-4 mb-4">
        <!-- Stats Cards -->
        <div class="col-md-3">
            <div class="card h-100 stat-glow glow-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Total Answers</p>
                            <h3 class="mb-0">24</h3>
                        </div>
                        <div class="text-primary">
                            <i class="fas fa-comments fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card h-100 stat-glow glow-success">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Published Articles</p>
                            <h3 class="mb-0">12</h3>
                        </div>
                        <div class="text-success">
                            <i class="fas fa-file-alt fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card h-100 stat-glow glow-warning">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Helpful Votes</p>
                            <h3 class="mb-0">156</h3>
                        </div>
                        <div class="text-warning">
                            <i class="fas fa-thumbs-up fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card h-100 stat-glow glow-info">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Profile Views</p>
                            <h3 class="mb-0">1,234</h3>
                        </div>
                        <div class="text-info">
                            <i class="fas fa-eye fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Recent Questions -->
        <div class="col-lg-8">
            <div class="card h-100 shadow-sm">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-question-circle me-2 text-primary"></i>Recent Questions</h5>
                    <a href="{{ route('lawyer.questions.index') }}" class="btn btn-sm btn-outline-primary">Browse All</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('lawyer.answers.edit') }}" class="list-group-item list-group-item-action bg-transparent border-secondary p-3">
                        <div class="d-flex w-100 justify-content-between mb-1">
                            <h6 class="mb-1 fw-bold text-white">How to register a trademark in UAE?</h6>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                        <p class="mb-1 text-muted small">IP Law • 0 Answers</p>
                    </a>
                    <a href="{{ route('lawyer.answers.edit') }}" class="list-group-item list-group-item-action bg-transparent border-secondary p-3">
                        <div class="d-flex w-100 justify-content-between mb-1">
                            <h6 class="mb-1 fw-bold text-white">Employment contract termination notice?</h6>
                            <small class="text-muted">5 hours ago</small>
                        </div>
                        <p class="mb-1 text-muted small">Labor Law • 1 Answer</p>
                    </a>
                    <a href="{{ route('lawyer.answers.edit') }}" class="list-group-item list-group-item-action bg-transparent border-secondary p-3">
                        <div class="d-flex w-100 justify-content-between mb-1">
                            <h6 class="mb-1 fw-bold text-white">Starting a business in free zone?</h6>
                            <small class="text-muted">1 day ago</small>
                        </div>
                        <p class="mb-1 text-muted small">Corporate Law • 3 Answers</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-header py-3">
                    <h5 class="mb-0"><i class="fas fa-bolt me-2 text-warning"></i>Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-3">
                        <a href="{{ route('lawyer.questions.index') }}" class="btn btn-primary">
                            <i class="fas fa-search me-2"></i>Browse Questions
                        </a>
                        <a href="{{ route('lawyer.articles.create') }}" class="btn btn-success">
                            <i class="fas fa-plus me-2"></i>Write Article
                        </a>
                        <a href="{{ route('lawyer.answers.index') }}" class="btn btn-info text-white">
                            <i class="fas fa-comments me-2"></i>My Answers
                        </a>
                        <a href="{{ route('lawyer.profile.edit') }}" class="btn btn-secondary">
                            <i class="fas fa-user-edit me-2"></i>Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
