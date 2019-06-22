@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h3>Project List</h3>
                <hr>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $each)
                            <tr>
                                <td>{{ $each->title }}</td>
                                <td>{{ $each->description }}</td>
                                <td>{{ $each->author }}</td>
                                <td><a href="/{{ $each->id }}/edit">Update</a></td>
                            </tr>    
                        @endforeach

                    </tbody>
                </table>
            </div>       
        </div>    
    </div>
@endsection