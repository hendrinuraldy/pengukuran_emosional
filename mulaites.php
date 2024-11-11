<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Mulai Tes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="icon" href="img/emotispace_logo.png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 <!-- Favicon -->
 <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


  
    <!-- CSS Libraries -->

    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
   

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/mulaites.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <img src="img/emotispace_logo.png" alt="Profile Picture" class="rounded-circle me-2" style="width: 40px; height: 40px;">  
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="m-0">EQ Academy</h1>
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="welcome.php" class="nav-item nav-link ">Beranda</a>
                        <a href="testemosional.php" class="nav-item nav-link active ">Tes Emosional</a> 
                        <a href="edukasi.php" class="nav-item nav-link">Saran Hasil Emosional</a>
                        <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rekomendasi Emosional</a>
    <div class="dropdown-menu">
        <a href="edukasiblog5.php" class="dropdown-item">Tingkat Tinggi</a>
        <a href="edukasiblog4.php" class="dropdown-item">Tingkat Sedang</a>
        <a href="edukasiblog6.php" class="dropdown-item">Tingkat Rendah</a>
    </div>
</div>
                        <li class="nav-item">
        <div class="d-flex align-items-center">
            <span id="greeting" class="me-2 nav-item nav-link">Halo, <?= $_SESSION['name']; ?></span>
            <div class="dropdown">
                <a href="#" class="btn btn-light rounded-circle text-info py-1 px-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/profil.png" alt="Profile Picture" class="rounded-circle" style="width: 30px; height: 30px;">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="logoutLink" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </li>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container-xxl  hero-header">
                
            
        </div>
       


        <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="img/hasil_tes-removebg-preview.png" class="img-fluid mt-5" alt="Gambar Header">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="text-start">Test Kecerdasan Emosi</h2>
            <p style="text-align: justify;">Apakah kamu merasa kesulitan dalam memahami perasaan yang ada dalam dirimu? Bingung kenapa tiba-tiba marah atau sedih tanpa tahu cara mengendalikannya? Mungkinkah kamu kesulitan dalam memahami orang lain, sehingga membuatmu mengalami hambatan dalam bergaul dengan orang-orang di sekitarmu?

Emoti Space akan mengajakmu untuk lebih dalam mengenali kecerdasan emosimu. Cari tahu berbagai tips agar lebih mampu mengelola emosi, sehingga memperbesar peluang kamu untuk meraih kesuksesan. Mengenali diri sendiri adalah langkah awal untuk berprestasi. Ayo mulai!</p>

             <a href="test.html" class="btn btn-outline-purple rounded-pill border-2 py-3 px-5 animated slideInRight"style="background-color: #3104c6e2;">Mulai Tes</a>
            <p class="mt-3 text-center">Baca Panduan Pengisian Kuis</p>



     </div>
     <ol> <!-- Ordered list untuk langkah-langkah -->
    <li>Gak ada jawaban yang benar atau salah. Isilah dengan jujur sesuai kepribadianmu.</li>
    <li>Santai aja, tes ini gak diberi waktu, kok.</li>
    <li>Cari tempat yang nyaman dan kondusif supaya kamu lebih fokus.</li>
    <li>Jika kamu keluar di tengah tes, maka seluruh proses tes dan jawaban akan hilang.</li>
    <li>Hasil tes bisa kamu dapatkan setelah mengisi semua pertanyaan dengan lengkap.</li>
    
</ol>
    </div>
</div>

         <!-- Footer Start -->
       <div class="container-fluid  text-light footer pt-5 wow fadeIn wave-bg" data-wow-delay="0.1s" style="margin-top: 6rem; background-image: url(img/footer.png); background-size: cover; ">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Hubungi Kami</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Indonesia</p>
                        <p><i class="fa fa-phone-alt me-3"></i>08129712971927</p>
                        <p><i class="fa fa-envelope me-3"></i>kelompok6@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Link Cepat</h5>
                        <a class="btn btn-link" href="welcome.php">Home</a>
                        
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                    <h5 class="text-white mb-4">Link Populer</h5>
                        <a class="btn btn-link" href="welcome.php">Home</a>
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Surat Baru</h5>
                        <p>Jika anda masih bingung, bisa langsung bertanya kepada kami melalui email.</p>
                      
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">kelompok 6</a>, All Right Reserved. 
							
							 <a class="border-bottom" >CELERATES</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
  
    <script src="lib/wow/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
  
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/parallax/parallax.min.js"></script>
     
     <!-- Contact Javascript File -->
     <script src="mail/jqBootstrapValidation.min.js"></script>
     <script src="mail/contact.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
    <script>
    // Function to handle logout
    document.getElementById('logoutLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        Swal.fire({
            title: 'Logout',
            text: 'Apakah Anda yakin ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to index.php
                window.location.href = 'index.php';
            }
        });
    });
</script>
<script>
function updateGreeting() {
    var greetingElement = document.getElementById("greeting");
    var now = new Date();
    var hour = now.getHours();
    var name = "<?php echo $_SESSION['name']; ?>"; // Assuming PHP is used to fetch session data
    
    var greeting;
    if (hour >= 5 && hour < 12) {
        greeting = "Selamat pagi, " + name;
    } else if (hour >= 12 && hour < 16) {
        greeting = "Selamat siang, " + name;
    } else if (hour >= 17 && hour < 18) {
        greeting = "Selamat sore, " + name;
    } else {
        greeting = "Selamat malam, " + name;
    }
    
    greetingElement.textContent = greeting;
}

// Update greeting initially
updateGreeting();

// Update greeting every minute
setInterval(updateGreeting, 60000);
</script>
</body>

</html>