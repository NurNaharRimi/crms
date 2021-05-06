@extends('welcome')
@section('crms')
    <form action="{{route('staff.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="staffname" placeholder="Example input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" class="form-control" name="staffaddress" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Contact</label>
            <input type="number" class="form-control" name="staffcontact" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" name="staffemail" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" name="staffpassword" placeholder="Another input">
        </div>
        <button type="submit" class="btn btn-primary align-content-center">Submit</button>
    </form>

















@endsection

