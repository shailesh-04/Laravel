@extends('PageRouting01.index');
@section('page')
<section class="About" id="About">
  <div class="Image">
    <img src="{{asset('asset/main.png')}}" alt="Portfolio Image "/>
  </div>
  <div class="Content">
    <h1 class="head">About Me</h1>
    <h3>Developer<span> & Disigner</span></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae nam, illum provident autem eaque ad doloribus, perspiciatis earum obcaecati nisi, nostrum! Tempora, vel. Voluptatibus incidunt ratione velit rem, quas. Neque!</p>
    <a href="#" class="btn">Les't Talk</a>
  </div>
</section>
@endsection
