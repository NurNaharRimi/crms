@extends('welcome')
@section('crms')
    <form action="{{route('driver.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="driver_name" placeholder="Example input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" class="form-control" name="driver_address" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Contact</label>
            <input type="text" class="form-control" name="driver_contact" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" name="driver_email" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Age</label>
            <input type="age" class="form-control" name="driver_age" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" name="driver_password" placeholder="Another input">
        </div>
        <button type="submit" class="btn btn-primary align-content-center">Submit</button>
    </form>

















@endsection

