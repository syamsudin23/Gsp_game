<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        body {
          background-image: url('/Uploads/img/Background .png');
          /* background: linear-gradient(90deg, rgb(29, 23, 155) 0%, rgb(25, 22, 107) 35%, rgba(24,23,98,1) 85%);  */

        }

        .custom-card {
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.68); /* Warna putih dengan transparansi */
            backdrop-filter: blur(10px); /* Efek blur pada latar belakang */
            -webkit-backdrop-filter: blur(10px); /* Untuk kompatibilitas dengan Safari */
            opacity: 50%;  
            box-shadow: 10px 10px 10px 5px rgba(0, 68, 255, 0.24) inset;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 20px;  
            width: 50rem;   
            height: 30rem;
            
        }

        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            box-shadow: 5px 5px 15px rgba(0, 68, 255, 0.52);
            border-radius: 20px;

        }

        .logo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5%;
        }

        .form-container {
            flex: 1;
            text-align: center;
            padding: 20px;
            
            
        }

        .form-input {
            width: 85%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 15px;
            border: 1px solid rgba(185, 181, 181, 0.97);;
            background-color:rgba(242, 242, 242, 0.73);
        }

        .form-input:focus {
            outline: none;
            border-color: rgba(58, 39, 178, 0.61);
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
            box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.24);
        }

        .btn-login:hover {
            background-color: rgba(20, 118, 197, 0.85);
        }

        .text-muted a{
            text-decoration: none;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card custom-card" id="loginCard">
            <div  class="image-container">
                <img src="<?= base_url('uploads/img/Produk.png') ?>" alt="logo" class="logo" >
            </div>
            <div class="form-container">
                <h3 class="card-title mt-2 mb-5" style="font-weight: bold;padding-bottom:20px;  color:rgb(97, 52, 220);">Register</h3>
                <form action="/login" method="post" id="loginForm">
                    <input type="text" name="username" id="username" placeholder="Username" required class="form-input">
                    <input type="password" name="password" id="password" placeholder="Password" required class="form-input mb-4">
                    <button type="submit" class="btn btn-primary btn-login">Register Now!</button>
                </form>
                <p class="text-muted mt-5">Already have account? <a href="/login">Login</a></p>
            </div>
        </div>
    </div>

    <!-- GSAP Animation Script -->
    <script>
        gsap.set("#loginCard", { opacity: 0, y: 100 });
        gsap.set("#loginForm", { opacity: 0 });

        gsap.timeline()
            .to("#loginCard", { opacity: 1, y: 0, duration: 2, ease: "power3.out" })
            .to("#loginForm", { opacity: 1, duration: .8, ease: "power3.out" }, "-=0.5");
    </script>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
