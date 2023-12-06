@extends('layouts.admin')

@section('content')
    <h1>{{$tecnology->name}}</h1>

    <table class="table w-50">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Project</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tecnology->projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->title}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>



@endsection
