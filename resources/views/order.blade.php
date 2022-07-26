<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Pesanan</title>
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
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- ======= Main Section ======= -->
<main id="main">

<!-- Button trigger modal -->





<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
                <h2>Daftar Pesanan</h2>
                <ol>
                    <li><a href="/admin">Home</a></li>
                    <li>Daftar Pesanan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <!-- ======= Menu Section ======= -->
        <div class="portfolio"> 
          <div class="container" data-aos="fade-up">
            <table class="table table-hover mb-5">
              <thead class="thead-dark align-middle">
                <tr>
                  <th rowspan="2" class="align-middle text-center">No.</th>
                  <th rowspan="2" class="align-middle text-center">Nama</th>
                  <th rowspan="2" class="align-middle text-center">Lantai</th>
                  <th rowspan="2" class="align-middle text-center">Meja</th>
                  <th rowspan="2" class="align-middle text-center">Nama</th>
                  <th rowspan="2" class="align-middle text-center">Jumlah</th>
                  <th rowspan="2" class="align-middle text-center">Status</th>
                </tr>
              </thead>

              <tbody>
                  @foreach ($orders as $order)        
                  <tr>
                    <td class="align-middle text-center" ></td>
                    <td class="align-middle text-center" >{{$order->order->name}}</td>
                    <td class="align-middle text-center" >{{$order->order->floor}}</td>
                    <td class="align-middle text-center" >{{$order->order->table}}</td>
                    <td class="align-middle text-center">{{$order->menu->name}}</td>
                    <td class="align-middle text-center">{{$order->quantity}}</td>    
                    <td class="align-middle text-center">
                        {{$order->status}}
                        <a href="/admin/deliver/{{$order->id}}" class="edit-btn">Antar</a>
                    </td>           
                  @endforeach
              </tbody>

            </table>
          </div>
        </div>
        
        <!-- End Menu Section -->
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