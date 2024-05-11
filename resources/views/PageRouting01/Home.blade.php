@extends('PageRouting01.index');
@section('page')
<section class="Home" id="Home">
  <div class="H-Content">
  <h5>Hellow, My Name Is</h5>
    <h1 class="head">Shailesh<span>.04m</span></h1>
    <h4>I'am a Web Developer</h4>
    <div class="input-box">
      <input type="email" name="Email" placeholder="Enter Your Email..."/>
      <input type="submit" value="Submit" class="btn"/>
    </div>
  </div>
  <div class="H-Image">
    <img src="{{asset('image/PageRouting01/IMG_20240308_213814.png')}}" alt="Portfolio Image "/>
  </div>
</section>
@endsection