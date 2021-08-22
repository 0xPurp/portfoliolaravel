@extends('backoffice.htmlnav')

@section('content')
    <h1>Portfolio</h1>
    <section>
        <form action="{{route('update2', $newEntry->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Titre</label>
              <input value="{{$newEntry->titre}}" name="titre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">description</label>
              <input value="{{$newEntry->description}}" name="description" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </section>
@endsection