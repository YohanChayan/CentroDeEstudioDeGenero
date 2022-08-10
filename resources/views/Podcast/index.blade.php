@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <a href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJ?si=770ac524704647bd&nd=1" target="_blank"><img
                src="{{ asset('img/Banner-Podcast.png') }} " alt="Otra ventana-Podcast" class="mb-4 sm-12" width="100%"></a>

        <div class="row align-items-center">
            <div class="col-md-2">
                <a class="btn" style="background:#a1a1a1" href="{{ route('welcome') }}"><i class="fa fa-home"></i></a>
                <a href="{{ route('podcast.create') }}" type="submit" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
        <hr>

        @if (isset($podcast))
            <div class="row">
                @foreach ($podcast as $podcast)
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <iframe style="border-radius:12px" src="{{ $podcast->link }}?utm_source=generator"
                                width="100%" height="232" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
                            </iframe>
                            <a href="{{ route('podcast.edit', $podcast->id) }}" type="submit" class="btn" style="background:#361cfa"> <i class="fa fa-magic"></i></a>
                            <a href="{{ route('delete_podcast', $podcast->id) }}" type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
