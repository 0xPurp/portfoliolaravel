@extends('backoffice.htmlnav')

@section('content')
    <h1>Portfolio</h1>
    <form action="/back/portfolio" method="post">
        @csrf
        titre : <input type="text" name="titre" id="">
        description : <input type="text" name="description" id="">
        <button type="submit">Ajouter</button>
    </form>

    @foreach ($dataPortfolio as $item )
        <div>
        <br><br>
        <span>ID : {{$item->id}}</span><br>
        <span>Titre : {{$item->titre}}</span><br>
        <span>Description : {{$item->description}}</span>
        <form action="{{route('delete2', $item->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
            <a href="{{route('edit2', $item->id)}}" class="btn btn-info">EDIT</a>
        </form>
        <br><br>
        </div>
    @endforeach
@endsection