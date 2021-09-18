@extends('layouts.main')
@section('content') 

    <div class="container" style="padding: 200px 60px; ">
        <form action="{{url('/order-confirm')}}" method="post">
            @csrf
            <div style="border: 2px solid #fb5849; padding: 40px 40px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cart Items
                            </div>
                            <div class="panel-body" style="margin-top: 20px;">         
                                <table class="table"  >
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
                                                <td>
                                                    <input type="text" name="foodname[]" value="{{$cart->title}}" hidden>
                                                    {{$cart->title}}
                                                </td>
                                                <td>
                                                    <input type="text" name="price[]" value="{{$cart->price}}" hidden>    
                                                    {{$cart->price}}
                                                </td>
                                                <td>
                                                <input type="text" name="quantity[]" value="{{$cart->quantity}}" hidden>
                                                    {{$cart->quantity}}
                                                </td> 
                                            </tr>                                                                                                                                                                                                                                                                                                                        
                                        @endforeach 
                        
                                        @foreach($carts as $cart) 
                                            <tr style="position: relative; top: -90px; right: -900px; margin-bottom: 30px;">                                           
                                                <td >                                                                                             
                                                    <a href="{{url('/delete-cart-item', $cart->id)}}" onclick="confirm('Are you sure, you want to delete this FoodItem?') || event.stopImmediatePropagation()" style="margin-left: 10px;" ><i class="fa fa-times fa-2x text-danger"></i></a>                                                                                
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

            <div class="contact-form" style="padding: 40px 0">
                <div class="col-lg-10" style="margin-left: 95px;">        
                    <button type="button" id="order">Order Now</button>        
                </div> 
            </div>

            <div id="appear" style="border: 2px solid #fb5849; padding: 40px 40px; display: none;">
                <div class="contact-form" >
                    <div id="contact" >                    
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                                </fieldset>
                            </div>                                                                                               
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="address" rows="2" id="address" placeholder="Address" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Confirm Order</button>
                                </fieldset>                            
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <fieldset>
                                    <button type="button"  id="close">Close</button>
                                </fieldset>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div> 

    
    <script>
        $("#order").click(
            function()
            {
                $("#appear").show();
            }
        );

        $("#close").click(
            function()
            {
                $("#appear").hide();
            }
        );
    </script>

    
@endsection

@push('footer-scripts') 


   
@endpush