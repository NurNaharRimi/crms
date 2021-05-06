
@extends('welcome')
@section('crms')
    <center><a href="{{route('staff.from')}}"><button type="button" class="btn btn-primary align-content-center">
                CREATE STAFF
            </button></a></center><br>
    <table class="table">
        <thead>
        <tr>
            <th >IDth>
            <th >Name>
            <th >Address</th>
            <th >Contact</th>
            <th >Email</th>
            <th >Password</th>

        </tr>
        </thead>
        <tbody>
        @foreach($stafflist as $list)
            <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->name}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->contact}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->password}}</td>
                <td>
                    <a class="btn btn-success" href="">View</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
