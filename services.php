<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Grocerry Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
  <?php
  include "header.php";
  ?>
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- First Slide (Active) -->
      <div class="carousel-item active">
        <img src="grocerry1.jpg" class="d-block w-100" style="height: 600px;" alt="Slide 1">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h1 style="color: black;">WEL-COME TO OUR</h1> -->
          <!-- <h1 style="color: black;">MORE SUPER MARKET</h1> -->
          <!-- <p style="color: black;">Hurry! Get the Best products</p> -->
        </div>
      </div>

    </div>
  </div>
  <!-- first section -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2 style="font-size: 70px; text-align:center;">Our Services</h2>
          <br>
          <span style="font-size: 40px; text-align:center;">We offer a wide range of grocery products to meet all your needs</span>

          <br><br>
          <p style="font-size: 40px; text-align:center;">At our grocery store, we are committed to providing you with the best shopping experience. Our services include</p> <br><br>
        <h2 style="text-align: center; font-size: 70px;"><span style="background-color: yellow; font-weight: bold; ">Product Services</span></h2>

          <br><br>

          <!-- <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3 style="text-align: center;">Fresh Produce</h3>
                                    <img style="height: 400px; width: 400px;" src="fresh_produce.jpg" alt="">
                                    <p>We offer a wide selection of fresh fruits and vegetables sourced from local farms.</p>
                                </div>
                                <div class="col-md-4">
                                    <h3 style="text-align: center;">Organic Options</h3>
                                    <img style="height: 400px; width: 400px;" src="organic_option.jpg" alt="">
                                    <p>Explore our range of organic products, including grains, dairy, and snacks.</p>
                                </div>
                                <div class="col-md-4">
                                    <h3 style="text-align: center;">Household Essentials</h3>
                                    <img style="height: 400px; width: 400px;" style="height: 400px; width: 400px;" src="household.jpg" alt="">
                                    <p>Find everything you need for your home, from cleaning supplies to personal care items.</p>
                                </div>
                            </div>

                        </div> -->

          <!-- Product Services Section -->
          <!-- <h2 style="font-size: 80px; text-align:center;">Product Services</h2> -->
          <br><br>

          <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

              <!-- Slide 1 -->
              <div class="carousel-item active">
                <h3 style="font-size: 70px;">Fresh Produce</h3>
                <img  src="fresh_produce.jpg" class="d-block mx-auto img-fluid" style=" max-height: 450px; width: 900px;" alt="Fresh Produce">
                <br>
                <p style="font-size: 30px;">We offer a wide selection of fresh fruits and vegetables sourced from local farms.</p>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item">
                <h3>Organic Options</h3>
                <img src="organic_option.jpg" class="d-block mx-auto img-fluid" style="max-height: 400px; width: 400px;" alt="Organic Options">
                <p>Explore our range of organic products, including grains, dairy, and snacks.</p>
              </div>

              <!-- Slide 3 -->
              <div class="carousel-item">
                <h3>Household Essentials</h3>
                <img src="household.jpg" class="d-block mx-auto img-fluid" style="max-height: 400px;" alt="Household Essentials">
                <p>Find everything you need for your home, from cleaning supplies to personal care items.</p>
              </div>

            </div>

            <!-- Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


        </div>
      </div>
    </div>
  </div>
  <?php
  include "footer.php";
    ?>