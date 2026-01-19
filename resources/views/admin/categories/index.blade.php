<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Management - Legal Q&A Admin</title>
    
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
      <livewire:admin.categories />
    </div>

    <!-- Add Category Modal -->
 

    <!-- Edit Category Modal -->
  

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/shared.js') }}"></script>
    <script src="{{ asset('assets/js/admin-ui.js') }}"></script>
    <script>
        // Initialize table filter
        const categoryFilter = new TableFilter('categoriesTable');
        
        // Add new category
        function addCategory() {
            // BACKEND: POST /admin/categories
            const formData = getFormData('addCategoryForm');
            Toast.success('Demo Mode: Category creation will be connected to PHP backend later.');
            Modal.close('addCategoryModal');
            resetForm('addCategoryForm');
        }
        
        // Edit category
        function editCategory(categoryId) {
            // BACKEND: GET /admin/categories/{categoryId}
            populateEditForm('editCategoryForm', {
                category_id: categoryId,
                name: 'Sample Category',
                status: 'Active'
            });
            Modal.open('editCategoryModal');
        }
        
        // Save category changes
        function saveCategory() {
            // BACKEND: PATCH /admin/categories/{id}
            const formData = getFormData('editCategoryForm');
            Toast.success('Demo Mode: Category update will be connected to PHP backend later.');
            Modal.close('editCategoryModal');
        }
        
        // Toggle category status
        function toggleCategory(categoryId, action) {
            // BACKEND: PATCH /admin/categories/{categoryId}
            const message = action === 'deactivate' 
                ? 'Are you sure you want to deactivate this category? It will be hidden from new content but existing content will remain.'
                : 'Are you sure you want to activate this category?';
            
            confirmAction(message, () => {
                Toast.info(`Demo Mode: Category ${action} will be connected to PHP backend later.`);
            });
        }
        
        // Delete category (only if not in use)
        function deleteCategory(categoryId) {
            // BACKEND: DELETE /admin/categories/{categoryId}
            confirmAction('Are you sure you want to delete this category? This is only possible if no content is using it.', () => {
                Toast.warning('Demo Mode: Category deletion will be connected to PHP backend later. Backend will check for usage before allowing deletion.');
            });
        }
    </script>
</body>
</html>

