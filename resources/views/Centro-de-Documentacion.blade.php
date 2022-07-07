@extends('layouts.app')
@section('content')
<div class="container">
    <img src="{{asset('img/Banner-Podcast.png')}}" alt="Centro de Documentacioón" width="100%">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Autor</th>
                <th scope="col">Título</th>
                <th scope="col">Editorial</th>
                <th scope="col">Año</th>
                <th scope="col">ISBN</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection