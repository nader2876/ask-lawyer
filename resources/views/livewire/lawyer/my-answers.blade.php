<div>
 <div class="card shadow-sm">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">My Answers ({{ $questions->count() }})</h5>
            <div class="col-md-3 d-flex gap-2">
                <select class="form-select form-select-sm" wire:model.live="sort">
                    <option value="newest">Newest First</option>
                    <option value="oldest">Oldest First</option>
                </select>
                <select class="form-select form-select-sm" wire:model.live="category">
                    <option value="">All Categories</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="list-group list-group-flush">
            @foreach ($questions as $question)
            <div class="list-group-item p-3">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="mb-1">
                        <a href="{{ url('/question-details/'.$question->id) }}" class="text-decoration-none text-white fw-bold">{{ $question->title }}</a>
                    </h6>
                    <span class="badge bg-info">{{ $question->category->name }}</span>
                </div>
                <div class="p-3 bg-transparent border border-secondary rounded text-muted mb-3 small fst-italic">
                    {{ $question->replies->first()?->body }}
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted small">
                        <i class="fas fa-thumbs-up me-1 text-primary"></i> 15 Helpful • Answered 2 days ago
                    </div>
                    <div>
                        <a href="{{ route('lawyer.answers.edit', 101) }}" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-edit me-1"></i>Edit
                        </a>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-trash me-1"></i>Delete
                        </button>
                    </div>
                </div>
            </div>
            @endforeach            
            <div class="list-group-item p-3">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h6 class="mb-1">
                        <a href="#" class="text-decoration-none text-white fw-bold">Custody rights for expatriate mothers?</a>
                    </h6>
                    <span class="badge bg-warning text-dark">Family Law</span>
                </div>
                 <div class="p-3 bg-transparent border border-secondary rounded text-muted mb-3 small fst-italic">
                    "The Personal Status Law 2022 prioritizes the child's best interest. Generally, the mother is the custodian until the child reaches..."
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted small">
                        <i class="fas fa-thumbs-up me-1 text-primary"></i> 8 Helpful • Answered 5 days ago
                    </div>
                    <div>
                        <a href="{{ route('lawyer.answers.edit', 102) }}" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-edit me-1"></i>Edit
                        </a>
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-trash me-1"></i>Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
