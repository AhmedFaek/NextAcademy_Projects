@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Add New Task</div>

                <div class="card-body">
                    <form method="post" action="/add">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Task Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter task name..." name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Details</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter task details..." name="details">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Deadline</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter task Deadline..." name="deadline">
                        </div>
                        <button type="submit" class="btn btn-primary">Add this task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
