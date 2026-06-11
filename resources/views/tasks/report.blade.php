@extends('layouts.app')

@section('content')

<form>

<input type="date"
name="mulai">

<input type="date"
name="akhir">

<button class="btn btn-primary">
Filter
</button>

</form>

<hr>

<table class="table">

<tr>
<th>Judul</th>
<th>Tanggal Selesai</th>
</tr>

@foreach($tasks as $task)

<tr>

<td>{{$task->judul}}</td>

<td>{{$task->selesai_pada}}</td>

</tr>

@endforeach

</table>

@endsection