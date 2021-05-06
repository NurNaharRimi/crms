@extends('welcome')
@section('crms')
    <center><a href="{{route('booking.from')}}"><button type="button" class="btn btn-primary align-content-center">
                CREATE BOOKING
            </button></a></center><br>

    <table class="table">
        <thead>
        <tr>
            <th >IDth>
            <th >Booking Destination</th>>
            <th >Book Type</th>
            <th >Date</th>
            <th >Car Id</th>
            <th >Customer Id</th>

        </tr>
        </thead>
        <tbody>
        @foreach($bookinglist as $list)
            <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->Booking_Destination}}</td>
                <td>{{$list->Book_Type}}</td>
                <td>{{$list->Date}}</td>
                <td>{{$list->Car_Id}}</td>
                <td>{{$list->Customer_Id}}</td>
                <td>
                    <a class="btn btn-success" href="">View</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
