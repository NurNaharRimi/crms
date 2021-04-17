@extends('welcome')
@section('crms')
    <form action=""method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Car Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Car Id</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Car Customer Id</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Car Driver Id</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Car Type</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

    </form>







    <button type="submit" class="btn btn-primary align-content-center">Submit</button>









@endsection

