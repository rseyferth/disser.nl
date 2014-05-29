@extends('layout')


@section('content')

<section class="diss">



<q>{{ htmlentities($diss) }}</q>


</section>


<hr>

<section class="diss-a-friend">

<h1>Dis een ander</h1>


{{ Form::open(['route' => 'diss-a-friend']) }}



<div class="field">

<input type="text" name="from_name" placeholder="Je naam" value="{{ Session::get('from_name', '') }}">
<input type="email" name="from_email" placeholder="Je e-mailadres" value="{{ Session::get('from_email', '') }}">

<input type="text" name="to_email" placeholder="Ander e-mailadres">

<button type="submit">Dis!</button>

</div>


{{ Form::close() }}

@if (Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

</section>

<hr>

<section class="diss-facebook">
<h1>Social dissing</h1>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{{ App::environment() == "local" ? "542167652560130" : "542166819226880" }}',
      xfbml      : true,
      version    : 'v2.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  function disOnFacebook() {

  	FB.ui({
  		method: 'send',
  		link: '{{ URL::current() }}'

  	});


  }

</script>

<br>
<p><a href="javascript:disOnFacebook();">Dissen op Facebook.</a></p>

<br>
<div class="fb-like" data-href="http://disser.nl" data-colorscheme="dark" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>


<div id="fb-root"></div>
@stop

