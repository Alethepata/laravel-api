@extends('layouts.admin')

@section('content')

    @if ($errors->any())

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
            @endforeach
        </ul>

      </div>

    @endif

    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title">Nome progetto</label>
          <input type="text" placeholder="Nome progetto" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label for="type_id">Tipo</label>
            <select class="form-select" name="type_id">

                <option selected>Scegli il tipo</option>

                @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach


              </select>
        </div>

        @foreach ($tecnologies as $tecnology)

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$tecnology->id}}" id="tecnology_{{$tecnology->id}}" name="tecnologies[]">
                <label class="form-check-label" for="tecnologies[]">
                  {{$tecnology->name}}
                </label>
            </div>

         @endforeach

        <div class="mb-3">

            <label for="image" class="form-label">Immagine</label>
            <input id="image" class="form-control" name="image" type="file" onchange="showImage(event)">
            <img id="thumb" class="image" src='/img/placeholder.png'/>

        </div>


        <div class="form-floating my-5">

            <label for="explanation">Descrizione</label>
            <textarea
            class="form-control"
            name="explanation"
            placeholder="Descrizione"
            >
           </textarea>


        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>


      <script>
        function showImage(event){
            const thumb = document.getElementById('thumb');
            thumb.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <style>
        .image{
            margin-top:10px;
             width: 100px;
             height: 100px;
             object-fit: cover;
             border-radius: 10px;
        }
    </style>


@endsection
