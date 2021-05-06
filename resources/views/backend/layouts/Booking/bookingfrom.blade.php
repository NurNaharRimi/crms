@extends('welcome')
@section('crms')
    <form action="{{route('booking.create')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput2">Booking Destination</label>
            <input type="text" class="form-control" name="bookinddestination" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Book Type</label>
            <input type="text" class="form-control" name="booktype" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Date</label>
            <input type="text" class="form-control" name="date" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Car Id</label>
            <input type="ID" class="form-control" name="carid" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Customer Id</label>
            <input type="ID" class="form-control" name="customerid" placeholder="Another input">
        </div>
        <button type="submit" class="btn btn-primary align-content-center">Submit</button>
    </form>

















@endsection

