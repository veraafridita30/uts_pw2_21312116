@extends('layout.master')

	@section('judul')
    Edit Film
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
    <form method="post" action="/film/{{ $film->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Judul</label>
            <input type="string" name="judul" value="{{ $film->judul }}" class="form-control">
</div>
@error('judul')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Ringkasan</label>
            <textarea class="form-control" name="ringkasan">{{ $film->ringkasan }}</textarea>
            
</div>
@error('ingkasan')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Tahun</label>
            <input type="number" name="tahun" value="{{ $film->tahun }}" class="form-control">
</div>
@error('tahun')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Poster</label>
            <input type="string" name="poster" value="{{ $film->poster }}" class="form-control">
</div>
@error('poster')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
            <label>Genre</label>
            <input type="number" name="genre_id" value="{{ $film->genre_id }}" class="form-control">
</div>
@error('genre')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection