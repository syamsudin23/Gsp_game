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
            margin-right: 975px;
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

            background: url('uploads/img/Background-gsp-home.png') no-repeat center/cover;
            align-items: center;
            justify-content: center;
        }







        .container-home {
            text-align: center;
            color: white;
            opacity: 0;
            transform: translateY('50px');    

        }
        .container-home h1 {
            font-size: 3rem;
            font-weight: bold;
            transition: filter 0.3s ease;
            
        }
        .container-home h4 {
            margin-top: 20px;            
        }
        .highlight { 
            font-size: 3.2rem;
            color: orange;  
            font-weight: bold;
        }

        .span2{
            color: rgb(221, 120, 199);
            font-weight: bold;
        }



        .btn-start {
            background: rgb(16, 85, 221);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 25px;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            transition: 0.3s ease-in-out;
        }


        .btn-start:hover{
            background-color: rgb(80, 38, 179);
            box-shadow: 4px 4px 15px 3px rgba(77, 53, 210, 0.73);
        }


        .btn-start:hover .span-lets-start {
            transform: translateX(1px);
            letter-spacing: 1px;
            transition: all 0.3s ease-in-out;
            
        }

        .arrow {
            display: inline-block; /* Tambahkan agar transform bisa bekerja */
        }

        @keyframes shake {
            0% { transform: translateX(3px); }
            25% { transform: translateX(2px); }
            35% { transform: translateX(1px); }
            50% { transform: translateX(0); }
            60% { transform: translateX(-1px); }
            75% { transform: translateX(-2px); }
            100% { transform: translateX(-3px); }
        }

        .btn-start:hover .arrow {
            animation: shake 1s ease-in-out infinite; /* Efek goyang terus selama hover */
            animation-fill-mode: both; /* Biar efek tetap smooth setelah hover */
            animation-direction: alternate; /* Efek bolak-balik lebih natural */
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







        /* About section */

        #about-section{
            height: 100vh; /* Setiap section satu layar penuh */
            width: 100%;
            display: flex;

            scroll-snap-align: start;

            background: url('Uploads/img/about-section.png') no-repeat center/cover;
            justify-content: center;    
            align-items: center;    

        }

        .container-about{
            justify-content: center;
            align-items: center;
        }


        #about-section h2{
            font-size: 2.5rem;
            padding-top: 100px;
            padding-bottom: 5px;
            border-bottom: 2px solid blue;
            display: inline-block;
            border-radius: 0px 0px 20px 0px;
            color: rgba(215, 208, 28, 0.81);
            font-weight: bold;
        }
        #about-section p{
            font-size: 1.3rem; 
            font-family: 'Poppins';
            color: white;


        }

        .container-about img{
            box-shadow: 1px 1px 1px 2px rgba(6, 44, 197, 0.68);
            border-radius: 100px;
        }




        /* htplay section */


        #htplay-section{
            background: url('uploads/img/howtoplay-section3.png');
            display: flex;
            flex-direction: column; 
            overflow: hidden;
        }

        .title-htplay{
            padding: 10px;
            padding-left: 250px;
            margin-top: 100px;
        }

        .title-htplay h1{
            font-size: 2.8rem;
        }

        .row-step-right{
            margin-top: 230px;
        }

        .row-step-left{
            margin-top: 240px;
        }

        .step-box{
            margin-left: 600px;
            display: flex;
            align-items: center;
        }

        .step-box-left{
            margin-right: 600px;
            display: flex;
            align-items: center;
        }

        .step-box-left img{
            border-radius: 20px;
            box-shadow: 2px 2px 15px 1px rgba(13, 13, 14, 0.48);
        }

        .step-box-left p{

        color: white;
        font-size: 1.1rem;
        font-family: 'Poppins';

        }

        .step-box img{
            border-radius: 20px;
            box-shadow: 2px 2px 15px 1px rgba(13, 13, 14, 0.48);
        }



        .step-box p{

            color: white;
            font-size: 1.1rem;
            font-family: 'Poppins';
            text-align: right;
            padding-right: 35px;
        
        }

        /* #htplay-section h2{
            font-size: 3rem;
            color: white;
            display: flex;
            justify-content: center;
            margin-top: 225px;
            margin-left: 250px;

            
            
        }

        .container-htplay {
            overflow: hidden;
            display: flex;

        } */



        /* Excellent Section */

        #excellent-section{
            height: 100vh; /* Setiap section satu layar penuh */
            width: 100%;

            scroll-snap-align: start;

            background: url('Uploads/img/Excellent-section.png') no-repeat center/cover;
            justify-content: center;    
            align-items: center;    

        }

        #excellent-section h1{
            background-color:;
            margin-top: 200px;
            text-shadow: 2px 2px 20px rgba(216, 198, 198, 0.35);
        }

        #excellent-section .container .row{
            margin-top: 200px;
        }


        /* CSS Card Glassess uiverse.io */

        /* From Uiverse.io by joe-watson-sbf */ 

        .container-card {
            display: flex;
            flex-direction: row; /* Default, boleh dihapus */
            align-items: center; /* Agar card sejajar secara vertikal */
            justify-content: center;
            gap: 75px;
            color: white;
            font-family: sans-serif;
            padding: 20px; /* Opsional, agar tidak mepet */
            margin-top: 75px;
        
          
        }


        .container-card .box {
            width: 11.875em;
            height: 15.875em;
            padding: 1rem;
            background-color: rgba(255, 255, 255, 0.074);
            border: 1px solid rgba(255, 255, 255, 0.222);
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border-radius: 1.0rem;
            transition: all ease 0.3s;
        
        }

        .container-card .box {
            display: flex;
            flex-direction: column;
            }

            .container-card .box .logo-exce {
            display: flex;
            justify-content: center;
        }




        .container-card .box div p {
            margin: 0;
            margin-top: 10px;
            font-size: 1.0em;
            font-weight: 400;
            font-family: 'Poppins';
        }

        .box span i{
            font-size: 0.7rem;
            color: orange;
        }


        .container-card .box:hover {
            box-shadow: 0px 0px 20px 1px #ffbb763f;
            border: 1px solid rgba(255, 255, 255, 0.454);
        }



        /* Creator-team section */

        #creatorteam-section {
            height: 140vh; /* Setiap section satu layar penuh */
            width: 100%;

            scroll-snap-align: start;

            background: url('Uploads/img/creator-team-bg.png') no-repeat center/cover;  

        }

        .container-ct{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 400px;
        }

        .circle {
            height: 200px;
            width: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: rgba(95, 35, 206, 0.34);
            position: relative;
            transition: ease-in-out;
            /* animation: moveDown 1s forwards; */
            /* animation-play-state: paused; Pause animasi sampai elemen masuk layar */
        }


        .circle1{
            bottom: 70px;
            left: 70px;
            animation: moveCircle1 4s forwards;
            animation-play-state: paused;
            

        }
        
        .circle2{
            bottom: 285px;
            animation: moveCircle2 3.6s forwards;
            animation-play-state: paused;

        }

        .circle3{
            right: 70px;
            bottom: 72px;
            animation: moveCircle3 3s forwards;
            animation-play-state: paused;

        }


        @keyframes moveCircle1 {
            0% {transform: translate(0, 0); opacity: 10%;}
            50% {transform: translate(125px, -215px);}
            100% {transform: translate(130px, -100px);}


        }

        @keyframes moveCircle2 {
            0% {transform: translate(0, 0); opacity: 10%;}
            50% {transform: translate(125px, 215px);}
            100% {transform: translate(395px, 218px);}

        }

        @keyframes moveCircle3 {
            0% {transform: translate(0, 0); opacity: 10%;}
            50% {transform: translate(-265px, 0px);}
            100% {transform: translate(-511px, 7px);}

        }

        .team-name{
            opacity: 0;
            position: absolute;
            padding-top: 250px;
            padding-right: 50px;
            padding-left: 50px;
            margin-top: 20px;
            background-color: ;
            transition: opacity 0.5s ease-out;
            font-family: 'Poppins';
            font-size: 1em;
            transition: all 2s ease-in-out;    

        }

        /* Toolcip circle profil */


        .tooltip-text{          /* keseluluran elemen div tooltip-text*/
            visibility: hidden;
            display: flex;
            position: absolute; 
            top: 218px;
            gap: 7px;
            background-color: rgb(59, 29, 158);
            padding: 12px 16px;
            border-radius: 20px;
            z-index: 1;
            font-size: 1.8rem;
        }

        .circle1:hover .tooltip-text1 {
            visibility: visible;
            cursor: pointer;
        }
        .circle2:hover .tooltip-text2 {
            visibility: visible;
            cursor: pointer;
        }
        .circle3:hover .tooltip-text3 {
            visibility: visible;
            cursor: pointer;
        }

        /* Menhandle agar ketika cursor keluar dari area div circle maka tooltip tidak akan hilang */

        .team-name1:hover ~ .tooltip-text1{
            visibility: visible;
        }
        .team-name2:hover ~ .tooltip-text2{
            visibility: visible;
        }
        .team-name3:hover ~ .tooltip-text3{
            visibility: visible;
        }

        /* End Handle */


        /* Animasi spawn tooltip untuk semua tooltip-text */

        .circle1:hover  .tooltip-text1 {
            animation: tooltip-spawn 1s forwards;
            transition: ease-in-out;
        }
        .circle2:hover  .tooltip-text2 {
            animation: tooltip-spawn 1s forwards;
            transition: ease-in-out;
        }
        .circle3:hover  .tooltip-text3 {
            animation: tooltip-spawn 1s forwards;
            transition: ease-in-out;
        }


        @keyframes tooltip-spawn {
            from {transform: translate(0px, -2px); opacity: 0;}
            to   {transform: translate(0px, 22px); opacity: 1;}
        }


        
        .ig-tooltip:hover{
            color: rgb(215, 52, 244);
            transition: all .3s ease-in-out;
        }
        .github-tooltip:hover{
            color: rgb(244, 154, 52);
            transition: all .3s ease-in-out;
        }
        .discord-tooltip:hover{
            color: rgb(98, 30, 214);
            transition: all .3s ease-in-out;
        }
        .email-tooltip:hover{
            color: rgba(220, 39, 54, 0.56);
            transition: all .3s ease-in-out;
        }


        /* Footer Section */


        .container-footer{
            margin-top: 280px;
        }

        
        .footer{
            display: flex;  
            justify-content: center;    
                      
        }

        .footer ul li {
            list-style-type: none;
        
        }

        .footer ul li a{
            color: white;
            text-decoration: none;
            padding: 10px;
        
        
        }


        .corner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            z-index: 2;
            align-items: center;
            color: rgb(39, 17, 129);
            position: fixed;
            width: 65px;
            height: 65px;
            background-color: rgb(87, 55, 204);
            opacity: 0; /* Awalnya tidak terlihat */
            border-radius: 10px;
            visibility: hidden; /* Supaya tidak bisa diklik saat hidden */
            transition: opacity 0.5s ease-in-out, visibility 0.5s;
            cursor: pointer;
            
        }

        .corner-box i {
            font-size: 25px;
        }

        .corner-box:hover .corner-box-tooltip {
            opacity: 1;

        }

        .corner-box:hover i{
            animation: shake-arrow-back-to-top 2.5s cubic-bezier(0.42, 0, 0.58, 1) infinite;
            color: white;
            transition: all .5s ease-in-out;
        }

        .corner-box-tooltip{
            font-size: 14px;
            color: white;
            position: fixed;
            background-color: rgb(66, 83, 194);
            right: 135px;
            padding: 10px 20px;
            border-radius: 10px;
            opacity: 0;
            transition: all .2s ease-in-out;
            z-index: 2;

        }

        .corner-box-tooltip::after{
            content: "";
            display: block; 
            width: 0;
            height: 0;
            border-top: 12px solid transparent;
            border-bottom: 12px solid transparent;
            border-left: 8px solid rgb(66, 83, 194);
            position: absolute;
            top: 8px;  
            right: -8.1px;
            z-index: 2;
        }





        #corner-right {
            top: 660px;
            right: 50px;
        }

        .corner-box.show {
            opacity: 1; /* Muncul */
            visibility: visible; /* Bisa diklik */
            
        }

        @keyframes shake-arrow-back-to-top {
            0% { transform: translateY(0px); }
            20% { transform: translateY(-2px); }
            40% { transform: translateY(1px); }
            60% { transform: translateY(-2px); }
            80% { transform: translateY(1px); }
            100% { transform: translateY(0px); }
        }

        

        

        
    </style>
