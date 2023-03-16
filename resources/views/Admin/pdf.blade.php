<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Bukti Pengaduan</title>
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
<td width="25" align="center"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Lambang_Kabupaten_Bogor.svg" width="60%"></td>

<h2  align="center">Laporan Hasil Pengaduan Masyarakat</h2>
<h4 align="center">Desa Banjarwangi, Kecamatan Ciawi, Kabupaten Bogor</h4>
<td width="25" align="center"><img src="Logo DN.jpg" width="100%"></td>
</tr>
<br>
</br>
</table>
        <th></th>
   
    <table class="table align-items-center mt-4 mb-0">
        <thead>
            <tr>
                <th>No</th>
                <th>Tgl Pengaduan</th>
                <th>NIK</th>
                <th>Nama Pelapor</th>
                <th>Status</th>
                <th>Isi Laporan</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
                $no= 1;
            ?>
            @foreach ($history as $item)
            <?php
                $data_user = DB::table('users')->where('id', $item->user_id )->get();
                $data_petugas = DB::table('tanggapans')->where('id_pengaduan', $item->id )->get();
            ?>
            <tr>
                <td><?= $no++ ?></td>
               
                <td>{{ $item->tgl_pengaduan }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->nama_pelapor }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->isi_laporan }}</td>
                
                
            @endforeach
        </tbody>
    </table>
</body>
</html>