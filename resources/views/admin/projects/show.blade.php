@extends('layouts.admin')

@section('content')

<div class="container my-3">
    <h1 class="text-center pb-3">Project Details</h1>
    <div class="row g-4">
        <div>
            {{-- <h4 class="text-center"><a href="{{route("comics.show",$comic->id)}}">{{$comic->title}}</a></h4> --}}
            <h2 class="text-center">{{$project->title}}</h2>
            <h3 class="pt-3 text-center">Tipo: {{$project->type ? $project->type->name : "Type not found"}}</h3>
            <div class="text-center">
                
                <h3 class="py-3">Technologies</h3>
                <div class="text-center d-flex justify-content-center">
                    @foreach ($project->technologies as $technology)
                        <div class="px-3 badge text-bg-info mx-2">{{$technology->name}}</div>
                    @endforeach
                </div>
    
            </div>
            <p class="py-4 text-center">{{$project->content}}</p>
            <div class="py-3 text-center imgBox">
                <img class="w-50" src="{{asset('storage/' .$project->image)}}" alt="">
            </div>
        </div>
        
        <div class="text-center">
            <a href="{{route("admin.projects.index")}}" class="btn btn-primary">Return to Project List</a>
        </div>
        
    </div>

</div>


@endsection