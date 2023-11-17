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
                  <a href='' class="btn btn-primary">+ Tambah Data</a>
                  <a href="{{ route('print-master') }}" class="btn btn-primary">Cetak Report</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Kode Rekening</th>
                            <th class="col-md-4">Target</th>
                            <th class="col-md-2">Tanggal Mulai</th>
                            <th class="col-md-2">Tanggal Berakhir</th>
                            <th class="col-md-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>41101.01</td>
                            <td>60.500.000</td>
                            <td>01-01-2022</td>
                            <td>01-31-2022</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>     
          </div>
          <!-- AKHIR DATA -->
        @endsection