@extends('cdns')

@section('title')
    Update Record
@endsection

@section('content')
<div class="col-sm-6 offset-3">
  <div class="alert alert-primary text-center text-uppercase py-2" role="alert">
    <h5>Update Student Record</h5>
  </div>
 <form action="" method="POST" class="">
    @csrf
    <div class="form-group">
       <label for="id_name">Name</label>
       <input type="text" class="form-control" name="name" value="{{$student->name}}" id="id_name">
     </div>
     <div class="form-group mt-4">
       <label for="id_city">City</label>
       <input type="text" class="form-control" name="city" value="{{$student->city}}" id="id_city">
     </div>
     <div class="form-group mt-4">
       <label for="id_pincode">Pin Code</label>
       <input type="number" class="form-control" name="pincode" value="{{$student->pincode}}" id="id_pincode">
     </div>
     <div class="form-group mt-4 text-center">
       <button type="submit" class="btn btn btn-info">Update Record</button>
       <a href="{{route('home')}}" class="btn btn-secondary">Cancel</a>
     </div>
 </form>
</div>
@endsection