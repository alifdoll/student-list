@extends('/layout/main')

@section('title', 'List of Students')

@section('page_title', 'student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">List of Students</h1>
            @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif
            <a href="/student/create" class="btn btn-primary my-3">Add New Student</a>
              <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">{{ $student-> mhsnama }}
                  <a class="badge rounded-pill bg-info text-dark" href="/student/{{ $student->mhsnim }}">Detail</a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

