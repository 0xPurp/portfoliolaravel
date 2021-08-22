@extends('backoffice.htmlnav')

@section('content')
    <h1>Blog</h1>
    <form action="/back/blog" method="post">
    @csrf
    titre : <input type="text" name="titre" id="">
    image : <input type="text" name="image" id="">
    description : <input type="text" name="description" id="">
    <button type="submit">Ajouter</button>
    </form>

    @foreach ($dataBlog as $item )
        <div>
        <br><br>
        <span>ID : {{$item->id}}</span><br>
        <span>Titre : {{$item->titre}}</span><br>
        <span>Image (mettre un lien direct) : {{$item->image}}</span><br>
        <span>Description : {{$item->description}}</span>
        <form action="{{route('delete', $item->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
        <a href="{{route('edit', $item->id)}}" class="btn btn-info">EDIT</a>
        </form>
        <br><br>
        </div>
    @endforeach
@endsection