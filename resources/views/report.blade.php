<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laporan Penjualan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

</head>

<body>
    Laporan Penjualan
    <table border="1">
        <thead class="thead-dark align-middle">
            <tr>
                <th rowspan="2" class="align-middle text-center">Tanggal</th>
                <th rowspan="2" class="align-middle text-center">Nama</th>
                <th rowspan="2" class="align-middle text-center">Harga Satuan</th>
                <th rowspan="2" class="align-middle text-center">Jumlah</th>
                <th rowspan="2" class="align-middle text-center">Total Penjualan</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($reports as $report )
            <tr>
                <td class="align-middle text-center">{{$report->date}}</td>
                <td class="align-middle text-center">{{$report->name}}</td>
                <td class="align-middle text-center">{{$report->price}}</td>
                <td class="align-middle text-center">{{$report->quantity}}</td>>
                <td class="align-middle text-center">{{$report->quantity*$report->price}}</td>>
            </tr>
            
        @endforeach
        </tbody>
    </table>
    Total Pendapatan pada tanggal {{$reports->first()->date}} sampai {{$reports->last()->date}} adalah {{$reports->first()->total_income}}
</body>
</html>