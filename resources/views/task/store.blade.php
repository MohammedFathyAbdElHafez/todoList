@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">

                    <h2 class="d-flex"> Here you can add tasks </h2>

                    <div class="col-md-8">
                        <form action="{{ route('tasks.store') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="title" class="input-group-text">Title</label>
                                </div>
                                <input type="text" name="title" class="form-control" id="title" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">

                                    <label for="description" class="input-group-text">Description</label>
                                </div>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <!--                             <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="custom-select" id="status">
                                    <option value="INPROGRESS" selected>In Progress</option>
                                    <option value="CANCELLED">Cancel</option>
                                    <option value="COMPLETED">Completed</option>
                                    <option value="HOLD">Hold</option>
                                </select>
                            </div> -->
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