@extends('admin.layout')
@section('content')        

    <div class="container" style="padding: 100px 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="row">
                          All Users                         
                      </div>
                  </div>
                  <div class="panel-body">                                      
                      <table class="table table-striped"  >
                        <thead  style="background-color: #2A3F54; ">
                          <tr style="color: white;">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $value)
                              <tr>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                @if($value->usertype == "0")
                                  <td><a href="{{url('/deleteuser', $value->id)}}" onclick="confirm('Are you sure, you want to delete this UserId?') || event.stopImmediatePropagation()" style="margin-left: 10px;" ><i class="fa fa-times fa-2x text-danger"></i></a></td>
                                @else
                                  <td>Not Allowed<td> 
                                @endif
                              </tr>
                            @endforeach
                        </tbody>
                       
                      </table>  
                  </div>
              </div>
          </div>      
      </div>     
    </div>              
        
@endsection

@push('footer-scripts') 
   
@endpush

