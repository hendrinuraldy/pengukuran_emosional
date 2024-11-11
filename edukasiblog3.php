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
  <title>Saran Emosional</title>
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
<link href="css/edukasiblog3.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative p-0">
     <!-- Spinner Start -->
     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
              <li class="nav-item d-flex align-items-center">
              <img src="emotispace_logo.png"  class="rounded-circle me-0" style="width: 40px; ">  
              </li>
              <a href="index.html" class="navbar-brand p-0">
                    <h1 class="m-0">&nbsp;EQ Academy</h1>
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
    </li>
                    </div>
                </div>
            </nav>
        </div>


        <div class="container-fluid hero-header">
                <div class="container">
                    <div class="row g-5 text-center justify-content-center align-items-center">
                        <div class=" text-center">
                            <h1 class="text-white mb-4 animated zoomIn">Tingkat Emosional Rendah</h1>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->        

        <!-- Service Start -->
        <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
   
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h2 class="mb-5">Saran untuk kamu yang memiliki tingkat emosional yang rendah</h2>
        <p>Lalu apa saja si saran untuk orang yang memiliki tingkat emosional yang rendah? Yuk simak pembahasanya berikut ini!</p>
<p>Berikut adalah beberapa alasan mengapa kecerdasan emosional itu penting:

</p>
        </div>

        <ol> <!-- Menggunakan ordered list untuk nomor berurut -->
        <li>
        
    <div style="display: flex; align-items: center; ">
        <div style="flex: 1;">
            <h5>Bangun Hubungan Sosial yang Positif</h5>
            <p style="text-align:justify;">Berinteraksi dengan orang-orang yang positif dan mendukung dapat membantu meningkatkan suasana hati dan kesejahteraan emosional.</p>
            <p style="text-align:justify;"><strong>Contoh:</strong> Bergabunglah dengan kelompok atau komunitas yang memiliki minat yang sama dengan Anda.</p>
        </div>
        
    </div>
</li>


            <li>
            <h5>Ekspresikan Emosi dengan Sehat</h5>
            <p style="text-align:justify;">Jangan memendam emosi. Carilah cara yang sehat untuk mengekspresikannya, seperti menulis jurnal, berbicara dengan orang yang Anda percayai, atau melakukan aktivitas fisik.</p>
            <p style="text-align:justify;"><strong>Contoh:</strong> Jika merasa marah, cobalah menuliskan semua yang membuat Anda marah dalam sebuah jurnal. Atau, Anda bisa pergi jogging untuk melepaskan energi negatif.</p>
            </li>
            <li>
            <h5>Membangun Empati untuk Menghubungkan Diri dengan Orang Lain</h5>
            <p style="text-align:justify;">Latihan empati bisa sangat membantu bagi seseorang yang merasa terputus secara emosional dari orang lain. Dengan melatih empati, mereka akan belajar memahami emosi orang lain, yang pada akhirnya juga akan meningkatkan pemahaman terhadap emosi mereka sendiri.</p>
            <p style="text-align:justify;"><strong>Contoh:</strong> Ketika berinteraksi dengan teman atau keluarga, coba fokus untuk benar-benar mendengarkan tanpa menghakimi atau memikirkan balasan. Bayangkan perasaan orang lain dalam situasi tersebut, dan bagaimana Anda dapat merespons dengan lebih mendukung.</p>
            </li>
            <li>
            <h5>Membangun Koneksi Sosial dengan Latihan Empati dalam Hubungan</h5>
            <p style="text-align:justify;">Orang dengan tingkat emosional rendah sering kali merasa terisolasi atau tidak terhubung dengan orang lain. Latihan untuk meningkatkan empati dapat membantu mereka memperbaiki hubungan interpersonal, yang pada akhirnya bisa meningkatkan kesejahteraan emosional.</p>
            <p style="text-align:justify;"><strong>Contoh:</strong>Cobalah latihan "hari tanpa kritik" di mana Anda berkomitmen untuk mendengarkan tanpa menghakimi selama sehari penuh. Ini dapat membantu Anda lebih terhubung secara emosional dengan orang-orang di sekitar.</p>
            </li>
        <hr style="border-top: 1px solid #dee2e6; border-radius: 20px;">
    </div>
</div>
<div class="references">
    <h2>Daftar Pustaka</h2>
    <ul>
        <li>Gross, J. J., & John, O. P. (2021). <i>Cognitive reappraisal and emotion regulation: Practical strategies for effective emotional control</i>. Psychological Review.</li>
        <li>Gerdes, K. E., & Segal, E. A. (2021). <i>Importance of empathy in social work practice: Integrating empathy into teaching and learning</i>. Journal of Social Work Education.</li>
        <li>Kabat-Zinn, J. (2020). <i>Mindfulness for beginners: Reclaiming the present moment and your life</i>. Hachette Books.</li>
    </ul>
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