<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"href="courses.css">
    <link rel="stylesheet"href="css/style.css">
    <title>Courses</title>


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
<div>
   <header>
		<a href="#" class="logo">
         <a href="img\online-study.svg" class="logo"></a>
			<h1>Learning</h1>
			<!-- <img src="img\online-study.svg" alt=""> -->
		</a> 

		<ul class="navbar">
			<li><a href="..\index.html">Home</a></li>
			
            <li>
                <a href="#">Programming </a>
                <div class="sub-menu-1"
                    style="border: 1px; border-radius: 20px; background-color: rgba(19, 56, 77, 0.637);">
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">C</a></li>
                        <li><a class="dropdown-item" href="#">C++</a></li>
                        <li><a class="dropdown-item" href="#">JAVA</a></li>
                        <li><a class="dropdown-item" href="#">PYTHON</a></li>
                        <li><a class="dropdown-item" href="#">HTML</a></li>
                    </ul> 
                </div>
            </li> 
			<!-- <li><a href="#categories">Categories</a></li> -->
			 <li><a href="Courses\courses.html">Courses</a></li>
			<li><a href="#">Placement </a></li>
			<li><a href="#">Aptitude</a></li> 
			 <li><a href="#about">About Us</a></li> 
			<li><a href="#contact">Feedback</a></li>
			<li><a href="#">logout</a></li>
		</ul>

		<div class="header-icons">
			<a href="#"><i class='bx bx-user'></i></a>
			<a href="#"><i class='bx bx-heart' ></i></a>
			<a href="#"><i class='bx bx-cart' ></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>
</div>
	

<!-- <div class="main">
 <h3 class="text">All Courses</h3>
</div>
 
 cards -->
<br>
<br>


 <section class="courses" id="courses">
   <div class="center-text">
      <h5>COURSES</h5>
      <h2>Explore Popular Courses</h2>
   </div>

   
   <div class="courses-content">
      <div class="row">
         <img src="http://www.programmerspoint.in/images/advanced-java-course.jpg">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3>The Complete HTML CSS JS Course 2022</h3>
            <h6>05 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <img src="https://www.igmguru.com/uploads/products/machine-learning-training-igmguru_1499895199_xl.jpg">
         <div class="courses-text">
            <h5>$40.00</h5>
            <h3>Introduction to Machine Learning</h3>
            <h6>15 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>
       
			<div class="row">
				<img src="https://www.teahub.io/photos/full/22-221879_-net-full-stack-developer.jpg">
				<div class="courses-text">
					<h5>$20.00</h5>
					<h3>The  Ultimate 2023 Fullstack Web Development Bootcamp</h3>
					<h6>48 hours 45 minutes</h6>
					<div class="rating">
						<div class="star">
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
						</div>
						<div class="review">
							<p>{5 Reviews}</p>
						</div>
					</div>
				</div>
			</div> 
      <div class="row">
         <img src="https://cka.collectiva.in/Content/images/CourseImages/9.png">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3> C Programming</h3>
            <h6>09 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <img src="https://www.analyticsinsight.net/wp-content/uploads/2021/08/Blockchain-Online-Keep-an-Eye-On-These-Courses.jpg">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3>Blockchain tutorial</h3>
            <h6>06 hours 5 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <img src="data:image/jpeg;base64,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">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3> Learn DevOps: The Complete Course </h3>
            <h6>40 hours 2 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <!-- <a href="#"><i class='bx bxs-star' ></i></a> -->
               </div>
               <div class="review">
                  <p>{4Reviews}</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiZFgo4dZ-nJOlFLt8kPCf_vILHvidgZbgxw&usqp=CAU">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3> C++ Programming</h3>
            <h6>05 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <img src="https://www.best-course-online.com/wp-content/uploads/1035000-udemy-coupon-review.jpg">
         <div class="courses-text">
            <h5>$60.00</h5>
            <h3>Docker for  Develper</h3>
            <h6>10 hours 37 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  
               </div>
               <div class="review">
                  <p>{3 Reviews}</p>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_Data_Science.jpg">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3>Data Science </h3>
            <h6>15 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>

   
      <div class="row">
         <img src="http://www.webdevelopmenthelp.net/wp-content/uploads/2019/05/Web-Development1.png">
         <div class="courses-text">
            <h5>$21.00</h5>
            <h3>The Complete Web Development Course</h3>
            <h6>15 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  
               </div>
               <div class="review">
                  <p>{4 Reviews}</p>
               </div>
            </div>
         </div>
      </div>

         <div class="row">
            <img src="https://www.eweek.com/wp-content/uploads/2022/05/enterprise-AI.jpg">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3>Artificial Intelligence</h3>
            <h6>05 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <img src="img/course5.jpg">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3>The Complete HTML CSS JS Course 2022</h3>
            <h6>05 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>
<!-- 
      <div class="row">
         <img src="img/course1.jpg">
         <div class="courses-text">
            <h5>$20.00</h5>
            <h3>The Complete HTML CSS JS Course 2022</h3>
            <h6>05 hours 15 minutes</h6>
            <div class="rating">
               <div class="star">
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
                  <a href="#"><i class='bx bxs-star' ></i></a>
               </div>
               <div class="review">
                  <p>{5 Reviews}</p>
               </div>
            </div>
         </div>
      </div>

   </div> -->

<!-- <div class="card">

<div class="image">
   <img src="https://www.ictacademy.in/pages/assets/base/img/content/stock/cprogram.jpg">
</div>
<div class="title">
 <h2>
    C Programming For Beginners
</h2>
</div>
<div class="des">
 <p>Avinash Jain,The Codex</p>

<ul>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star "></i> </li>

    </ul>
    <button>Read More...</button>

</div>

</div>



<div class="card">

<div class="image">
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiZFgo4dZ-nJOlFLt8kPCf_vILHvidgZbgxw&usqp=CAU"></div>
<div class="title">
 <h2>
    C++ Programming</h2>
</div>
<div class="des">
 <p>Dr. Tim "Dr. T" Chamillard
</p>

 <ul>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star "></i> </li>
    <li><i class="fa fa-star "></i> </li>

    </ul>
<button>Read More...</button>
</div>
</div>



<div class="card">

<div class="image">
   <img src="https://contentstatic.techgig.com/photo/93000110/what-makes-java-still-popular-among-developers.jpg?28608">
</div>
<div class="title">
 <h2>
    Introduction to Java Programming</h2>
</div>
<div class="des">
 <p>Brandon Krakowsky
</p>
 <ul>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star "></i> </li>

    </ul>
<button>Read More...</button>
</div>
</div>



<div class="card">

<div class="image">
   <img src="https://wallpapercave.com/wp/wp8042506.jpg">
</div>
<div class="title">
 <h2>
    Python for Everybody Specialization</h2>
</div>
<div class="des">
 <p>Charles Russell Severance</p>
 <ul>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star checked"></i> </li>
    <li><i class="fa fa-star "></i> </li>
    <li><i class="fa fa-star "></i> </li>
    <li><i class="fa fa-star "></i> </li>

    </ul>
<button>Read More...</button>
</div>
</div> -->



 
</div>
</div>
</body>
</html>