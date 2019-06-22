@extends('layout')
@section('title', 'Edit Project')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h3>Edit Project</h3>
                <hr>
                <form method="POST" id="updateProjectForm" action="/{{ $project->id }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Title</label>
                    <input class="form-control" name="title" type="text" value="{{ $project->title }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description">{{ $project->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input class="form-control" name="author" type="text" value="{{ $project->author }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary" type="Submit">Update</button>
                    </div>
                </form>
                <form method="POST" id="deleteProjectForm" action="/{{ $project->id }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button class="btn btn-secondary" type="Submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection