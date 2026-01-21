<div>
  <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control" placeholder="Search keywords...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">All Categories</option>
                        <option>Criminal Law</option>
                        <option>Corporate Law</option>
                        <option>Family Law</option>
                        <option>IP Law</option>
                        <option>Real Estate</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">All Status</option>
                        <option>Unanswered</option>
                        <option>Answered</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100">Filter</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header py-3">
            <h5 class="mb-0">Questions Awaiting Answers</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th width="40%">Question</th>
                        <th>Category</th>
                        <th>Asked</th>
                        <th>Answers</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none fw-bold text-white">How to register a trademark in UAE?</a>
                            <p class="text-muted small mb-0 text-truncate" style="max-width: 300px;">I'm planning to launch a new tech startup and want to protect my brand name...</p>
                        </td>
                        <td><span class="badge bg-primary">IP Law</span></td>
                        <td>2 hours ago</td>
                        <td><span class="badge bg-secondary">0</span></td>
                        <td class="text-end">
                            <a href="{{ route('lawyer.answers.edit') }}" class="btn btn-sm btn-success">Answer</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none fw-bold text-white">Employment contract termination notice?</a>
                            <p class="text-muted small mb-0 text-truncate" style="max-width: 300px;">What is the required notice period for a limited term contract...</p>
                        </td>
                        <td><span class="badge bg-warning text-dark">Labor Law</span></td>
                        <td>5 hours ago</td>
                        <td><span class="badge bg-info">1</span></td>
                        <td class="text-end">
                            <a href="{{ route('lawyer.answers.edit') }}" class="btn btn-sm btn-success">Answer</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-decoration-none fw-bold text-white">Real estate dispute resolve time?</a>
                            <p class="text-muted small mb-0 text-truncate" style="max-width: 300px;">How long typically does RERA take to resolve rental disputes...</p>
                        </td>
                        <td><span class="badge bg-danger">Real Estate</span></td>
                        <td>1 day ago</td>
                        <td><span class="badge bg-secondary">0</span></td>
                        <td class="text-end">
                            <a href="{{ route('lawyer.answers.edit') }}" class="btn btn-sm btn-success">Answer</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div></div>
