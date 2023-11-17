

@extends('layout.template')
        <!-- START DATA -->
        @section('konten')
            
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ url('master/create') }}" class="btn btn-primary">+ Tambah Data</a>
                  <a href="{{ route('print-master') }}" class="btn btn-primary">Cetak Report</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Id Target</th>
                            <th class="col-md-4">Via Bayar</th>
                            <th class="col-md-2">Tanggal</th>
                            <th class="col-md-2">Jumlah</th>
                            <th class="col-md-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php $no = 1; ?>
                    @foreach($master as $row)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $row->id_target }}</td>
                            <?php if($row->via_bayar == 1) {  ?>
                                <td>Bendahara</td>
                            <?php } ?>
                            <?php if($row->via_bayar == 2) { ?>
                                <td>Bank</td>
                            <?php } ?>
                            <td>{{ $row->tanggal }}</td>
                            <td>{{ $row->jumlah }}</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>     
          </div>
          <!-- AKHIR DATA -->
        @endsection