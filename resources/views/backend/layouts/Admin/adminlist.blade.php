@extends('welcome')
@section('crms')
    <center><a href="{{route('admin.from')}}"><button type="button" class="btn btn-primary align-content-center">
                CREATE USER
            </button></a></center><br>

    <table class="table">
        <thead>
        <tr>
            <th >IDth>
            <th >Name</th>
            <th >Address</th>
            <th >Contact</th>
            <th >Email</th>
            <th >Password</th>

        </tr>
        </thead>
        <tbody>
    @foreach($adminlist as $list)
    <tr>
        <th scope="row">{{$list->id}}</th>
    <td>{{$list->Name}}</td>
        <td>{{$list->Address}}</td>
        <td>{{$list->Contact}}</td>
        <td>{{$list->Email}}</td>
        <td>{{$list->Password}}</td>
        <td>
            <a class="btn btn-success" href="">View</a>
            <a class="btn btn-danger" href="">Delete</a>
        </td>

</tr>
    @endforeach
        </tbody>
    </table>



@endsection
