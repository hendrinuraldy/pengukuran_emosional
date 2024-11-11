

<button onclick="logout()">Logout</button>


<!-- Include SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function logout() {
        Swal.fire({
            title: 'Logout',
            text: 'Apakah Anda yakin ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to index.php after logout
                window.location.href = 'index2.php';
            }
        });
    }
</script>


