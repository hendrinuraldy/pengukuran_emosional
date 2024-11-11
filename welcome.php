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
    <title>Kecerdasan Emosional</title>
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
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

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
                        <a href="welcome.php" class="nav-item nav-link active">Beranda</a>
                        <a href="testemosional.php" class="nav-item nav-link ">Tes Emosional</a> 
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
            <div class="container-xxl hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-dark mb-4 animated zoomIn">Apa itu
                                kecerdasan emosional?</h1>
                            <p class="text-dark pb-3 animated zoomIn">kemampuan seseorang mengatur kehidupan emosinya dengan inteligensi, menjaga keselarasan emosi dan mengekspresikan melalui keterampilan kesadaran diri, pengendalian diri, motivasi diri, empati dan keterampilan sosial.</p>
                            
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <img class="img-fluid animated zoomIn" src="img/home-removebg-preview.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            
            <h2 class="mb-5">Saran dari hasil pengukuran emosional</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-2">
                    <div class="card shadow">
                        <img src="img/senyum.png" class="card-img-top img-fluid" alt="Gambar 1">
                        <div class="card-body">
                            <h5 class="card-title">Emosi Tingkat Tinggi</h5>
                            <p class="card-text">Biasanya, Intelligent Quotient (IQ) dijadikan sebagai tolak ukur kecerdasan. </p>
                            <div class="d-flex justify-content-start " style="float: left;">  
                            <img src="img/team-4.jpg" class="rounded-circle border me-0" style="width: 40px; height: 40px;">  <span class="ms-2">Abi Albian</span>  </div>                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card shadow">
                        <img src="img/apabae.png" class="card-img-top img-fluid" alt="Gambar 2">
                        <div class="card-body">
                            <h5 class="card-title">Emosi Tingkat Sedang
                            </h5>
                            <p class="card-text">Biasanya tingkat sederhana itu... Yuk simak</p>
                            <div class="d-flex justify-content-start align-items-start" style="float: left;">
                                <img src="img/team-3.jpg" class="rounded-circle border me-0" style="width: 40px; height: 40px;">  <span class="ms-2">Arga Maniez</span>  </div>                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card shadow">
                        <img src="img/iya.png" class="card-img-top img-fluid" alt="Gambar 3">
                        <div class="card-body">
                            <h5 class="card-title">Emosi Tingkat Rendah</h5>
                            <p class="card-text">Ada banyak tanda-tanda orang dengan kecerdasan emosional.</p>
                            <div class="d-flex justify-content-start align-items-start" style="float: left;">
                                <img src="img/team-2.jpg" class="rounded-circle border me-0" style="width: 40px; height: 40px;">  <span class="ms-2">Andre Taulani</span>  </div>
                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
          
        <!-- Newsletter End -->

        <!-- Service Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                   
                    <h2 class="mb-5">Tim Kami</h2>
                </div>
              
                <div class="row justify-content-center">
    <!-- Card 1 -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-inline-block border rounded-pill text-info px-4 mb-3">Our Team</div>
            <div class="client-testimonial">
                <img src="img/fotoku.png" class="rounded-circle mb-3">
                <h2 class="mb-3">Raldy Hendrianu</h2>
                <p>21 Tahun</p>
            </div>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-inline-block border rounded-pill text-info px-4 mb-3">Our Team</div>
            <div class="client-testimonial">
                <img src="img/aufar.jpeg" class="rounded-circle mb-3" alt="Nama Klien">
                <h2 class="mb-3">Muhammad Aufar</h2>
                <p>23 Tahun</p>
            </div>
        </div>
    </div>
    <!-- Card 3 -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-inline-block border rounded-pill text-info px-4 mb-3">Our Team</div>
            <div class="client-testimonial">
                <img src="img/afrel.jpeg" class="rounded-circle mb-3" alt="Nama Klien">
                <h2 class="mb-3">Afrel Aesaza</h2>
                <p>25 Tahun</p>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <!-- Card 4 -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-inline-block border rounded-pill text-info px-4 mb-3">Our Team</div>
            <div class="client-testimonial">
                <img src="img/haristo.jpeg" class="rounded-circle mb-3">
                <h2 class="mb-3">Haristo Anandita</h2>
                <p>21 Tahun</p>
            </div>
        </div>
    </div>
    <!-- Card 5 -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-inline-block border rounded-pill text-info px-4 mb-3">Our Team</div>
            <div class="client-testimonial">
                <img src="img/apis.jpeg" class="rounded-circle mb-3" alt="Nama Klien">
                <h2 class="mb-3">Hafidz Naufal</h2>
                <p>23 Tahun</p>
            </div>
        </div>
    </div>
</div>

                </div>
                
            </div>
        </div>
        

       
        



