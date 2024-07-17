<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite(['resources/css/app.css'])
</head>
<body>
    <header class="Header">
      <a class="Logo">Portfo<span>lio</span></a>
      <nav>
        <a href="{{url('/')}}" class="active" >Home</a>
        <a href="{{url('/About')}}" >About Me</a>
        <a href="{{route('curd.index')}}" >Curd Project</a>
        <a href="{{url('/Skill')}}" >Skill</a>
        <a href="{{url('/Contact')}}" >Contact</a>
      </nav>
      <a class="btn">Subcribe</a>
    </header>
    @yield('page')
</body>
</html>