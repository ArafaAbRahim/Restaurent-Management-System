@extends('admin.layout')
@section('content')    

    <div class="container" style="padding: 100px 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <div class="row">
                            <div class="col-md-9">
                                All Order Items
                            </div>
                            <div class="col-md-3">
                                <form action="{{url('/search')}}" method="post">
                                    @csrf
                                    <input type="text"  name="search" >
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">         
                        <table class="table table-striped"  >
                            <thead style="background-color: #2A3F54;">
                                <tr style="color: white;"> 
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>                                   
                                    <th>Food</th>
                                    <th>Price</th>
                                    <th>Quantity</th>  
                                    <th>Total Price</th>                                  
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $order)
                                    <tr>        
                                        <td>{{$order->name}}</td> 
                                        <td>{{$order->email}}</td> 
                                        <td>{{$order->phone}}</td> 
                                        <td>{{$order->address}}</td>                                
                                        <td>{{$order->foodname}}</td>
                                        <td>${{$order->price}}</td>
                                        <td>{{$order->quantity}}</td> 
                                        <td>${{$order->price * $order->quantity}}</td>                                                                          
                                        <td>                                            
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