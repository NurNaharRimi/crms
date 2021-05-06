@extends('welcome')
@section('crms')
    <form action="{{route('categorie.create')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput2">Car Name</label>
            <input type="text" class="form-control" Name="Car_name" placeholder="Another input">
        </div>
        <button type="submit" class="btn btn-primary align-content-center">Submit</button>
    </form>

















@endsection

