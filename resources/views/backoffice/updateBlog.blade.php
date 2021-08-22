@extends('backoffice.htmlnav')

@section('content')
    <h1>Blog</h1>
    <section>
        <form action="{{route('update', $newEntry->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Titre</label>
              <input value="{{$newEntry->titre}}" name="titre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Image (mettre lien direct)</label>
              <input value="{{$newEntry->image}}" name="image" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input value="{{$newEntry->description}}" name="desc" type="text" class="form-control" id="exampleInputPassword1">
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </section>
@endsection