@extends('layout.master')

	@section('judul')
    Tambah Film
    @endsection

    
@push('script')
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(function(){
        $('#example1').DataTable();
    });
</script>
@endpush

@push('style')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush

	@section('content')
    <form method="post" action="/film">
        @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="string" name="judul" value="" class="form-control">
</div>
@error('judul')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Ringkasan</label>
            <textarea class="form-control" name="ringkasan"></textarea>
            
</div>
@error('ringkasan')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Tahun</label>
            <input type="number" name="tahun" value="" class="form-control">
</div>
@error('tahun')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Poster</label>
            <input type="string" name="poster" value="" class="form-control">
</div>
@error('poster')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Genre</label>
            <select class = "form-control" name="genre">
                <option value="">Pilih Genre</option>
                @forelse ($genre as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                @empty
                @endforelse
</select>
</div>

@error('genre')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection