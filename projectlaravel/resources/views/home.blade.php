@extends('layouts.app')
<style>
    
    </style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tasks You Have') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($task as $task)
                        <tr>
                        <td>{{$task -> name}}</td>
                        <td>{{$task -> details}}</td>
                        <td>{{$task -> deadline}}</td>
                        <td><a href="{{ url('/delete/' . $task->id) }}" class="btn btn-outline-danger">Delete</a></td>
                        <td><a href="{{ url('/edit/' . $task->id) }}" class="btn btn-outline-primary">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
