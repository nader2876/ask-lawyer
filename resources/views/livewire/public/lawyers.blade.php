<div>
    <section class="hero-section text-center pt-5 mt-5 bg-dark">
        <div class="container mt-5">
            <h1 class="display-4 fw-bold mb-4">Find the Right <span class="text-warning">Legal Expert</span></h1>
            <p class="lead text-muted mb-5">Verified professionals specialized in over 15 areas of law.</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="input-group input-group-lg shadow-lg border border-secondary rounded-pill overflow-hidden bg-primary-navy">
                        <span class="input-group-text bg-transparent border-0 text-muted ps-4"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control bg-primary-navy border-0 py-3 text-white" placeholder="Search lawyer by name..." wire:model.live="search">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-lg-3 mb-4">
                <div class="card p-4 shadow-sm border-secondary sticky-top" style="top: 100px; z-index: 1;">
                    <h6 class="fw-bold mb-3"><i class="fas fa-filter text-warning me-2"></i> Filter Lawyers</h6>
                    
                    <div class="mb-3">
                        <label class="small text-muted mb-2">Specialization</label>
                        <select class="form-select border-secondary bg-primary-navy" wire:model.live="categoryFilter">
                            <option value="">All Specializations</option>
                           @foreach ($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="small text-muted mb-2">Availability</label>
                        <div class="form-check">
                            <input class="form-check-input bg-primary-navy border-secondary" type="checkbox" id="availCheck">
                            <label class="form-check-label text-white small" for="availCheck">
                                Online Now
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lawyers Grid -->
            <div class="col-lg-9">
                <div id="lawyers-grid" class="row">
                    @forelse ($lawyers as $lawyer)
                    <div class="col-md-4 mb-4" >
                        <div class="card h-100 border-secondary p-4 text-center card-hover overflow-hidden d-flex flex-column">
                            <img src="https://ui-avatars.com/api/?name={{ $lawyer->user->name }}&background=fbbf24&color=000" class="rounded-circle mx-auto mb-3 border border-secondary p-1" width="100">
                            <h5 class="fw-bold mb-1">Atty. {{ $lawyer->user->name }}</h5>
                            <div class="mb-3"><span class="badge bg-soft-primary text-primary-soft badge-outline rounded-pill">@foreach ($lawyer->categories as $category) {{ $category->name }} @endforeach</span></div>
                            <p class="text-muted small mb-4">{{ $lawyer->bio }}</p>
                            <div class="d-flex justify-content-center gap-2 mb-4">
                                <span class="small text-muted text-decoration-none">| {{ $lawyer->user->replies->count() }} Answers</span>
                            </div>
                            <a href="{{ url('/lawyer-profile/'.$lawyer->user->id) }}" class="btn btn-gold w-100 rounded-pill fw-bold mt-auto">View Profile</a>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                       <div class="py-5">
                            <i class="fas fa-user-tie fa-4x text-muted mb-3 opacity-50"></i>
                            <h3 class="text-white-50">No lawyers found</h3>
                            <p class="text-muted">Try adjusting your search or filter criteria.</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
