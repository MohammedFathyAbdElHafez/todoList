@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit task') }}</div>

                <div class="card-body">

                    <div class="col-md-8">
                        <form action="{{ route('tasks.update',$task->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="title" class="input-group-text">Title</label>
                                </div>
                                <input type="text" name="title" class="form-control" value="{{$task->title}}" id="title" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">

                                    <label for="description" class="input-group-text">Description</label>
                                </div>
                                <input type="text" class="form-control" id="description" value="{{$task->description}}" name="description" required>
                            </div>
                            <div class="input-group  mb-3">
                                <div class="input-group-prepend">
                                    <label for="status" class="input-group-text">Status</label>
                                </div>
                                <select class="form-control" name="status" id="status">
                                    <option {{ ($task->status) ==  'INPROGRESS'? 'selected': ''}} value="INPROGRESS" selected>In Progress</option>
                                    <option {{ ($task->status) ==  'CANCELLED'? 'selected': ''}} value="CANCELLED">Cancel</option>
                                    <option {{ ($task->status) ==  'COMPLETED'? 'selected': ''}} value="COMPLETED">Completed</option>
                                    <option {{ ($task->status) ==  'HOLD'? 'selected': ''}} value="HOLD">Hold</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary text-center">Create</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection