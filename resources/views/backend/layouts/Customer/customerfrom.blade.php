@extends('welcome')
@section('crms')
    <form action="{{route('customer.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Customer Name</label>
            <input type="text" class="form-control" name="customername" placeholder="Example input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Customer Address</label>
            <input type="text" class="form-control" name="customeraddress" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Customer Contact</label>
            <input type="number" class="form-control" name="customercontact" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Customer Email</label>
            <input type="email" class="form-control" name="customeremail" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Customer Password</label>
            <input type="password" class="form-control" name="customerpassword" placeholder="Another input">
        </div>
        <button type="submit" class="btn btn-primary align-content-center">Submit</button>
    </form>

















@endsection

