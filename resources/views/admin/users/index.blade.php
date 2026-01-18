<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Legal Q&A Admin</title>
    
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
            
            @include('partials.admin-topbar', ['title' => 'User Management'])

           
                    
                    <livewire:admin.users-management />
                </div>
            </div>
        </main>
    </div>
 





    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/shared.js') }}"></script>
    <script src="{{ asset('assets/js/admin-ui.js') }}"></script>
    <script>
        // Initialize table filter
        const userFilter = new TableFilter('usersTable');
        
        // Handle sort
        function handleSort(value) {
            const [attr, order] = value.split('-');
            userFilter.sortBy(attr, order);
        }

        // Livewire SweetAlert Listeners
        document.addEventListener('livewire:initialized', () => {
            // Success/Info Modal
            Livewire.on('swal:modal', (data) => {
                const event = Array.isArray(data) ? data[0] : data;
                Swal.fire({
                    icon: event.type,
                    title: event.title,
                    text: event.text,
                    background: '#1e293b',
                    color: '#e5e7eb',
                    timer: 2000,
                    showConfirmButton: false
                });
            });

            // Confirmation Modal
            Livewire.on('swal:confirm', (data) => {
                const event = Array.isArray(data) ? data[0] : data;
                Swal.fire({
                    title: event.title,
                    text: event.text,
                    icon: event.type,
                    background: '#1e293b',
                    color: '#e5e7eb',
                    showCancelButton: true,
                    confirmButtonColor: '#2563eb',
                    cancelButtonColor: '#ef4444',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('deleteConfirmed', { id: event.id });
                    }
                });
            });
        });
    </script>
</body>
</html>

