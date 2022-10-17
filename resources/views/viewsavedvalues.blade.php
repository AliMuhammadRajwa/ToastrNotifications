@extends('welcome')
@section('content')
    <div class="card">
        <div class="card-header">The Values From DataBase</div>
        <div class="card-body">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($models as $model)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$model->text}}</td>
                                <td><a href="{{route('text.delete',$model->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Text Found In Db.</td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
