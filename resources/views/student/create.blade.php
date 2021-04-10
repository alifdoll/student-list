@extends('/layout/main')

@section('title', 'Add Student Form')

@section('page_title', 'student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Add Student Form</h1>
            <form method="post" action="/student">
              @csrf
              <div class="mb-3">
                <label for="NRP" class="form-label">NRP</label>
                <input type="text" class="form-control @error('mhsnim') is-invalid @enderror" id="nrp" aria-describedby="emailHelp" name="mhsnim" 
                value="{{old('mhsnim')}}">
                @error('mhsnim')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
              </div> 

              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('mhsnama') is-invalid @enderror" id="nama" name="mhsnama" value="{{old('mhsnama')}}">
                @error('mhsnama')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
              </div>

               <div class="mb-3">
                <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control @error('mhstgllahir') is-invalid @enderror" id="date" name="mhstgllahir" format="dd-mm-yyyy" 
                value="{{old('mhstgllahir')}}">
                @error('mhstgllahir')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

