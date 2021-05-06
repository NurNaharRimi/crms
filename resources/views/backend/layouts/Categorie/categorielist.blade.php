@extends('welcome')
@section('crms')
    <center><a href="{{route('categorie.from')}}"><button type="button" class="btn btn-primary align-content-center">
                CREATE CATEGORIE
            </button></a></center><br>

    <table class="table">
        <thead>
        <tr>
            <th >IDth>
            <th >Car Name</th>>

        </tr>
        </thead>
        <tbody>
        @foreach($categorielist as $list)
            <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->Car_Name}}</td>

                <td>
                    <a class="btn btn-success" href="">View</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
