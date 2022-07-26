<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Menu - Sop Durian 97</title>
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
  @include('include.admin_header');

<!-- ======= Main Section ======= -->
<main id="main">

<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Tambah Menu</h2>
            <ol>
                <li><a href="/admin">Home</a></li>
                <li>Menu</li>
            </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Add Menu Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Sop Durian 97</h2>
            <p>Menu Baru</p>
            </div>


            <form action="/menu/save" method="post">
                {{ csrf_field() }}
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <h3>Nama</h3> <input type="text" class="form-control" name="name" placeholder="Nama Menu" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <h3>Harga</h3> <input type="text" class="form-control"  name="price" placeholder="Harga Menu" required><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <h3>Jenis</h3>
                            <div class="col-md-6 form-group">
                            <input type='radio' name="category" value="main_dish"> Makanan Utama<br> 
                            <input type='radio' name="category" value="snack"> Cemilan <br>
                            <input type='radio' name="category" value="drink"> Minuman
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <h3>Ketersediaan</h3>
                            <div class="col-md-6 form-group">
                                <input type='radio' name="stock" value="available"> Tersedia <br> 
                                <input type='radio' name="stock" value="unavailable"> Tidak Tersedia
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div >
                    <button class="add-btn" type="submit">Simpan Menu</button>
                    <a href="/admin">Kembali</a>
                </div>
            </form>

        </div>
    </section><!-- Add Menu Section -->

</main><!-- End Main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')

<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
  @include('include.script')

</body>
</html>