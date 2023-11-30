<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f1f1f1">
    <title>Aptitude</title>
    <link rel="stylesheet" href="D:\XAMPP\htdocs\Clustor Computing\eLearningWebsite\navbar.html">
    <link rel="stylesheet" href="main.css">

    

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E20ELFGHR5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-E20ELFGHR5');
    </script>
    <style>
        .top_ad_unit,
        .right_ad_unit,
        .bottom_ad_unit {
            min-width: 250px;
            width: 100%;
        }
        
        ins.adsbygoogle {
            background: transparent !important;
        }

    
    </style>
</head>


<?php
  session_start();
  if(isset($_SESSION['email'])){
    echo "";
  }
  else{
    echo "<script>window.location.href='../Login/signup.php'</script>";

  }
?>


<body>


    <aside class="sidebar-nav-wrapper">

        <nav class="sidebar-nav">


            <ul>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-home"></i></span><span class="text">Home</span></a></li>
                <li class="divider"></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-math-integral-box"></i></span><span class="text">Arithmetic Aptitude</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-chart-box"></i></span><span class="text">Data Interpretation</span></a></li>
                <li class="divider"></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-text-box-check"></i></span><span class="text">Verbal Ability</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-chart-arc"></i></span><span class="text">Logical Reasoning</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-alphabetical-variant"></i></span><span class="text">Verbal Reasoning</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-collage"></i></span><span class="text">Nonverbal Reasoning</span></a></li>
                <li class="divider"></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-clock-outline"></i></span><span class="text">Interview Questions</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-earth"></i></span><span class="text">TCS</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-head-lightbulb mdi-flip-h"></i></span><span class="text">Accenture</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-earth"></i></span><span class="text">Infosys</span></a></li>
                <li class="nav-item"><a href="#"><span class="icon"><i class="mdi mdi-earth"></i></span><span class="text">Cognizant</span></a></li>
        </nav>
    </aside>
</body>
<div class="overlay"></div>
<main class="main-wrapper">
    <header class="header">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-5 col-6">
                    <div class="header-left d-flex align-items-center">
                        <div class="menu-toggle-btn">
                            <button aria-label="Menu Toggle" id="menu-toggle" class="main-btn">
                                <i class="mdi mdi-menu">APTITUDE PREPRATION</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <div class="row no-gutters">
        <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-20">
            <div class="card-style-list">
                <h2>General Aptitude</h2>
                <div class="card-content">
                    <div class="card-icon mdi-chart-donut-variant"></div>
                    <ul>
                        <li><a href="https://youtu.be/UXmoCKxUcs4?list=PLIU86IV5HmhTn3paE0ntQDtha58SXMXid">Quantative Ability</a></li>
                        <li><a href="https://youtu.be/hT7kSyF3Hlc?list=PLYmOMw1MMM7tFeUFUZqvPoLIfq06a7FCB">Data Interpretation</a></li>
                        <li><a href="#">Online Aptitude Test</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-20 ">
            <div class="card-style-list ">
                <h2>Verbal and Reasoning</h2>
                <div class="card-content ">
                    <div class="card-icon mdi-checkbox-marked-circle-outline "></div>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=TNkq01wrqUg&list=PLpyc33gOcbVBbD8Vfy-gCbivjSSHbMpUX ">Verbal Ability</a></li>
                        <li><a href="https://youtu.be/AYppAB_Sd0E?list=PLNxGe8ZeQixAK5DUiNOxQer01ffQV2s0t">Logical Reasoning</a></li>
                        <li><a href="https://youtu.be/AYppAB_Sd0E?list=PLNxGe8ZeQixAK5DUiNOxQer01ffQV2s0t">Verbal Reasoning</a></li>
                        <li><a href="https://www.youtube.com/watch?v=2gQXVfPoyZ4&list=PL9d8poPriyVRABJTbgj2Mlg4o6GtWt8_j">Non Verbal Reasoning</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end col (ad-box-above)-->
        <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-20 ">
            <div class="card-style-list ">
                <h2>Differnt Companies Interview Questions </h2>
                <div class="card-content ">
                    <div class="card-icon mdi-table-clock "></div>
                    <ul>
                        <li><a href="https://youtu.be/K1x8eRp_MWg">TCS</a></li>
                        <li><a href="https://www.youtube.com/watch?v=Vtnc4hopskw">Accenture</a></li>
                        <li><a href="https://youtu.be/ei8x9LGx9Kk">Cognizant</a></li>
                        <li><a href="https://youtu.be/AKZFn9ClnNo">Infosys</a></li>
                        <li><a href="https://youtu.be/R7b2klu5Zow">Read more...</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end col -->
     

        <!---custom js link---->
        <script type="text/javascript" src="js/script.js">
            < /script < /
            main >


                <
                script src = "https://www.indiabix.com/_files/js/util/bootstrap.bundle.min.js " >
        </script>
        <script src="https://www.indiabix.com/_files/js/main.min.js?ver=1.0 "></script>

        </body>

</html>