@extends('layouts.app')

@section('content')

<div class="row">

<div class="col-md-4">

<div class="card">
<div class="card-body">

<h3>{{$total}}</h3>
Total Tugas

</div>
</div>

</div>

<div class="col-md-4">

<div class="card">
<div class="card-body">

<h3>{{$selesai}}</h3>
Selesai

</div>
</div>

</div>

<div class="col-md-4">

<div class="card">
<div class="card-body">

<h3>{{$belum}}</h3>
Belum Selesai

</div>
</div>

</div>

</div>

@endsection