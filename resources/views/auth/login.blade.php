@extends('/layout/form')

@section('title','Login')

@section('container')

 <div class="position-absolute top-50 start-50 translate-middle border border-5">
  <form class="mx-3 my-3" method="POST" action="{{route('login')}}">
  @csrf
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}">
    @error('username')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" >
    @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
    
  <button type="submit" class="btn btn-primary">Login</button>
</form>
 </div>
 @endsection