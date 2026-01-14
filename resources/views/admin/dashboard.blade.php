<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Legal Q&A</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="admin-layout">
        
        @include('partials.admin-sidebar')

        <!-- Main Content -->
        <main class="admin-content">
            
            @include('partials.admin-topbar', ['title' => 'Dashboard'])

            <div class="content-wrapper">
                <!-- Stats Cards -->
                <!-- BACKEND: GET /admin/stats -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>1,547</h3>
                            <p>Total Users</p>
                        </div>
                        <div class="stat-icon primary">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>342</h3>
                            <p>Approved Lawyers</p>
                        </div>
                        <div class="stat-icon success">
                            <i class="fas fa-gavel"></i>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>28</h3>
                            <p>Pending Requests</p>
                        </div>
                        <div class="stat-icon warning">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>2,845</h3>
                            <p>Total Questions</p>
                        </div>
                        <div class="stat-icon info">
                            <i class="fas fa-question-circle"></i>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>4,127</h3>
                            <p>Total Answers</p>
                        </div>
                        <div class="stat-icon success">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>856</h3>
                            <p>Total Articles</p>
                        </div>
                        <div class="stat-icon primary">
                            <i class="fas fa-file-alt"></i>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h3>Recent Questions</h3>
                    </div>
                    <div class="card-body">
                        <!-- BACKEND: GET /admin/questions?limit=5&sort=newest -->
                        <div class="table-container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">How to register a trademark in UAE?</td>
                                        <td><span class="badge badge-secondary">IP Law</span></td>
                                        <td>Ahmed Hassan</td>
                                        <td>2026-01-13</td>
                                        <td><span class="badge badge-warning">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Employment contract termination notice period</td>
                                        <td><span class="badge badge-secondary">Employment Law</span></td>
                                        <td>Sara Mohammed</td>
                                        <td>2026-01-13</td>
                                        <td><span class="badge badge-success">Answered</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">LLC vs Free Zone company setup</td>
                                        <td><span class="badge badge-secondary">Corporate Law</span></td>
                                        <td>John Smith</td>
                                        <td>2026-01-12</td>
                                        <td><span class="badge badge-success">Answered</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Divorce proceedings timeline in Dubai</td>
                                        <td><span class="badge badge-secondary">Family Law</span></td>
                                        <td>Fatima Ali</td>
                                        <td>2026-01-12</td>
                                        <td><span class="badge badge-warning">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Real estate purchase contract review</td>
                                        <td><span class="badge badge-secondary">Real Estate</span></td>
                                        <td>Michael Brown</td>
                                        <td>2026-01-11</td>
                                        <td><span class="badge badge-success">Answered</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Recent Requests -->
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Lawyer Requests</h3>
                    </div>
                    <div class="card-body">
                        <!-- BACKEND: GET /admin/lawyer-requests?limit=5&sort=newest -->
                        <div class="table-container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Specialization</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">Dr. Khalid Rahman</td>
                                        <td>khalid.rahman@lawfirm.ae</td>
                                        <td><span class="badge badge-secondary">Corporate Law</span></td>
                                        <td>2026-01-13</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn btn-success btn-sm" onclick="demoAction('Approve Request')">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm" onclick="demoAction('Reject Request')">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Layla Mansour</td>
                                        <td>layla.mansour@legal.ae</td>
                                        <td><span class="badge badge-secondary">Family Law</span></td>
                                        <td>2026-01-12</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="btn btn-success btn-sm" onclick="demoAction('Approve Request')">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm" onclick="demoAction('Reject Request')">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Omar Abdullah</td>
                                        <td>omar.abdullah@advocates.ae</td>
                                        <td><span class="badge badge-secondary">Criminal Law</span></td>
                                        <td>2026-01-11</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>
                                            <span class="text-muted">—</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/shared.js') }}"></script>
    <script src="{{ asset('assets/js/admin-ui.js') }}"></script>
</body>
</html>

