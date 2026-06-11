@extends('layouts.app')

@section('content')

<form method="POST"
action="/task/{{$task->id}}">

@csrf
@method('PUT')

<div class="mb-3">
<input
type="text"
name="judul"
value="{{$task->judul}}"
class="form-control">
</div>

<div class="mb-3">
<textarea
name="deskripsi"
class="form-control">{{$task->deskripsi}}</textarea>
</div>

<div class="mb-3">
<input
type="date"
name="tanggal_selesai"
value="{{$task->tanggal_selesai}}"
class="form-control">
</div>

<button class="btn btn-success">
Update
</button>

</form>

@endsection