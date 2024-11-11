<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rekomendasi Kecerdasan Emosional</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" href="img/emotispace_logo.png">

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
    <link href="css/stylee2.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


       <!-- Navbar & Hero Start -->
<nav class="navbar navbar-expand-lg navbar-black px-4 px-lg-5 py-3 py-lg-0">
    <div class="container-fluid">
        <li class="nav-item d-flex align-items-center">
            <img src="emotispace_logo.png" class="rounded-circle me-2" style="width: 40px; height: 40px;">  
        </li>
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0">EQ Academy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="welcome.php" class="nav-item nav-link ">Beranda</a>
                        <a href="testemosional.php" class="nav-item nav-link ">Tes Emosional</a> 
                        <a href="edukasi.php" class="nav-item nav-link active">Saran Hasil Emosional</a>
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
    </div>
</nav>

        </div>

            <div class="container-xxl  hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-dark mb-4 animated zoomIn">Rekomendasi Tingkat Emosional</h1>
                            <p class="text-dark pb-3 animated zoomIn">kemampuan seseorang mengatur kehidupan emosinya dengan inteligensi, menjaga keselarasan emosi dan mengekspresikan melalui keterampilan kesadaran diri, pengendalian diri, motivasi diri, empati dan keterampilan sosial.</p>
                            
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <img class="img-fluid animated zoomIn" src="img/registrasi-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
                
        
        <br>
        <br>
        <div class="container-fluid py-6">
    <div class="container">
        <div class="mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="mb-5 text-center">Rekomendasi untuk kamu yang memiliki tingkat emosional yang sedang</h2>
            <p class="text-center">Lalu apa saja sih saran untuk orang yang memiliki tingkat emosional yang sedang? Yuk simak pembahasannya berikut ini!</p>
        </div>

        <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="video-recommendation">
            <h4>1. Panduan Pengelolaan Emosi untuk Kesehatan Mental</h4>
            <div class="d-flex justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jnwOBr7DtKA" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <p class="mt-3 text-justify" style="text-align:justify;">
                Mengelola emosi dengan baik adalah langkah kunci dalam menjaga keseimbangan mental, terutama bagi mereka yang berada pada tingkat emosional sedang. Dalam video ini, Anda akan menemukan panduan praktis yang mudah diterapkan dalam kehidupan sehari-hari untuk membantu mengontrol emosi ketika dihadapkan dengan situasi yang penuh tekanan. Teknik-teknik yang dibahas meliputi cara-cara mengenali pemicu emosional, mengembangkan kebiasaan refleksi diri, serta menerapkan strategi untuk meredakan stres sebelum berubah menjadi sesuatu yang sulit dikendalikan. Video ini sangat cocok untuk siapa saja yang ingin meningkatkan kesejahteraan mental melalui pengelolaan emosi yang lebih baik.
            </p>
        </div>

        <div class="video-recommendation mt-5"  style="text-align:justify;">
            <h4>2. Teknik Relaksasi untuk Mengatasi Stres</h4>
            <div class="d-flex justify-content-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0LqWXlBfBxE" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="mt-3 text-justify">
                Stres ringan seringkali dialami oleh orang dengan tingkat emosional sedang. Teknik relaksasi yang dibahas dalam video ini dirancang untuk membantu meredakan ketegangan yang timbul akibat stres. Mulai dari pernapasan dalam, latihan kesadaran diri (mindfulness), hingga visualisasi positif, teknik-teknik ini mampu membantu seseorang menemukan ketenangan di tengah tekanan. Selain itu, Anda juga akan dipandu untuk mengenali tanda-tanda awal stres yang berlebihan dan bagaimana mengelolanya dengan cepat sebelum berdampak pada kesehatan mental dan fisik. Menguasai teknik relaksasi ini akan membuat Anda lebih siap menghadapi berbagai tantangan emosional.
            </p>
        </div>

        <div class="video-recommendation mt-5" style="text-align:justify;">
            <h4>3. Membangun Ketangguhan Emosional</h4>
            <div class="d-flex justify-content-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9kdHXQ7BPc8" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="mt-3 text-justify">
                Ketangguhan emosional adalah kemampuan untuk tetap tenang dan mengendalikan diri saat menghadapi situasi sulit. Video ini menawarkan wawasan dan strategi untuk memperkuat ketangguhan emosional Anda, terutama bagi mereka yang memiliki tingkat emosional sedang. Anda akan belajar bagaimana membangun ketahanan mental melalui pengembangan pemikiran positif, keterampilan memecahkan masalah, dan teknik pemulihan cepat dari kegagalan. Video ini memberikan panduan untuk mempertahankan keseimbangan emosional bahkan ketika dihadapkan pada situasi yang penuh tekanan atau konflik. Dengan ketangguhan emosional yang lebih baik, Anda akan mampu mengatasi berbagai hambatan emosional tanpa kehilangan kendali.
            </p>
        </div>
    </div>
</div>

        <div class="text-center mt-2"></div>
        <hr style="border-top: 1px solid #dee2e6; border-radius: 20px;">
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