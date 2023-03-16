<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List Tanggapan </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tanggapan.create') }}"> Create</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>Nama Pelapor</th>
            <th>Isi Laporan</th>
            <th>Tanggal Laporan</th>
            <th>Status Laporan</th>
            <th>Tanggal Tanggapan</th>
            <th>Nama Petugas</th>
            <th>Tanggapan</th>
            <th>Foto</th>
           

        </tr>
        @foreach ($tanggapan as $tanggapan)
     
      <?php
      $nama_petugas = DB::table('users')->where('id', $tanggapan->id_petugas )->get();
      $nama_user = DB::table('pengaduans')->where('id', $tanggapan->id_pengaduan )->get();
      $isi_laporan = DB::table('pengaduans')->where('id', $tanggapan->id_pengaduan )->get();
      $tgl_laporan = DB::table('pengaduans')->where('id', $tanggapan->id_pengaduan )->get();
      $status_laporan = DB::table('pengaduans')->where('id', $tanggapan->id_pengaduan )->get();
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
            <td>{{ $tanggapan->tgl_tanggapan }}</td>
            @foreach ( $nama_petugas as $rows)
            <td>{{ $rows->name }}</td>
            @endforeach
            <td>{{ $tanggapan->tanggapan }}</td>
            <td>
                <img src="{{ asset('uploads/'.$tanggapan->foto) }}" alt="" width="200" height="200">
            </td>
           @endforeach
           