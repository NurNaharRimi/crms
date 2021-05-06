@extends('welcome')
@section('crms')
    <center><a href="{{route('customer.from')}}"><button type="button" class="btn btn-primary align-content-center">
                CREATE CUSTOMER
            </button></a></center><br>



    <table class="table">
        <thead>
        <tr>
            <th >ID</th>
            <th >Customer Name</th>
            <th >Customer Address</th>
            <th >Customer Contact</th>
            <th >Customer Email</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($customerlist as $list)
            <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->Name}}</td>
                <td>{{$list->Address}}</td>
                <td>{{$list->Contact}}</td>
                <td>{{$list->Email}}</td>
                <td>
                    <a class="btn btn-success" href="">View</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
