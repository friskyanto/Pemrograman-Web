<!doctype html>
<?php
require './konfigurasigb.php';
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta namce="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- AOS.JS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- my AOS.JS -->
  <link rel="aos.js" href="aos.js">

  <!-- title -->
  <title>Friskyanto Wicaksono</title>


</head>
<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm" style="background-color: #000;">
    <div class="container">
      <a class="navbar-brand" href="#home"><i class="bi bi-camera-reels-fill"></i> Portfolio</i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-door-fill"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sosial">Sosial Media</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center fs-1 shadow"> 
    <div data-aos="fade-down">
      <img src="assets/img/kibul2.jpg" class="rounded-circle img-thumbnail" alt="conan" width="200px">
    </div>
    <div data-aos="fade-up"
      data-aos-delay="300">
      <h1 class="display-4"><?php echo ucwords($data[0]['name']);?></h1>
    </div>
    <div data-aos="fade-right">
      <p class="lead">
      <?php echo ucwords($data[0]['status']);?>
      </p>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="fff" fill-opacity="1" d="M0,160L40,160C80,160,160,160,240,181.3C320,203,400,245,480,240C560,235,640,181,720,181.3C800,181,880,235,960,250.7C1040,267,1120,245,1200,229.3C1280,213,1360,203,1400,197.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center text-white mb-3">
        <div class="col">
          <div data-aos="fade-down">
            <h2>About Me</h2>
          </div>
        </div>

        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <div data-aos="fade-right">
            <?php echo ucwords($data[0]['aboutme']);?>
            </div>
          </div>
        </div>

        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <div data-aos="fade-left">
            <?php echo ucwords($data[0]['aboutme2']);?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L40,101.3C80,139,160,213,240,208C320,203,400,117,480,122.7C560,128,640,224,720,266.7C800,309,880,299,960,256C1040,213,1120,139,1200,117.3C1280,96,1360,128,1400,144L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</section>
<!-- Akhir About-->

<!-- Skills -->
<section id="skills">
  <div class="container">
      <div class="row text-center mb-3">
          <div class="col">
              <h4>Skills</h4>
              
              <br>
              <p style="text-align: left;"><?php echo ucwords($data[0]['Java']);?></p>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #0099ff;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <br>
              <p style="text-align: left;"><?php echo ucwords($data[0]['Python']);?></p>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #0099ff;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
              </div>
              <br>
              <p style="text-align: left;"><?php echo ucwords($data[0]['CSS']);?></p>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #0099ff;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
              </div>
              <br>
              
              <br>
              <p style="text-align: left;"><?php echo ucwords($data[0]['Bootstrap']);?></p>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #0099ff;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
              </div>
              
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L40,101.3C80,139,160,213,240,208C320,203,400,117,480,122.7C560,128,640,224,720,266.7C800,309,880,299,960,256C1040,213,1120,139,1200,117.3C1280,96,1360,128,1400,144L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>             
</section> 
<!-- Akhir Skils -->

<!-- Projects -->
             <section id="projects">
      
                <div class="container">
                  <div data-aos="fade-down"
                    data-aos-anchor-placement="top-center">
                   <div class="row text-center text-white mb-3">
                     <div class="col">
                       <h2>My Projects</h2>
                    </div>
                 </div>
              </div>
<div class="row justify-content-center">
<div class="col-md-4 mb-3">
<div data-aos="fade-right"
data-aos-anchor-placement="top-center">
<div class="card">
<img src="assets/img/thumbs/project1.jpg" class="card-img-top" alt="Project 1">
<div class="card-body">
<!-- <h5 class="card-title">Card title</h5> -->
<h5 class="card-title">Tinkercad</h5>
<p class="card-text">
<?php echo ucwords($data[0]['projects1']);?>
</p>
</div>
</div>
</div>
</div>
<div class="col-md-4 mb-3">
<div data-aos="fade-down"
data-aos-anchor-placement="top-center">
<div class="card">
<img src="assets/img/thumbs/project2.jpg" class="card-img-top" alt="Project 2">
<div class="card-body">
<!-- <h5 class="card-title">Tribute Page-Rozaq</h5> -->
<h5 class="card-title">Blog Pribadi</h5>
<p class="card-text">
<?php echo ucwords($data[0]['projects2']);?>
</p>
</div>
</div>
</div>
</div>
<div class="col-md-4 mb-3">
<div data-aos="fade-left"
data-aos-anchor-placement="top-center">
<div class="card">
<img src="assets/img/thumbs/project3.jpg" class="card-img-top" alt="Project 3">
<div class="card-body">
<!-- <h5 class="card-title">Card title</h5> -->
<h5 class="card-title">Web Portofolio</h5>
<p class="card-text">
<?php echo ucwords($data[0]['projects3']);?>
</p>
  </div>
    </div>
      </div>
        </div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L60,240C120,256,240,288,360,277.3C480,267,600,213,720,197.3C840,181,960,203,1080,229.3C1200,256,1320,288,1380,304L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</section>
<!-- Akhir Project -->


  <!-- Contact -->
  <section id="sosial">
<div class="container2">
  <div class="row text-center mb-3">
  <div data-aos="fade-down">
    <div class="col">
      <h2 class="p1 fw-bold fs-1"><ins>My Contact</ins></h2><br>
    </div>
  </div>
  <div class="row justify-content-around fs-5 text-center">
    <div class="col-md-4">
      <p class="p1 fs-3">Facebook:</p>
      <?php echo ucwords($data[0]['Facebook']);?>
      <p><a href="https://www.facebook.com/friskyanto.friskyanto.3"> <i class=" fs-1 bi bi-facebook"></i></a></p>
    </div>
    <div class="col-md-4">
      <p class="p1 fs-3">Instagram:</p>
      <?php echo ucwords($data[0]['IG']);?>
      <p><a href="https://www.instagram.com/friskyanto47/"><i class="fs-1 bi bi-instagram"></i></a></p>
    </div>
    <div class="col-md-4">
      <p class="p1 fs-3">Email:</p>
      <?php echo ucwords($data[0]['email']);?>
      <p><a href="https://Friskyantowck@gmail.com"><i class="fs-1 bi bi-envelope"></i></a></p>
    </div>
  </div>
</div>
</section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000" fill-opacity="1" d="M0,64L40,85.3C80,107,160,149,240,149.3C320,149,400,107,480,106.7C560,107,640,149,720,138.7C800,128,880,64,960,42.7C1040,21,1120,43,1200,64C1280,85,1360,107,1400,117.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  <!-- Akhir Contact -->
 

<!-- footter -->
<footer class="text-white text-center pb-3" style="background-color: black;">
<p>
Created by <i class="bi bi-instagram"></i> <a href="https://www.instagram.com/friskyanto47/" style="text-decoration:none" target="_blank" class="text-white fw-bold">Friskyanto Wicaksono</a>
</p>
</footer>

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   <!-- Js.Gform -->
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">var submitted=false;</script>
    <script type="text/javascript">
    $('#gform').on('submit', function(e) {
      $('#gform *').fadeOut(2000);
      $('#gform').prepend('Your submission has been processed...');
     });
   </script>



<!-- AOS.JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init({
duration: 1200,


mirror: false, // whether elements should animate out while scrolling past them
disable: '',

// aos tambahan
})
</script>

</body>
</html>
