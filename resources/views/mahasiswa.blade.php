@extends('/layout/main')

@section('title', 'Contact')


@section('navbar')
<ul class="navbar-nav">
                  
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/" >Home</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/about" >About</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/contact" style="font-weight:bold; font-color:black">Mahasiswa</a>
  </li>

</ul>
@endsection


@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-2">Mahasiswa</h1>     
    </div>
  </div>
</div>
@endsection

