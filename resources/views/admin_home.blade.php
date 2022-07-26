<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selamat Datang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('include.style')

</head>

<body>
  <!-- ======= Header ======= -->
  @include('include.admin_header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Selamat Datang <span>.</span></h1>
          <h2>{{Auth::user()->name;}}</h2>
          <h2>Jangan lupa Bismillah</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a href="/admin/open">
              <img src="assets\img\open-store.png" alt="Open-store" style="width:100px;height:100px;">  
              <h3>Buka Toko</h3>
            </a>
          </div>
        </div>

        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <a style="color:#ffc451;"data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <img src="assets\img\report.png" alt="Reports" style="width:100px;height:100px;">  
              <h3>Laporan Penjualan</h3>
            </a>
          </div>
        </div>

      </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
            <form action="/admin/reports" method="post">
            {{ csrf_field() }}
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Laporan Penjualan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                <h2> Silahkan Pilih jarak waktu Laporan Penjualan</h2>
                Tanggal Awal  <input type="date" name="start_date">
                Tanggal Akhir <input type="date" name="end_date">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan Pesanan">
              </div>
            </form>
          </div>
      </div>
  </div>

  </section>
  <!-- End Hero -->

  <main id="main"><!-- ======= Menu Section ======= -->
  <section id="menu" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu yang Tersedia</h2>
        <p>Daftar Menu</p>
        
        <a href='/menu/add' class="add-btn scrollto">Tambah menu</a>
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
                  <th rowspan="2" class="align-middle text-center">Ketersediaan</th>
                  <th rowspan="2" class="align-middle text-center">Aksi</th>
                </tr>
              </thead>

              <tbody>
                  @foreach ($main_dishes as $main_dish)        
                  <tr>
                    <td class="align-middle text-center" ></td>
                    <td class="align-middle text-center" >{{$main_dish->name}}</td>
                    <td class="align-middle text-center">{{$main_dish->price}}</td>
                    <td class="align-middle text-center">{{$main_dish->stock}}</td>
                    <td class="align-middle text-center">
                      <a class="edit-btn" href="/menu/edit/{{$main_dish->id}}">Ubah</a>
                      <a class="delete-btn" href="/menu/delete/{{$main_dish->id}}">Hapus</a></td>
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
                  <th rowspan="2" class="align-middle text-center">Ketersediaan</th>
                  <th rowspan="2" class="align-middle text-center">Aksi</th>
                </tr>
              </thead>

              <tbody>
                  @foreach ($snacks as $snack)        
                  <tr>
                    <td class="align-middle text-center" ></td>
                    <td class="align-middle text-center" >{{$snack->name}}</td>
                    <td class="align-middle text-center">{{$snack->price}}</td>
                    <td class="align-middle text-center">{{$snack->stock}}</td>
                    <td class="align-middle text-center">
                      <a class="edit-btn" href="/menu/edit/{{$snack->id}}">Ubah</a>
                      <a class="delete-btn" href="/menu/delete/{{$snack->id}}">Hapus</a></td>
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
                  <th rowspan="2" class="align-middle text-center">Ketersediaan</th>
                  <th rowspan="2" class="align-middle text-center">Aksi</th>
                </tr>
              </thead>

              <tbody>
                  @foreach ($drinks as $drink)        
                  <tr>
                    <td class="align-middle text-center" ></td>
                    <td class="align-middle text-center" >{{$drink->name}}</td>
                    <td class="align-middle text-center">{{$drink->price}}</td>
                    <td class="align-middle text-center">{{$drink->stock}}</td>
                    <td class="align-middle text-center">
                      <a class="edit-btn" href="/menu/edit/{{$drink->id}}">Ubah</a>
                      <a class="delete-btn" href="/menu/delete/{{$drink->id}}">Hapus</a></td>
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