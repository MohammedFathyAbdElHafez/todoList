@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">

                    @if(isset($tasks))


                    <div class="row mt-5 d-flex justify-content-center align-items-center">
                        <div class="col-md-12">

                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                    <tr>
                                        <td>{{$task->id}} </td>
                                        <td>{{$task->title}} </td>
                                        <td>{{$task->description}} </td>
                                        <td>{{$task->status}} </td>
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