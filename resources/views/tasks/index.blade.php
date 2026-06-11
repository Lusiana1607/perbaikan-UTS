@extends('layouts.app')

@section('content')

<a href="/task/create"
class="btn btn-primary mb-3">
Tambah Tugas
</a>

<table class="table table-bordered">
<tr>
<th>Judul</th>
<th>Deadline</th>
<th>Status</th>
<th>Aksi</th>
</tr>

@foreach($tasks as $task)

<tr>

<td>{{ $task->judul }}</td>

<td>{{ $task->tanggal_selesai }}</td>

<td>

@if($task->selesai)

<span class="badge bg-success">
    Selesai
</span>

@else

<span class="badge bg-warning text-dark">
    Belum
</span>

@endif

</td>

<td>

@if(!$task->selesai)

<a href="/task/{{$task->id}}/edit"
class="btn btn-warning">
Edit
</a>

<form action="/task/{{$task->id}}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger">
Hapus
</button>

</form>

<form action="/task/{{$task->id}}/selesai"
method="POST"
style="display:inline">

@csrf

<button class="btn btn-success">
Selesai
</button>

</form>

@endif

</td>

</tr>

@endforeach

</table>

@endsection