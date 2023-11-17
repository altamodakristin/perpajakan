@extends('layout.template')
<!-- START FORM -->
@section('konten')  
<form action="{{ route('save-master') }}" method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id rekening" class="col-sm-2 col-form-label">Target</label>
            <div class="col-sm-10">
                <select class="form-select" id="id_target" name="id_target">
                  <option value="0">-- pilih kode rek -- </option>
                  @foreach($target as $key => $item)
                  <option value="{{ $item }}">{{ $key }}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kode rekening" class="col-sm-2 col-form-label">Via Bayar</label>
            <div class="col-sm-10">
                <select class="form-select" id="via_bayar" name="via_bayar">
                  <option value="0">-- pilih via bayar -- </option>
                  @foreach($via_bayar_list as $key => $item)
                  <option value="{{ $key }}">{{ $item }}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal mulai" class="col-sm-2 col-form-label">Tanggal Setor</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal berakhir" class="col-sm-2 col-form-label">Jumlah Bayar</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="jumlah" id="jumlah">
            </div>
        </div>
        
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection