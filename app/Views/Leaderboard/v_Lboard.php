<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSP Game - Dashboard</title>

    <!-- Link Fontawesome icon -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            
        }
        body {
            position: relative;
            margin: 0;
            justify-content: center;
            align-items: center;
            scroll-snap-type: y mandatory; /* Efek scroll halus antar section */
            scroll-behavior: smooth;

        }




            
        .navbar {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.77) 0%, rgb(25, 22, 107) 35%, rgba(24, 23, 98, 0.53) 85%); 
            padding: 15px;
            display: flex;
            align-items: center;
            border-radius: 0px 0px 50px 50px;
            box-shadow: 5px 5px 15px rgba(5, 5, 5, 0.73);
        } 

        .login{
            padding-left: 200%;
        }

        .logo img{
            border-radius: 100px;
        }


        .logo img:hover{

            transform: rotate(10deg);
            box-shadow: 2px 2px 15px 2px rgba(133, 11, 215, 0.32);  
            transition: 0.3s ease-in-out;
        }

        .navbar .logo img{
            width: 75px;
            height: 65px;
            
        }

        
        .nav-links {
            margin-left: auto;
            display: flex;
            gap: 30px;
            margin-right: 850px;
            font-family: Arial, Helvetica, sans-serif;
            
            
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 18px;
           
        }

        .nav-links a:hover {
            color: rgb(116, 71, 215);
            text-decoration: none;
            font-size: 18px;
            transition: all .3s ease-in-out;
           
        }

        .nav-links a.active{
            color: rgb(96, 35, 227);
        }


        .user-info {
            margin-top: 15px;
            margin-left: auto;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            
            
        }



        #home-section{
            height: 100vh; /* Setiap section satu layar penuh */
            width: 100%;
            display: flex;

            scroll-snap-align: start;

            background: url('uploads/img/Leaderboard-page.png') no-repeat center/cover;
            align-items: center;
            justify-content: center;
        }







        .container-home {
            text-align: center;
            color: white;
            opacity: 0;
            margin-bottom: 400px;

        }
        .container-home h1 {
            font-size: 2rem;
            font-weight: bold;
            transition: filter 0.3s ease;
            position: relative;
        
            
        }



        .btn-logout{
            border-radius: 3px 3px 18px 3px;
            background-color: rgb(116, 71, 215);
            color: white;
        }

        .btn-logout:hover{
            color: white;
            background-color: rgb(215, 71, 95);;
            transition: all .3s ease-in-out;
        }

        .logout {
            font-size: 18px;
            color: white;
            cursor: pointer;
        }


        /* Table css */

        
        

        
    </style>
</head>
<body>

    <!-- navbar -->

    <div class="navbar">
        <div class="logo">
           <a href="#"> <img src="<?= base_url('uploads/img/gsp-logo.png') ?>" alt="gsp-logo"></a>
        </div>
        <div class="nav-links">
            <a href="/dashboard">
                <i class="fa-solid fa-house"></i>  Home
            </a>
            <a href="/Leaderboard" class="active">
                 <i class="fa-solid fa-ranking-star"></i> Leaderboard
            </a>
         
        </div>
        <div class="user-info">
          <p style="cursor: default;">User &nbsp | &nbsp Score: 2550</p>
            <a href="/logout"><button class="btn btn-logout mb-3 ms-4 me-3 "><i class="fa-solid fa-right-from-bracket"></i></button></a>
        </div>
    </div>

    <!-- End navbar -->

    

    <!-- Home section -->
    <section id="home-section">
        <div class="container-home">
            <h1>Leaderboard Score</h1>

            <div class="container-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            




        </div>

      
    </section>



    <!-- End Home section -->












    <!-- Animation Gsap navbar dan container -->
    <script>
        window.onload = function() {
            gsap.to(".navbar", { 
                duration: 1.8, 
                y: 100, // Turunkan navbar dari posisi awal
                ease: "power2.out" // Efek halus
            });

                gsap.to(".container-home", { 
                duration: 1.5, 
                opacity: 1, 
                y: 0, // Geser ke atas ke posisi normal
                ease: "power2.out",
                delay: 0.5 // Biar muncul setelah navbar turun
            });

            gsap.from(".container-home > *", { 
                duration: 1.2, 
                opacity: 0, 
                y: 50, // Muncul dari bawah
                stagger: 0.3, // Tiap elemen muncul berurutan
                ease: "power2.out",
                delay: 0.7 // Sedikit lebih lambat dari container biar efeknya smooth
            });

        };

    </script>

    
    <script>
        AOS.init()

    </script>




    <script>
        // Set initial states
        gsap.set(".container-home", { opacity: 0 });

        // Create animation
        gsap.timeline()
        .to(".container-home", { opacity: 1, duration: .8, ease: "power3.out" }, "-=0.5"); // Animasi untuk isi dalam container  
    </script>




     <!-- GSAP -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>


     <!-- Fontawesome kit -->

    <script src="https://kit.fontawesome.com/c6b28474b5.js" crossorigin="anonymous"></script>
</body>
</html>