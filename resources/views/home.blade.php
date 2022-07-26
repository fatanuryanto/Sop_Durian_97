<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sop Durian 97</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('include.style')

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  @include('include.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Selamat Datang Di Sop Durian 97<span>.</span></h1>
          <h2>Rasakan Kelezatannya</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="/dine_in">
              <img src="assets\img\dinein.png" alt="dine-in" style="width:100px;height:100px;">  
              <h3>Dine-In</h3>
            </a>
          </div>
        </div>

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="/take_away">
              <img src="assets\img\takeaway.png" alt="dine-in" style="width:100px;height:100px;">  
              <h3>Take-Away</h3>
            </a>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box"><a href="https://gofood.link/u/D4z94">
          <img src="assets\img\gofood.png" alt="gofood" style="width:100px;height:100px;">  
            <h3>Go-Food</h3>
            </a></div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box"><a href="https://food.grab.com/id/id/restaurant/sop-durian-97-ruko-permata-cibubur-delivery/6-C2BGNTLKRLDJCJ">
          <img src="assets\img\grabfood.png" alt="grabfood" style="width:100px;height:100px;">  
            <h3>GrabFood</h3>
          </a></div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
  <!-- ======= Menu Section ======= -->
  <section id="menu" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu yang Tersedia</h2>
        <p>Daftar Menu</p>
      </div>



      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-main_dish">Makanan</li>
            <li data-filter=".filter-snack">Cemilan</li>
            <li data-filter=".filter-drink">Minuman</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div id= "food" class="portfolio-item filter-main_dish"> 
          <div class="container">
            <h2><u>Makanan</u></h2>
            <table class="table table-hover mb-5">
              <thead class="thead-dark align-middle">
                <tr>
                  <th rowspan="2" class="align-middle text-center">No.</th>
                  <th rowspan="2" class="align-middle text-center">Nama</th>
                  <th rowspan="2" class="align-middle text-center">Harga</th>
                  <th rowspan="2" class="align-middle text-center">Ketersediaan</th>
                </tr>
              </thead>

              <tbody>
                  @foreach ($main_dishes as $main_dish)        
                  <tr>
                    <td class="align-middle text-center" ></td>
                    <td class="align-middle text-center" >{{$main_dish->name}}</td>
                    <td class="align-middle text-center">{{$main_dish->price}}</td>
                    <td class="align-middle text-center">{{$main_dish->stock}}</td>
                  @endforeach
              </tbody>

            </table>
          </div>
        </div>

        <div id="snack" class="portfolio-item filter-snack"> 
          <div class="container">
            <h2><u>Cemilan</u></h2>
            <table class="table table-hover mb-5">
              <thead class="thead-dark align-middle">
                <tr>
                  <th rowspan="2" class="align-middle text-center">No.</th>
                  <th rowspan="2" class="align-middle text-center">Nama</th>
                  <th rowspan="2" class="align-middle text-center">Harga</th>
                  <th rowspan="2" class="align-middle text-center">Ketersediaan</th>
                </tr>
              </thead>

              <tbody>
                  @foreach ($snacks as $snack)        
                  <tr>
                    <td class="align-middle text-center" ></td>
                    <td class="align-middle text-center" >{{$snack->name}}</td>
                    <td class="align-middle text-center">{{$snack->price}}</td>
                    <td class="align-middle text-center">{{$snack->stock}}</td>
                  </tr>
                  @endforeach
              </tbody>

            </table>
          </div>
        </div>

        <div id="drink" class="portfolio-item filter-drink"> 
          <div class="container">
            <h2><u>Minuman</u></h2>
            <table class="table table-hover mb-5">
              <thead class="thead-dark align-middle">
                <tr>
                  <th rowspan="2" class="align-middle text-center">No.</th>
                  <th rowspan="2" class="align-middle text-center">Nama</th>
                  <th rowspan="2" class="align-middle text-center">Harga</th>
                  <th rowspan="2" class="align-middle text-center">Ketersediaan</th>
                </tr>
              </thead>

              <tbody>
                  @foreach ($drinks as $drink)        
                  <tr>
                    <td class="align-middle text-center" ></td>
                    <td class="align-middle text-center" >{{$drink->name}}</td>
                    <td class="align-middle text-center">{{$drink->price}}</td>
                    <td class="align-middle text-center">{{$drink->stock}}</td>
                  </tr>
                  @endforeach
              </tbody>

            </table>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Menu Section -->
</main>
<!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('include.script')

</body>

</html>