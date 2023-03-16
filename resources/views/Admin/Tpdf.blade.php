<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Bukti Tanggapan</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table td, table th {
        border: 1px solid black;
        padding: 5px;
    }

    </style>
</head>
<body>
    
    <table width="100%">
<tr>

<h2  align="center">Laporan Hasil Tanggapan Masyarakat </h2>
<h3 align="center">Aplikasi Pengaduan Masyarakat</h3>
<h4 align="center">Desa Banjarwangi, Kecamatan Ciawi, Kabupaten Bogor</h4>
</tr>
<br>
</br>
</table>
       
   
    <table class="table align-items-center mt-4 mb-0">
        <thead>
            <tr>
            <th>Nama Pelapor</th>
            <th>Isi Laporan</th>
            <th>Tanggal Laporan</th>
            <th>Status Laporan</th>
            <th>Tanggal Tanggapan</th>
            <th>Nama Petugas</th>
            <th>Tanggapan</th>
       
               
               
            </tr>
        </thead>
        <tbody>
            <?php
                $no= 1;
            ?>
            @foreach ($history as $item)
            <?php
      $nama_petugas = DB::table('users')->where('id', $item->id_petugas )->get();
      $nama_user = DB::table('pengaduans')->where('id', $item->id_pengaduan )->get();
      $isi_laporan = DB::table('pengaduans')->where('id', $item->id_pengaduan )->get();
      $tgl_laporan = DB::table('pengaduans')->where('id', $item->id_pengaduan )->get();
      $status_laporan = DB::table('pengaduans')->where('id', $item->id_pengaduan )->get();
      ?>
            <tr>
            @foreach ( $nama_user as $rows)
            <td>{{ $rows->nama_pelapor }}</td>
            @endforeach
            @foreach ( $isi_laporan as $rows)
            <td>{{ $rows->isi_laporan }}</td>
            @endforeach
            @foreach ( $tgl_laporan as $rows)
            <td>{{ $rows->tgl_pengaduan }}</td>
            @endforeach
            @foreach ( $status_laporan as $rows)
            <td>{{ $rows->status }}</td>
            @endforeach
               
                <td>{{ $item->tgl_tanggapan }}</td>
                @foreach ( $nama_petugas as $rows)
            <td>{{ $rows->name }}</td>
            @endforeach
                <td>{{ $item->tanggapan }}</td>
                
                
                
            @endforeach
        </tbody>
    </table>
</body>
</html>