</head>
<body>

    <!-- navbar -->

    <div class="navbar">
        <div class="logo">
           <a href="#"> <img src="<?= base_url('uploads/img/gsp-logo.png') ?>" alt="gsp-logo"></a>
        </div>
        <div class="nav-links">
            <a href="/dashboard" class="active">
                <i class="fa-solid fa-house"></i>  Home
            </a>
            <a href="#">
                 <i class="fa-solid fa-ranking-star"></i> Leaderboard
            </a>
         
        </div>
        <div class="user-info">
          <p style="cursor: default;">Login</p>
            <a href="/login"><button class="btn btn-logout mb-3 ms-4 me-3 "><i class="fa-solid fa-right-from-bracket"></i></button></a>
        </div>
    </div>

    <!-- End navbar -->

    <a href="#">
        <div id="corner-right" class="corner-box">
        <i class="fa-solid fa-arrow-up"></i>
        <span class="corner-box-tooltip">Back to top</span>
    </div></a>
    

    <!-- Home section -->
    <section id="home-section">
        <div class="container-home">
            <h1><br>Improve your<span class="highlight"><br>Picture guessing</span><span class="span2"> skills</span></h1>
            <h4>With this Game</4><br>

            <a href="#" class="btn-start mt-5 ps-5 pe-5">
                <span class="span-lets-start">Let's start</span>
                <span class="arrow">→</span>
            </a>

            <div class="scroll-arrow" id="scrollArrow" onclicl=""></div>
        </div>
    </section>

    

    <!-- End Home section -->



    <!-- About section -->
    
    <section id="about-section">
        <div class="container container-about text-center" data-aos="fade-up" data-aos-duration="2000">
                <h2>About 👉</h2>
                <img src="<?= base_url('uploads/img/gsp-logo.png')?>" alt="logo-gsp" width="175" height="150" data-aos="flip-right" data-aos-duration="3000">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                         <p class="mt-5 col-md-10 pb-4"><span style="color: orange; font-weight: bold;">GSP Game </span>is an interactive picture guessing game that trains fast and precise visual thinking skills. In this game there are also several themes that you can choose to play... there is programming, history, and other general things. </p>
                    </div>
                </div>
        </div>
    </section>

    <!-- End About section -->


    <!-- Htplay section -->
    
    <section id="htplay-section" class="container-fluid">

    <!-- Row 1: Judul "How to play?" -->
    <div class="row title-htplay" data-aos="fade-down-right" data-aos-duration="1500">
        <div class="col-md-12">
            <h1 class="text-start text-white">How to <span style="color: rgba(44, 225, 23, 0.8); font-weight: bold;">play?<span></h1>
        </div>
    </div>

    <!-- Row 2: Gambar + Deskripsi (kanan)-->
    <div class="row justify-content-center row-step-right" data-aos="fade-up-left" data-aos-duration="1500">
        <div class="col-md-6 step-box">
            
            <p class="mt-4"><span class="fs-2">Step 1.</span><br><br>Firstly click the button "Let's Start" to play the game.</p>
            <img src="uploads/img/step1..png" alt="Step 1" class="img-fluid" width="450" height="300">
        </div>
    </div>


    <!-- Row 3: Gambar + Deskripsi (kiri)-->
    <div class="row justify-content-center row-step-left" data-aos="fade-up-right" data-aos-duration="1500">
        <div class="col-md-6 step-box-left">
            
            <img src="uploads/img/step1..png" alt="Step 2" class="img-fluid" width="450" height="300">
            <p class="mt-4 ps-5"><span class="fs-2">Step 2.</span><br><br>Firstly click the button "Let's Start" to play the game.</p>

        </div>
    </div>

    <!-- Row 4: Gambar + Deskripsi (kanan)-->
    <div class="row justify-content-center row-step-right mb-2" data-aos="fade-up-left" data-aos-duration="1500">
        <div class="col-md-6 step-box">
            
            <p class="mt-4"><span class="fs-2">Step 3.</span><br><br>Firstly click the button "Let's Start" to play the game.</p>
            <img src="uploads/img/step1..png" alt="Step 3" class="img-fluid" width="450" height="300">
        </div>
    </div>

    <!-- End Htplay section -->



    <!-- Excellent Section-->

    <section id="excellent-section">

        <h1 class="text-center text-white" data-aos="fade-up" data-aos-duration="1200">Excellent in this Game 😎</h1>

        <div class="container container-excellent">
            
            <!-- <div class="row">
                <div class="col-md-12"> -->
                    <!-- <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div> -->


                    <div class="container-card" >
                        <div class="box" data-aos="fade-up-right" data-aos-duration="2000">

                            <span class="logo-exce ps-5 pe-5">
                                <img src="uploads/img/logo-seruedu.png" alt="seruedu" width="150" height="150">
                            </span>
                            <div>
                                <p>Fun & Educational</p>
                                <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>

                        </div>

                        <div class="box" data-aos="fade-up-right" data-aos-duration="1500">

                            <span class="logo-exce ps-5 pe-5 pt-3">
                                <img src="uploads/img/logo-sometheme.png" alt="seruedu" width="150" height="130">
                            </span>
                            <div>
                                <p>Have some themes</p>
                                <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>

                        </div>

                        <div class="box" data-aos="fade-up-left" data-aos-duration="1500">

                            <span class="logo-exce ps-5 pe-5 pt-2">
                                <img src="uploads/img/logo-leaderboard.png" alt="seruedu" width="150" height="140">
                            </span>
                            <div>
                                <p>Leaderboard Score</p>
                                <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>

                        </div>

                        <div class="box" data-aos="fade-up-left" data-aos-duration="2000">

                            <span class="logo-exce ps-5 pe-5 pt-3">
                                <img src="uploads/img/logo-easy.png" alt="seruedu" width="150" height="135">
                            </span>
                            <div>
                                <p>Easy to Play</p>
                                <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            </div>

                        </div>
                    </div>



                <!-- </div>
            </div> -->
            

        </div>
    </section>




    <!-- End Excellent Section-->


    <!-- Creatorteam-section -->

        <section id="creatorteam-section">
            <h1 class="text-white text-center" style="margin-top: 70px;">Creator team</h1>

            <div class="container container-ct text-white">

                <div class="circle circle1">
                    <img src="<?= base_url('uploads/img/logo-admin.png') ?>" alt="logo-profil" width="150" height="150" >
                    
                    <span class="tooltip-text tooltip-text1">
                    <i class="fa-brands fa-instagram ig-tooltip"></i>
                    <i class="fa-brands fa-github  github-tooltip"></i>
                    <i class="fa-brands fa-discord discord-tooltip"></i>
                    <i class="fa-solid fa-envelope email-tooltip"></i>
                    </span>

                    <p class="team-name team-name1">Syamsudin</p>
                </div>
                <div class="circle circle2">
                    <img src="<?= base_url('uploads/img/logo-admin.png') ?>" alt="logo-profil" width="150" height="150">

                    <span class="tooltip-text tooltip-text2">
                    <i class="fa-brands fa-instagram ig-tooltip"></i>
                    <i class="fa-brands fa-github  github-tooltip"></i>
                    <i class="fa-brands fa-discord discord-tooltip"></i>
                    <i class="fa-solid fa-envelope email-tooltip"></i>
                    </span>

                    <p class="team-name team-name2">M.Hanif</p>
                </div>
                <div class="circle circle3">
                    <img src="<?= base_url('uploads/img/logo-admin.png') ?>" alt="logo-profil" width="150" height="150">
                    
                    <span class="tooltip-text tooltip-text3">
                    <i class="fa-brands fa-instagram ig-tooltip"></i>
                    <i class="fa-brands fa-github  github-tooltip"></i>
                    <i class="fa-brands fa-discord discord-tooltip"></i>
                    <i class="fa-solid fa-envelope email-tooltip"></i>
                    </span>
                    
                    <p class="team-name team-name3">G.Bims</p>
                </div>






            </div>

            <div class="container container-footer">
                <div class="footer">
                    <ul>
                        <li>
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#">Ht-play</a>
                        <a href="#">Excellent</a>
                        <a href="#">C-team</a>
                        </li>
                    </ul>
                </div>
            </div>

        </section>

    <!-- End Creator team -Section-->







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
                    let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = "running";
                    } else {
                        entry.target.style.animationPlayState = "paused";
                    }
                });
            });

            observer.observe(document.querySelector(".circle1"));
            observer.observe(document.querySelector(".circle2"));
            observer.observe(document.querySelector(".circle3"));



                    document.addEventListener("DOMContentLoaded", function () {
            const circles = document.querySelectorAll(".circle");

            circles.forEach(circle => {
                circle.addEventListener("animationend", function () {
                    const text = this.querySelector(".team-name");
                    if (text) {
                        text.style.opacity = "1";
                    }
                });
            });
        });

        setTimeout(() => {
            text.style.opacity = "1";
        }, 300);


            document.addEventListener("scroll", function() {
        let aboutSection = document.getElementById("about-section");
        let rightBox = document.getElementById("corner-right");

        let aboutTop = aboutSection.getBoundingClientRect().top;
        let windowHeight = window.innerHeight;

        if (aboutTop < windowHeight / 2) { 
            rightBox.classList.add("show");
        } else {
            rightBox.classList.remove("show");
        }
    });


    </script>
    
    <script>
        AOS.init()

         // Arrow Scroll ke Section Berikutnya
         document.getElementById("scrollArrow").addEventListener("click", function() {
            gsap.to(window, {duration: 1, scrollTo: "#about-section"});
        });
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