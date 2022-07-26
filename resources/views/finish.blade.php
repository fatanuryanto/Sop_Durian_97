<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Konfirmasi Pesanan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  @include('include.style')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('include.header');

<!-- ======= Main Section ======= -->
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
      <div class="container">

          <div class="d-flex justify-content-between align-items-center">
          <h2>Konfirmasi Pemesanan</h2>
          <ol>
              <li><a href="/">Home</a></li>
              <li>Pemesanan</li>
              <li>Jumlah Pesanan</li>
              <li>Total Pesanan</li>
          </ol>
          </div>

      </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Menu Section ======= -->
  <section class="inner-page portfolio">
    <div class="container" data-aos="fade-up">
      <form action="/dine_in/save" method="POST" class="portfolio">
      {{ csrf_field() }}
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="portfolio-item filter-order"> 
            <div class="container">
              <h2><u>Pesanan Anda</u></h2>
              <table class="table table-hover mb-5">
              
                <thead class="thead-dark align-middle">
                  <tr>
                    <th rowspan="2" class="align-middle text-center">No.</th>
                    <th rowspan="2" class="align-middle text-center">Nama</th>
                    <th rowspan="2" class="align-middle text-center">Harga Satuan</th>
                    <th rowspan="2" class="align-middle text-center">Jumlah</th>
                    <th rowspan="2" class="align-middle text-center">Harga Total</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($customer_order as $order )
                  <tr>
                    <td class="align-middle text-center"></td>
                    <td class="align-middle text-center">{{$order->menu->name}}</td>
                    <td class="align-middle text-center">{{$order->menu->price}}</td>
                    <td class="align-middle text-center">{{$order->quantity}}</td>
                    <td class="align-middle text-center">{{$order->menu->price*$order->quantity}}</td>
                  </tr>
                @endforeach
                </tbody>     
              </table>
              <h2> Total Pesanan anda adalah {{$total}}
            </div>
          </div>
        </div>
        <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan Pesanan">
      </form>  
    </div>
  </section>
</main><!-- End Main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')

<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
  @include('include.script')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>