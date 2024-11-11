<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="icon" href="img/login-removebg-preview (1).png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
  <!-- Sisipkan link ke Sweet Alert CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <!-- Sisipkan script Sweet Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php if(isset($_GET['register']) && $_GET['register'] == 'success'): ?>
                swal({
                    title: 'Success!',
                    text: 'Registration successful!',
                    icon: 'success',
                    button: 'OK'
                });
            <?php elseif(isset($_GET['register']) && $_GET['register'] == 'failed'): ?>
                swal({
                    title: 'Oops!',
                    text: 'Registration failed. Please try again.',
                    icon: 'error',
                    button: 'OK'
                });
            <?php endif; ?>
        });
    </script>
</head>

<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
                <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Daftar</p>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <form class="mx-1 mx-md-4" action="add.php" method="post" id="registerForm" onsubmit="return validateForm()">
                <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Your Name</label>
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name" autocomplete="off" placeholder="Masukan nama Anda" style="border-radius:25px ;" />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> Your Email</label>
                        <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="Masukan e-mail Anda" style="border-radius:25px ;" />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
                        <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="Masukan password Anda" style="border-radius:25px ;" />
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" name="register" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;">Register</button>
                    </div>
                  </form>
                  <p align="center">saya sudah punya akun <a href="index2.php" class="text-warning" style="font-weight:600; text-decoration:none;">Login</a></p>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="signup.png" class="img-fluid" alt="Sample image" height="300px" width="500px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


  <script>
    function validateForm() {
    var name = document.getElementById('form3Example1c').value;
    var email = document.getElementById('form3Example3c').value;
    var password = document.getElementById('form3Example4c').value;

    // Memeriksa apakah ada field yang kosong
    if (name.trim() == '' || email.trim() == '' || password.trim() == '') {
        Swal.fire({
            text: 'Silakan isi semua kolom dengan benar.',
            icon: 'warning',
            confirmButtonText: 'OK'
        });
        return false; // Menghentikan pengiriman form jika ada field kosong
    }

    return true; // Submit form jika validasi berhasil
}


  </script>

</body>

</html>
