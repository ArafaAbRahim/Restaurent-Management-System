@extends('admin.layout')
@section('content')    

    <div class="container" style="padding: 100px 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Food Items
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/fooditem')}}" class="btn btn-primary pull-right">Add New Food Item</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">         
                        <table class="table table-striped"  >
                            <thead style="background-color: #2A3F54;">
                                <tr style="color: white;">
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $food)
                                    <tr>
                                        <td><img src="/foodimage/{{$food->image}}" width="80" height="80"></td>
                                        <td>{{$food->title}}</td>
                                        <td>{{$food->price}}</td>
                                        <td>{{$food->description}}</td>                                        
                                        <td>
                                            <a href="{{url('/deleteitem', $food->id)}}" ><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="{{url('/deleteitem', $food->id)}}" onclick="confirm('Are you sure, you want to delete this FoodItem?') || event.stopImmediatePropagation()" style="margin-left: 10px;" ><i class="fa fa-times fa-2x text-danger"></i></a>
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