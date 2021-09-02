@extends('admin.layout')
@section('content')

    <div class="container" style="padding: 100px 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Reservation
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
                                    <th>Guest</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $reservation)
                                    <tr>
                                        <td>{{$reservation->name}}</td>
                                        <td>{{$reservation->email}}</td>
                                        <td>{{$reservation->phone}}</td>
                                        <td>{{$reservation->guest}}</td> 
                                        <td>{{$reservation->date}}</td>
                                        <td>{{$reservation->time}}</td>
                                        <td>{{$reservation->message}}</td>                                                                              
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