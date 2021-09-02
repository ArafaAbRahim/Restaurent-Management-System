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
                        <form class="form-horizontal"  action="{{url('/editmenu', $data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf                                    
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Title</label>                                                
                                <div class="col-md-7">
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control input-md" required />
                                </div>                                                                                                
                            </div>
                                                                        
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Price</label>                                                
                                <div class="col-md-7">
                                    <input type="text" name="price" value="{{$data->price}}" class="form-control input-md" required />
                                </div>                                                                                                
                            </div>
                                
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Image</label>                                                
                                <div class="col-md-7">
                                    <input type="file" name="image" class="form-control input-md" required />
                                    <img src="/foodimage/{{$data->image}}" width="70" height="80" style="margin-top: 8px;"/>
                                </div>                                                                                                
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-7" >
                                    <textarea class="form-control input-md" name="description" id="description"  required >{{$data->description}}</textarea>                                           
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>                
        </div>
        
    </div> 


@endsection

@push('footer-scripts') 
   
@endpush