<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .progress-label-left {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }
        .star-light {
            color:#e9ecef;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
    </style>

    <div class="alert alert-primary wow fadeInUp" data-wow-delay="0.1s" role="alert">
        <h1 class="text-center mt-2 mb-2">Rating Website</h1>
    </div>
    <div class="container">

    	<div class="card">
    		<div class="card-header">Rating Website Saya</div>
    		<div class="card-body">
    			<div class="row">
                    <div class="col-sm-3 text-center">
                        <img src="img/rating_1688413.png" alt="phone" width="230">
                        <button type="button" name="add_review" id="add_review" class="btn btn-primary form-control mt-3" style="background-color: #007bff;">Review website ini</button>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
        <p>
            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
            </div>
        </p>
        <p>
            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
            </div>
        </p>
        <p>
            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
            </div>
        </p>
        <p>
            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
            </div>
        </p>
        <p>
            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
            </div>
        </p>
    </div>
    <h3 class="mt-3 ml-4">Reviews:</h3>
    <div class="mt-3" id="review_content"></div>

    <div id="review_modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Submit Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mt-2 mb-4">
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                    </h4>
                    <div class="form-group">
                        <label for="">Your Name:</label>
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="">Comment:</label>
                        <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                    </div>
                    <div class="alert alert-danger mt-2 d-none" id="rating_warning">Please select a star rating.</div>
                </div>
            </div>
        </div>
    </div>
	      	</div>
    	</div>
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
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            let rating = 0;

            $('.submit_star').on('click', function() {
                rating = $(this).data('rating');
                $('.submit_star').removeClass('star-selected');
                for (let i = 1; i <= rating; i++) {
                    $('#submit_star_' + i).addClass('star-selected');
                }
            });

            $('#save_review').on('click', function() {
                if (rating === 0) {
                    $('#rating_warning').removeClass('d-none');
                } else {
                    $('#rating_warning').addClass('d-none');
                    // Submit the form or perform AJAX request to save the review
                    // Add your form submission code here
                }
            });
        });
    </script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/id.min.js"></script>
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
  <script>

$(document).ready(function(){

var rating_data = 0;

$('#add_review').click(function(){
    $('#review_modal').modal('show');
});

$(document).on('mouseenter', '.submit_star', function(){
    var rating = $(this).data('rating');
    reset_background();
    for(var count = 1; count <= rating; count++) {
        $('#submit_star_'+count).addClass('text-warning');
    }
});

function reset_background() {
    for(var count = 1; count <= 5; count++) {
        $('#submit_star_'+count).addClass('star-light');
        $('#submit_star_'+count).removeClass('text-warning');
    }
}

$(document).on('mouseleave', '.submit_star', function(){
    reset_background();
    for(var count = 1; count <= rating_data; count++) {
        $('#submit_star_'+count).removeClass('star-light');
        $('#submit_star_'+count).addClass('text-warning');
    }
});

$(document).on('click', '.submit_star', function(){
    rating_data = $(this).data('rating');
});

$('#save_review').click(function() {
    var user_name = $('#user_name').val();
    var user_review = $('#user_review').val();
    var current_datetime = new Date().toLocaleString();

    if (user_name == '' || user_review == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Peringatan',
            text: 'Silakan isi kedua bidang tersebut.',
        });
        return false;
    } else {
        $.ajax({
            url: "submit_rating.php",
            method: "POST",
            data: {
                rating_data: rating_data,
                user_name: user_name,
                user_review: user_review,
                datetime: current_datetime
            },
            success: function(data) {
                // Hide the modal and reset the form
                $('#review_modal').modal('hide');
                $('#user_name').val('');
                $('#user_review').val('');
                rating_data = 0;
                reset_background();

                load_rating_data();

                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: data,
                });
            }
        });
    }
});

load_rating_data();

function load_rating_data() {
    $.ajax({
        url:"submit_rating.php",
        method:"POST",
        data:{action:'load_data'},
        dataType:"JSON",
        success:function(data) {
            $('#average_rating').text(data.average_rating);
            $('#total_review').text(data.total_review);

            var count_star = 0;

            $('.main_star').each(function(){
                count_star++;
                if(Math.ceil(data.average_rating) >= count_star) {
                    $(this).addClass('text-warning');
                    $(this).addClass('star-light');
                }
            });

            $('#total_five_star_review').text(data.five_star_review);
            $('#total_four_star_review').text(data.four_star_review);
            $('#total_three_star_review').text(data.three_star_review);
            $('#total_two_star_review').text(data.two_star_review);
            $('#total_one_star_review').text(data.one_star_review);

            $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');
            $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');
            $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');
            $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');
            $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

            if(data.review_data.length > 0) {
                var html = '';

                for(var count = 0; count < data.review_data.length; count++) {
                    html += '<div class="row mb-3">';
                    html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';
                    html += '<div class="col-sm-11">';
                    html += '<div class="card">';
                    html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';
                    html += '<div class="card-body">';
                    for(var star = 1; star <= 5; star++) {
                        var class_name = '';
                        if(data.review_data[count].rating >= star) {
                            class_name = 'text-warning';
                        } else {
                            class_name = 'star-light';
                        }
                        html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                    }
                    html += '<br />';
                    html += data.review_data[count].user_review;
                    html += '</div>';
                    html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                }

                $('#review_content').html(html);
            }
        }
    })
}

});



</script>
</body>

</html>






