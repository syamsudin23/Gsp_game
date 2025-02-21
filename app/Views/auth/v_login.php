<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <style>
            body {
                position: relative;
                margin: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden; /* Mencegah scroll */
            }

/* ----------------------------------------------------------------- */

        body::before {
                content: "";
                position: fixed;
                top: -5%;
                left: -5%;
                width: 110%;
                height: 110%;
                background: url('Uploads/img/Background .png') no-repeat center/cover;
                animation: scrollBackground 13s linear infinite alternate;
            }

            @keyframes scrollBackground {
                0% {
                    background-position: center top;
                }
                100% {
                    background-position: center bottom;
                }
            }

/* ----------------------------------------------------------------- */

            .custom-card { 
                border-radius: 30px;
                background-color: rgba(255, 255, 255, 0.7); 
                /* box-shadow: 5px 5px 7px rgba(224, 224, 224, 0.32); */
                position: relative;
                backdrop-filter: blur(10px);
            }

            .custom-card .card-body {
                background-color: rgb(255, 255, 255);
                border-radius: 30px;    
                box-shadow:  5px 5px 10pxrgb(193, 198, 203);
                padding: 10px;
                position: relative;
                backdrop-filter: blur(50px);
                background-image: url('/Uploads/img/Background .png');

            }

            .logo-container {
                display: flex;
                justify-content: center;
                margin: 20px;
            }

            .logo {
                border-radius: 30%;
                width: 100px;
                height: 100px;
                
                

            }

            .form-input {
                width: 85%;
                padding: 10px;  
                margin: 10px 0;
                border-radius: 15px;
                border: 1px solid #ddd;
                background-color:rgba(255, 255, 255, 0.71);
            }

            .form-input:focus {
                outline: none;
                border-color:rgb(0, 0, 0);
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            }

            .btn-login {
                width: 85%;
                padding: 12px;
                background-color: rgba(30, 45, 211, 0.75);
                color: white;
                border: none;
                border-radius: 15px;
                font-weight: bold;
                box-shadow: inset 50px 50px 50px rgba(255, 255, 255, 0.47);
                box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.24);
                transition: all .2s ease-in-out;
            }

            .btn-login:hover {
                background-color: rgba(20, 118, 197, 0.85);
            }

            .text-muted {
                font-size: 14px;
                opacity: 75%;
            }

            .text-muted a {
                color:rgb(19, 183, 224);
                text-decoration: none;
                font-weight: bold;
            }

            .btn-back-custom{
                display: flex;
                position: fixed;
                right: 1400px;
                top: 700px;
                padding: 10px 20px;
                justify-content: center;
                align-items: center;
                opacity: 70%;
            }

        </style>
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="card custom-card" id="loginCard" style="width: 25rem;">
                <div class="card-body text-center">
                    <h2 class="card-title mt-2" style="font-family:sans-serif; font-weight: bold; color:rgb(255, 255, 255);">Login</h2 >
                    <div class="logo-container mb-4">
                        <img src="<?= base_url('uploads/img/profil.png') ?>" alt="logo" class="logo mb-3 " height="250px">
                    </div>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <p style="color: red;"><?php echo session()->getFlashdata('error'); ?></p>
                    <?php endif; ?>

                    <form method="post" id="loginForm">

                        <input type="text" name="username" id="username" placeholder="Username" required class="form-input">
                        <input type="password" name="password" id="password" placeholder="Password" required class="form-input mb-4">
                        <button type="submit" class="btn btn-primary btn-login mb-2">Login</button>
                   
                    </form>

                    <p class="text-muted mt-4 " style="color: white!important;">Don't have an account? <a href="/register">Register</a></p>
                </div>
            </div>
            <a href="/"><button class="btn btn-primary text-white btn-back-custom"><i class="fa-solid fa-arrow-left"></i>&nbspKembali</button></a>
        </div>

        <!-- GSAP Animation Script -->
        <script>
            // Set initial states
            gsap.set("#loginCard", { opacity: 0, y: 100 });
            gsap.set("#loginForm", { opacity: 0 });

            // Create animation
            gsap.timeline()
                .to("#loginCard", { opacity: 1, y: 0, duration: 2, ease: "power3.out" }) // Animasi untuk card
                .to("#loginForm", { opacity: 1, duration: .8, ease: "power3.out" }, "-=0.5"); // Animasi untuk form input/button
        </script>

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Fontawesome kit -->

        <script src="https://kit.fontawesome.com/c6b28474b5.js" crossorigin="anonymous"></script>


        <!-- SweetAlert CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function () {
                $("#loginForm").on("submit", function (event) {
                    event.preventDefault(); // Mencegah reload default form

                        $.ajax({
                                type: "POST",
                                url: "<?= base_url('/process_login') ?>",
                                data: $(this).serialize(),
                                dataType: "json",

                        success: function (response) {
                            if (response.status === "success") {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Selamat!',
                                    text: response.message,
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "<?= base_url('/dashboard'); ?>";
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops!',
                                    text: response.message,
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function (xhr) {
                            console.log(xhr.responseText); // Debugging jika error
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops!',
                                text: 'Terjadi kesalahan, coba lagi!',
                                confirmButtonText: 'OK'
                            });
                        }
                    });

                    return false; // **Pastikan form tidak reload**
                });
            });
        </script>




    </body>
    </html>