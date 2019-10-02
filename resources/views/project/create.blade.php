@extends('layout')
@section('title', 'Add Project')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h3>Add Project</h3>
                <hr>
                <form method="POST" id="addProjectForm" action="/">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" type="text">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Authors</label>
                        <input class="form-control" name="author" type="text">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary" type="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
