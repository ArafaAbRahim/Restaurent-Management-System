@extends('admin.layout')
@section('content')

    <div class="container" style="padding: 100px 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Chef
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/chefs')}}" class="btn btn-primary pull-right">All Chef</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">                
                        <form class="form-horizontal"  action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
                            @csrf                                    
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Name</label>                                                
                                <div class="col-md-7">
                                    <input type="text" name="name" placeholder="Enter Name here.." class="form-control input-md" required />
                                </div>                                                                                                
                            </div>
                                                                        
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Speciality</label>                                                
                                <div class="col-md-7">
                                    <input type="text" name="speciality" placeholder="Enter Speciality here.." class="form-control input-md" required />
                                </div>                                                                                                
                            </div>
                                
                            <div class=" form-group">
                                <label class="col-md-3 control-label">Image</label>                                                
                                <div class="col-md-7">
                                    <input type="file" name="image" placeholder="Enter Image here.." class="form-control input-md" required />
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

@endsection

@push('footer-scripts') 
   
@endpush