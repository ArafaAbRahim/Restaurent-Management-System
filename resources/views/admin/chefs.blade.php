@extends('admin.layout')
@section('content') 

    <div class="container" style="padding: 100px 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Chef
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/add-chef')}}" class="btn btn-primary pull-right">Add New Chef</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">         
                        <table class="table table-striped"  >
                            <thead style="background-color: #2A3F54;">
                                <tr style="color: white;">
                                    <th>Image</th>
                                    <th>name</th>
                                    <th>Speciality</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $chef)
                                    <tr>
                                        <td><img src="/chefimage/{{$chef->image}}" width="80" height="80"></td>
                                        <td>{{$chef->name}}</td>
                                        <td>{{$chef->speciality}}</td>
                                                                                
                                        <td>
                                            <a href="" ><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="" onclick="confirm('Are you sure, you want to delete this FoodItem?') || event.stopImmediatePropagation()" style="margin-left: 10px;" ><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
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