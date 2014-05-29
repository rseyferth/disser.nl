@extends('layout')


@section('content')

<section class="diss">



<q>{{ $diss }}</q>


</section>


<hr>

<section class="diss-a-friend">

<h1>Dis een ander</h1>


{{ Form::open(['route' => 'diss-a-friend']) }}



<div class="field">

<input type="text" name="from_name" placeholder="Je naam">
<input type="email" name="from_email" placeholder="Je e-mailadres">

<input type="text" name="to_email" placeholder="Ander e-mailadres">

<button type="submit">Dis!</button>

</div>


{{ Form::close() }}

@if (Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

</section>

@stop

