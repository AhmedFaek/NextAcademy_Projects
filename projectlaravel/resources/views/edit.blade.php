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
                <div class="card-header">{{ __('Edit Task') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/update/'.$task->id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Task Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
                        </div>
                        <div class="form-group">
                            <label for="details">Details</label>
                            <input type="text" class="form-control" id="details" name="details" value="{{ $task->details }}">
                        </div>
                        <div class="form-group">
                            <label for="deadline">Deadline</label>
                            <input type="text" class="form-control" id="deadline" name="deadline" value="{{ $task->deadline }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
