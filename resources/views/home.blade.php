@extends('cdns')

@section('title', 'Home')

@section('content')
   <div class="row">
      {{-- Add Record Form --}}
      <div class="col-sm-4">
         <div class="alert alert-primary text-center text-uppercase py-2" role="alert">
            <h5>Add Student Record</h5>
          </div>
         <form action="" method="POST" class="">
            @csrf
            <div class="form-group">
               <label for="id_name">Name</label>
               <input type="text" class="form-control" name="name" id="id_name">
             </div>
             <div class="form-group mt-4">
               <label for="id_city">City</label>
               <input type="text" class="form-control" name="city" id="id_city">
             </div>
             <div class="form-group mt-4">
               <label for="id_pincode">Pin Code</label>
               <input type="number" class="form-control" name="pincode" id="id_pincode">
             </div>
             <div class="form-group mt-4 text-center">
               <button type="submit" class="btn btn-primary">Submit</button>
             </div>
         </form>
         @if (session('added'))
            <div class="alert py-2 alert-success mt-4">
               {{session('added')}}
            </div>
         @endif
         @if (session('updated'))
            <div class="alert py-2 alert-info mt-4">
               {{session('updated')}}
            </div>
         @endif
         @if (session('deleted'))
            <div class="alert py-2 alert-danger mt-4">
               {{session('deleted')}}
            </div>
         @endif
      </div>

      {{-- Show Information Table --}}
      <div class="col-sm-8">
         <div class="alert alert-info text-center text-uppercase py-2" role="alert">
            <h5>All Student Records</h5>
          </div>
         <table class="table table-bordered table-hover table-inverse table-responsive">
            <thead class="thead-inverse bg-secondary text-white">
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>City</th>
                  <th>Pin Code</th>
                  <th>Action</th>
               </tr>
               </thead>
               <tbody>
                  @if ($students)
                     @foreach ($students as $item)
                        <tr>
                           <td class="py-1">{{$item->id}}</td>
                           <td class="py-1">{{$item->name}}</td>
                           <td class="py-1">{{$item->city}}</td>
                           <td class="py-1">{{$item->pincode}}</td>
                           <td class="py-1">
                              <a href="{{route('edit',$item->id)}}" class="btn btn-sm btn-info px-3">Edit</a>
                              &nbsp;&nbsp;
                              <a href="{{ url('/delete',$item->id)}}" class="btn btn-sm btn-danger">Delete</a>
                           </td>
                        </tr>
                     @endforeach
                      
                  @endif
               </tbody>
         </table>
      </div>
   </div>
@endsection