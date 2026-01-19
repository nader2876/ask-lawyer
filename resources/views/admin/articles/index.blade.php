<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles Management - Legal Q&A Admin</title>
    
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
     <livewire:admin.articles />
    </div>

    <!-- View Article Modal -->
   

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/shared.js') }}"></script>
    <script src="{{ asset('assets/js/admin-ui.js') }}"></script>
    <script>
        // Initialize table filter
        const articleFilter = new TableFilter('articlesTable');
        
        // View article details
        function viewArticle(articleId) {
            // BACKEND: GET /admin/articles/{articleId}
            const content = `
               
            `;
            document.getElementById('viewArticleContent').innerHTML = content;
            Modal.open('viewArticleModal');
        }
        
        // Delete article
        function deleteArticle(articleId) {
            // BACKEND: DELETE /admin/articles/{articleId}
            confirmAction('Are you sure you want to delete this article? This action cannot be undone.', () => {
                Toast.info('Demo Mode: Article deletion will be connected to PHP backend later.');
            });
        }
        
        // Handle sort
        function handleSort(value) {
            const [attr, order] = value.split('-');
            articleFilter.sortBy(attr, order);
        }
    </script>
</body>
</html>

