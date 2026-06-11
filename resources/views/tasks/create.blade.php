@extends('layouts.app')

@section('content')

<form method="POST" action="/task/store">

@csrf

<div class="mb-3">
<label>Judul</label>
<input type="text"
name="judul"
class="form-control">
</div>

<div class="mb-3">
<label>Deskripsi</label>
<textarea
name="deskripsi"
class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Tanggal Deadline</label>
<input type="date"
name="tanggal_selesai"
class="form-control">
</div>

<button class="btn btn-primary">
Simpan
</button>

</form>

@endsection