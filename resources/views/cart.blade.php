@extends('layouts.main')
@section('content') 

    <div class="container" style="padding: 200px 60px; ">
     <div style="border: 2px solid #fb5849; padding: 40px 40px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cart Items
                    </div>
                    <div class="panel-body" style="margin-top: 20px;">         
                        <table class="table table-striped"  >
                            <thead style="background-color: #fb5849;">
                                <tr style="color: white;">
                                    <th>Image</th>
                                    <th>Food Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $cart)
                                    <tr>
                                        <td><img src="/foodimage/{{$cart->image}}" width="40" height="40"></td>
                                        <td>{{$cart->title}}</td>
                                        <td>{{$cart->price}}</td>
                                        <td>{{$cart->quantity}}</td>                                        
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
        
    </div>  
@endsection

@push('footer-scripts') 
   
@endpush