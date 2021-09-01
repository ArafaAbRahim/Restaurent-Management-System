@extends('admin.layout')
@section('content') 
        
        <div class="container" style="padding: 100px 60px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    Add New Food Item
                                </div>
                                <div class="col-md-6">
                                    <a href="{{url('/foods')}}" class="btn btn-primary pull-right">All Food Items</a>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">                
                            <form class="form-horizontal"  action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                                @csrf                                    
                                <div class=" form-group">
                                    <label class="col-md-3 control-label">Title</label>                                                
                                    <div class="col-md-7">
                                        <input type="text" name="title" placeholder="Enter Title here.." class="form-control input-md" required />
                                    </div>                                                                                                
                                </div>
                                                                            
                                <div class=" form-group">
                                    <label class="col-md-3 control-label">Price</label>                                                
                                    <div class="col-md-7">
                                        <input type="text" name="price" placeholder="Enter Price here.." class="form-control input-md" required />
                                    </div>                                                                                                
                                </div>
                                    
                                <div class=" form-group">
                                    <label class="col-md-3 control-label">Image</label>                                                
                                    <div class="col-md-7">
                                        <input type="file" name="image" placeholder="Enter Image here.." class="form-control input-md" required />
                                    </div>                                                                                                
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Description</label>
                                    <div class="col-md-7" >
                                        <textarea class="form-control" name="description" id="description" placeholder="Description" required ></textarea>                                           
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>                
            </div>
            
        </div>
    </div>

@endsection

@push('footer-scripts') 
   
@endpush