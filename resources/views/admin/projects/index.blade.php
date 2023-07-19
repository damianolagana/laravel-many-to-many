@extends('layouts.admin')

@section('content')

<div class="container my-3">
    <h1 class="text-center pb-3">Projects List</h1>
    <div class="row g-4">
       
        <div class="d-flex flex-wrap">
            @foreach ($projects as $project)
                <div class="w-50 p-3 border border-2 rounded">
                    
                    <h4 class="text-center">{{$project->title}}</h4>
                    <div class="py-3 text-center imgBox">
                        <img class="w-50" src="{{asset('storage/' .$project->image)}}" alt="">
                    </div>
                    <p class="pt-3 text-center">Tipo: {{$project->type ? $project->type->name : "Type not found"}}</p>
                    <p class="pt-3 text-center">{{$project->content}}</p>
                    <div class="text-center">
                        <a href="{{route("admin.projects.show", $project)}}" class="btn btn-info text-center">View details</a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>

</div>


@endsection