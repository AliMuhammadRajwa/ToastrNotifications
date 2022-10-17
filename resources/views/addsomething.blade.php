@extends('welcome')
@section('content')
    <div class="card-header">Something</div>
    <div class="card-body">
        <form class="form" action="{{route('text.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="justarandomtext">This is a Random input value</label>
                <input type="text" class="form-control" id="justarandomtext" name="justarandomtext">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
