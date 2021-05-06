@extends('welcome')
@section('crms')
    <form action="{{route('car.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Car Name</label>
            <input type="text" class="form-control" name="carname" placeholder="Example input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Car Customer Id</label>
            <input type="number" class="form-control" name="carcustomerid" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Car Driver Id</label>
            <input type="number" class="form-control" name="cardriverid" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Car Type</label>
            <input type="text" class="form-control" name="cartype" placeholder="Another input">
        </div>
        <button type="submit" class="btn btn-primary align-content-center">Submit</button>

    </form>

















@endsection

