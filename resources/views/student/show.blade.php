@extends('/layout/main')

@section('title', 'Details of Student')

@section('page_title', 'student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Details of Students</h1>
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$student->mhsnama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$student->mhsnim}}</h6>
                  <a href="{{ $student->mhsnim }}/edit" class="btn btn-primary">Edit</a>
                  <form action="/student/{{ $student->mhsnim }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                    <button type="submit" href="#" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="/student" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

