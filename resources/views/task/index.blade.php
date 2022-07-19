@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">

                    <form action="{{ route('tasks.create') }}">
                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-primary text-center" value="Create task" />
                        </div>
                    </form>

                    @if(isset($tasks))


                    <div class="row mt-5 d-flex justify-content-center align-items-center">
                        <div class="col-md-12">

                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Operations</th>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                    <tr>
                                        <td>{{$task->id}} </td>
                                        <td>{{$task->title}} </td>
                                        <td>{{$task->description}} </td>
                                        <td class="{{$task->status}}">{{$task->status}} </td>
                                        <td>
                                            <div class="row">
                                                <div style="width: 50%;">
                                                    <a class="btn btn-small btn-info ml-5" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                                                </div>

                                                <div style="width: 50%;">
                                                    <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">

                                                        <input type="submit" class="btn btn-danger" value="Delete" />

                                                    </form>
                                                </div>
                                            </div>




                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection