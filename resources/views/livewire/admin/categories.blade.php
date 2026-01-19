<div>
  <main class="admin-content">
            
            @include('partials.admin-topbar', ['title' => 'Categories Management'])

            <div class="content-wrapper">
                <!-- Info Alert -->
                <div class="card mb-3" style="border-left: 4px solid var(--info);">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fas fa-info-circle" style="color: var(--info); font-size: 1.25rem;"></i>
                            <div>
                                <strong>Unified Categories System</strong>
                                <p class="mb-0 text-secondary" style="font-size: 0.875rem;">
                                    These categories are used across Questions, Lawyers, and Articles. 
                                    Categories in use should be deactivated instead of deleted to maintain data integrity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Categories Table -->
                <!-- BACKEND: GET /admin/categories -->
                <div class="table-wrapper">
                    <div class="table-header">
                        <h3 class="table-title">All Categories</h3>
                        <button class="btn btn-primary" wire:click="openAddModal">
                            <i class="fas fa-plus"></i>
                            Add Category
                        </button>
                    </div>
                    
                    <div class="table-container">
                        <table class="table" id="categoriesTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Questions Count</th>
                                    <th>Lawyers Count</th>
                                    <th>Articles Count</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr >
                                    <td>{{ $category->id }}</td>
                                    <td class="fw-semibold">{{ $category->name }}</td>
                                    <td><span class="badge badge-success">{{ $category->status }}</span></td>
                                    <td>{{ $category->questions->count() }} questions</td>
                                    <td>{{ $category->lawyers->count() }} lawyers</td>
                                    <td>{{ $category->articles->count() }} articles</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-warning btn-icon btn-sm" wire:click="editCategory({{ $category->id }})" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            @if($category->status == 'active')
                                            <button class="btn btn-outline-danger btn-sm" onclick="confirmCategoryAction('Are you sure you want to deactivate this category?', () => @this.toggleCategory({{ $category->id }}, 'inactive'))" title="Deactivate">
                                                <i class="fas fa-ban"></i> Deactivate
                                            </button>
                                            @else
                                            <button class="btn btn-outline-success btn-sm" onclick="confirmCategoryAction('Are you sure you want to activate this category?', () => @this.toggleCategory({{ $category->id }}, 'active'))" title="Activate">
                                                <i class="fas fa-check"></i> Activate
                                            </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                              
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    
    
    @if($showEditModal)
      <div class="modal show" id="editCategoryModal">
        <div class="modal-dialog">
            <div class="modal-header">
                <h3 class="modal-title">Edit Category</h3>
                <button class="modal-close" data-modal-close>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- BACKEND: PATCH /admin/categories/{id} -->
                <form id="editCategoryForm">
                  
                    
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" required wire:model="editCategoryName">
                        @error('editCategoryName') <span class="text-danger" style="font-size: 0.875rem; color: red;">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status" required wire:model="editCategoryStatus">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-primary" wire:click="closeEditModal()">Cancel</button>
                <button class="btn btn-primary" wire:click="updateCategory()">Save Changes</button>
            </div>
        </div>
    </div>
    @endif


@if($showAddModal)
       <div class="modal show" id="addCategoryModal"  >
        <div class="modal-dialog">
            <div class="modal-header">
                <h3 class="modal-title">Add New Category</h3>
                <button class="modal-close" wire:click="closeAddModal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- BACKEND: POST /admin/categories -->
                <form id="addCategoryForm">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" placeholder="e.g., Maritime Law" required wire:model="addCategoryName">
                        @error('addCategoryName') <span class="text-danger" style="font-size: 0.875rem; color: red;">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status" required wire:model="addCategoryStatus">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-primary" wire:click="closeAddModal">Cancel</button>
                <button class="btn btn-primary" wire:click="addCategory">Add Category</button>
            </div>
        </div>
    </div>
    @endif
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Handle Category Action Confirmation
        function confirmCategoryAction(message, action) {
            Swal.fire({
                title: 'Are you sure?',
                text: message,
                icon: 'warning',
                background: '#1e293b',
                color: '#e5e7eb',
                showCancelButton: true,
                confirmButtonColor: '#3b82f6',
                cancelButtonColor: '#ef4444',
                confirmButtonText: 'Yes, proceed!'
            }).then((result) => {
                if (result.isConfirmed) {
                    action();
                }
            });
        }

        // Livewire Event Listeners
        document.addEventListener('livewire:initialized', () => {
            // Listen for Success Messages
            @this.on('success', (message) => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: message,
                    background: '#1e293b',
                    color: '#e5e7eb',
                    timer: 2000,
                    showConfirmButton: false
                });
            });

             // Listen for Error Messages
            @this.on('error', (message) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: message,
                    background: '#1e293b',
                    color: '#e5e7eb'
                });
            });
        });
    </script>
</div>
