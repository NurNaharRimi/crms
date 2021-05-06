@extends('welcome')
@section('crms')


    <center><a href="{{route('car.from')}}"><button type="button" class="btn btn-primary align-content-center">
                CREATE CAR
            </button></a></center><br>
    <table class="table">
        <thead>
        <tr>
            <th >IDth>
            <th >Car Name>
            <th >Car Customer Id</th>
            <th >Car Driver Id</th>
            <th >Car Type</th>


        </tr>
        </thead>
        <tbody>
        @foreach($carlist as $list)
            <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->Car_Name}}</td>
                <td>{{$list->Car_Customer_Id}}</td>
                <td>{{$list->Car_Driver_Id}}</td>
                <td>{{$list->Car_Type}}</td>

                <td>
                    <a class="btn btn-success" href="">View</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
