<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ubah Menu - Sop Durian 97</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('include.style')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('include.admin_header')

<!-- ======= Main Section ======= -->
<main id="main">

<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Ubah Menu</h2>
            <ol>
                <li><a href="/admin">Home</a></li>
                <li>Menu</li>
            </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page contact">
      <div class="container">   
        <!-- ======= Menu Section ======= -->
        <form action="/menu/update/{{$menu->id}}"  method="post">
        {{ csrf_field() }}
            <div class="col-lg-8 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <h3>Nama</h3> <input type="text" class="form-control" name="name" value="{{$menu->name}}" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <h3>Harga</h3> <input type="text"   name="price" value="{{$menu->price}}" required><br>
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
                            Tersedia <input type='radio' name="stock" value="available"><br>
                            Tidak Tersedia<input type='radio' name="stock" value="unavailable">
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div>
                <button class="edit-btn" type="submit">Ubah Menu</button>
                <a href="/admin">Kembali</a>
            </div>
            
        </form>
      </div>
    </section>


</main><!-- End Main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')

<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
  @include('include.script')

</body>
</html>