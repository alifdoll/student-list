@extends('/layout/main')

@section('title', 'About')

@section('page_title', 'about')

@section('container')
<div class="container">
    <img src="{{ $user->picture }}" class="img-thumbnail" alt="...">
    <figure>
        <blockquote class="blockquote">
            <p>{{ $user->bio }}</p>
        </blockquote>

        <figcaption class="blockquote-footer">
           {{ $user->username }} <cite title="Source Title">, Mahasiswa</cite>
        </figcaption>
    </figure>
</div>
@endsection

