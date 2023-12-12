@extends('layouts.admin')

@section('content')
    <h1>Progetti</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif

    <table class="table my-3">
        <thead>
          <tr>
            <th scope="col">
                <a class="text-decoration-none text-dark" href="{{route('admin.order-by',['direction' => $direction, 'column' => 'id'])}}">Id</a>
            </th>
            <th scope="col">
                <a class="text-decoration-none text-dark" href="{{route('admin.order-by',['direction' => $direction, 'column' => 'title'])}}">Titolo</a>
            </th>
            <th scope="col">
                <a class="text-decoration-none text-dark" href="{{route('admin.order-by',['direction' => $direction, 'column' => 'start_date'])}}">Iniziato</a>
            </th>
            <th scope="col">
                <a class="text-decoration-none text-dark" href="{{route('admin.order-by',['direction' => $direction, 'column' => 'end_date'])}}">Finito</a>
            </th>
            <th scope="col">
                <a class="text-decoration-none text-dark" href="{{route('admin.order-by',['direction' => $direction, 'column' => 'type_id'])}}">Tipo</a>
            </th>

            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
               <tr>
                 <td>{{$project->id}}</td>
                 <td>
                    {{$project->title}}
                    @forelse ($project->tecnologies as $tecnology)
                    <a href="{{route('admin.tecnolgy-project', $tecnology)}}" class="badge text-bg-success text-decoration-none">{{$tecnology->name}}</a>
                    @empty
                    {{""}}
                    @endforelse
                </td>
                 <td>{{$project->start_date }}</td>

                 @if ($project->end_date)
                    <td>{{$project->end_date }}</td>
                @else
                    <td>In corso</td>
                 @endif

                 <td>{{$project->type->name }}</td>
                 <td><a class="btn btn-success" href="{{route('admin.projects.show', $project)}}">Show</a></td>
               </tr>
            @endforeach

        </tbody>
      </table>
      {{$projects->links()}}

@endsection
