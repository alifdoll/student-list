@extends('/layout/form')

@section('title','Register')

@section('container')
 <div class="position-absolute top-50 start-50 translate-middle border border-5">
  <form class="mx-3 my-3" method="POST" action="{{route('register')}}">
  @csrf
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" >
  </div>

   <div class="mb-3">
    <label for="password_confirmation" class="form-label">Password Confirmation</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
 </div>
 @endsection