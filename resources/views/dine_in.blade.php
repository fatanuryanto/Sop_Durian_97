<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dine-In</title>
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
  @include('include.header');
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- ======= Main Section ======= -->
<main id="main">

<!-- Button trigger modal -->





<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pemesanan Dine-In</h2>
                <ol>
                <li><a href="/">Home</a></li>
                    <li>Pemesanan Dine-in</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
       <!-- ======= Menu Section ======= -->
        <section>
          <form action="/order" method="POST" class="portfolio">
            {{ csrf_field() }}

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-8 mt-5 mt-lg-0">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        Tanggal <input type='text' class="form-control" name="date" value="{{$date}}" readonly>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        Nama    <input type='text' class="form-control" name="name" requred>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        Lantai  <input type="number" class="form-control" name="floor" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        Meja    <input type="number" class="form-control" name="table" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan Pesanan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="section-title">    
                    <h2>Selamat Memilih</h2>
                    <p>Daftar Menu</p>
                    <br>
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
                
                    <div class="portfolio-item filter-main_dish"> 
                        <div class="container">
                            <h2><u>Makanan</u></h2>
                            <table class="table table-hover mb-5">
                                <thead class="thead-dark align-middle">
                                    <tr>
                                    <th rowspan="2" class="align-middle text-center">No.</th>
                                    <th rowspan="2" class="align-middle text-center">Nama</th>
                                    <th rowspan="2" class="align-middle text-center">Harga</th>
                                    <th rowspan="2" class="align-middle text-center">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($main_dishes as $main_dish)        
                                    <tr>
                                        <td class="align-middle text-center" ></td>
                                        <td class="align-middle text-center" >{{$main_dish->name}}</td>
                                        <td class="align-middle text-center">{{$main_dish->price}}</td>
                                        <td class="align-middle text-center">
                                            <input type="checkbox" name="menu_id[]" value="{{$main_dish->id}}"> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="portfolio-item filter-snack"> 
                        <div class="container">
                            <h2><u>Cemilan</u></h2>
                            <table class="table table-hover mb-5">
                                <thead class="thead-dark align-middle">
                                    <tr>
                                    <th rowspan="2" class="align-middle text-center">No.</th>
                                    <th rowspan="2" class="align-middle text-center">Nama</th>
                                    <th rowspan="2" class="align-middle text-center">Harga</th>
                                    <th rowspan="2" class="align-middle text-center">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($snacks as $snack)        
                                    <tr>
                                        <td class="align-middle text-center" ></td>
                                        <td class="align-middle text-center" >{{$snack->name}}</td>
                                        <td class="align-middle text-center">{{$snack->price}}</td>
                                        <td class="align-middle text-center">
                                            <input type="checkbox" name="menu_id[]" value="{{$snack->id}}"> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="portfolio-item filter-drink"> 
                        <div class="container">
                            <h2><u>Minuman</u></h2>
                            <table class="table table-hover mb-5">
                                <thead class="thead-dark align-middle">
                                    <tr>
                                    <th rowspan="2" class="align-middle text-center">No.</th>
                                    <th rowspan="2" class="align-middle text-center">Nama</th>
                                    <th rowspan="2" class="align-middle text-center">Harga</th>
                                    <th rowspan="2" class="align-middle text-center">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($drinks as $drink)        
                                    <tr>
                                        <td class="align-middle text-center" ></td>
                                        <td class="align-middle text-center" >{{$drink->name}}</td>
                                        <td class="align-middle text-center">{{$drink->price}}</td>
                                        <td class="align-middle text-center">
                                            <input type="checkbox" name="menu_id[]" value="{{$drink->id}}">   
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Simpan Pesanan
                </button>
          </form> 

            </div>
        </section><!-- End Menu Section -->

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