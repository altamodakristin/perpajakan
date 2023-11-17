@extends('layout.template')
<!-- START FORM -->
@section('konten')  
<form action='{{ url('master') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id rekening" class="col-sm-2 col-form-label">Kode Rekening</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kode rekening' id="kode rekening">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kode rekening" class="col-sm-2 col-form-label">Target</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='target' id="target">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal mulai' id="tanggal mulai">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal berakhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal berakhir' id="tanggal berakhir">
            </div>
        </div>
        
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection