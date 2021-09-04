@extends('admin.layout')
@section('content')

    <div class="container" style="padding: 100px 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Chef
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/chefs')}}" class="btn btn-primary pull-right">All Chef</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">                
                        <form class="form-horizontal"  action="{{url('/editchef', $data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf                                    
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Name</label>                                                
                                <div class="col-md-7">
                                    <input type="text" name="name" value="{{$data->name}}" class="form-control input-md" required />
                                </div>                                                                                                
                            </div>
                                                                        
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Speciality</label>                                                
                                <div class="col-md-7">
                                    <input type="text" name="speciality" value="{{$data->speciality}}" class="form-control input-md" required />
                                </div>                                                                                                
                            </div>
                                
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Image</label>                                                
                                <div class="col-md-7">
                                    <input type="file" name="image" placeholder="Enter Image here.." class="form-control input-md" required />
                                    <img src="/chefimage/{{$data->image}}" width="70" height="80" style="margin-top: 8px;"/>
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