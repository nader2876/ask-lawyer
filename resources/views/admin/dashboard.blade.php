@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('topbar')
    @include('partials.admin-topbar', ['title' => 'Dashboard'])
@endsection

@section('content')
    <!-- Stats Cards -->
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
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>User</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>How to register a trademark?</td>
                            <td>John Doe</td>
                            <td>Intellectual Property</td>
                            <td>2026-01-14</td>
                            <td><span class="badge badge-success">Approved</span></td>
                            <td>
                                <button class="btn btn-sm btn-icon"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Divorce proceedings timeframe?</td>
                            <td>Sarah Smith</td>
                            <td>Family Law</td>
                            <td>2026-01-14</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-icon"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Employment contract termination</td>
                            <td>Mike Johnson</td>
                            <td>Labor Law</td>
                            <td>2026-01-13</td>
                            <td><span class="badge badge-success">Approved</span></td>
                            <td>
                                <button class="btn btn-sm btn-icon"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Recent Lawyer Requests</h3>
        </div>
        <div class="card-body">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>License No.</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmed Hassan</td>
                            <td>ahmed@example.com</td>
                            <td>DXB-12345</td>
                            <td>2026-01-14</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-success">Approve</button>
                                <button class="btn btn-sm btn-danger">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Fatima Al-Sayed</td>
                            <td>fatima@example.com</td>
                            <td>AUH-67890</td>
                            <td>2026-01-13</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-success">Approve</button>
                                <button class="btn btn-sm btn-danger">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.log('Dashboard loaded');
    </script>
@endsection
