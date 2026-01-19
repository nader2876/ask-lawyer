<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions Management - Legal Q&A Admin</title>
    
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
      <livewire:admin.questions />
    </div>

    <!-- View Question Modal -->
    <div class="modal" id="viewQuestionModal">
        <div class="modal-dialog" style="max-width: 700px;">
            <div class="modal-header">
                <h3 class="modal-title">Question Details</h3>
                <button class="modal-close" data-modal-close>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body" id="viewQuestionContent">
                <!-- Content will be populated by JavaScript -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-primary" data-modal-close>Close</button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/shared.js') }}"></script>
    <script src="{{ asset('assets/js/admin-ui.js') }}"></script>
    <script>
        // Initialize table filter
        const questionFilter = new TableFilter('questionsTable');
        
        // View question details
        function viewQuestion(questionId) {
            // BACKEND: GET /admin/questions/{questionId}
            const content = `
                <div class="mb-3">
                    <strong>Question ID:</strong> ${questionId}
                </div>
                <div class="mb-3">
                    <strong>Title:</strong> Sample Question Title
                </div>
                <div class="mb-3">
                    <strong>Category:</strong> <span class="badge badge-secondary">Corporate Law</span>
                </div>
                <div class="mb-3">
                    <strong>Author:</strong> John Doe
                </div>
                <div class="mb-3">
                    <strong>Created:</strong> 2026-01-10
                </div>
                <div class="mb-3">
                    <strong>Body:</strong>
                    <p class="mt-2">This is a sample question body that would contain the full question details...</p>
                </div>
                <div class="mb-3">
                    <strong>Answers (2):</strong>
                    <div class="mt-2 p-3" style="background-color: var(--bg-primary); border-radius: 0.375rem;">
                        <p class="mb-1"><strong>Dr. Khalid Rahman:</strong></p>
                        <p class="text-muted small mb-0">Sample answer content here...</p>
                    </div>
                </div>
            `;
            document.getElementById('viewQuestionContent').innerHTML = content;
            Modal.open('viewQuestionModal');
        }
        
        // Delete question
        function deleteQuestion(questionId) {
            // BACKEND: DELETE /admin/questions/{questionId}
            confirmAction('Are you sure you want to delete this question? This will also delete all associated answers.', () => {
                Toast.info('Demo Mode: Question deletion will be connected to PHP backend later.');
            });
        }
        
        // Handle sort
        function handleSort(value) {
            const [attr, order] = value.split('-');
            questionFilter.sortBy(attr, order);
        }
    </script>
</body>
</html>

