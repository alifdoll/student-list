@php 
$title = app()->view->getSections()['page_title'];
@endphp

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title> @yield('title') </title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<div class="container-fluid">
    			<a class="navbar-brand" href="/">ATIGA</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    			</button>
    				<div class="collapse navbar-collapse" id="navbarNav">
                      					
                <ul class="navbar-nav">
                                  
                  <li class="nav-item">
                     @if($title === 'home')
                    <a class="nav-link active" aria-current="page" href="/" style="font-weight:bold">Home</a>
                     @else
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                     @endif 
                  </li>

                  <li class="nav-item">
                    @if($title === 'about')
                    <a class="nav-link active" aria-current="page" href="/home/about" style="font-weight:bold;color:black">About</a>
                    @else
                    <a class="nav-link active" aria-current="page" href="/home/about">About</a>
                    @endif 
                  </li>

                    <li class="nav-item">
                     @if($title === 'student')
                    <a class="nav-link active" aria-current="page" href="/home/student" style="font-weight:bold; color:black">Student</a>
                     @else
                    <a class="nav-link active" aria-current="page" href="/home/student">Student</a>
                     @endif 
                  </li>

                  <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                    @csrf
                      <button type="submit" class="nav-link active" aria-current="page"  style="font-weight:bold;color:red">
                        LOGOUT
                      </button>
                    </form>
                  </li>

                </ul>
    				</div>
  			</div>
		</nav>
    </div>
    
    @yield('container')

    

  </body>
</html>
