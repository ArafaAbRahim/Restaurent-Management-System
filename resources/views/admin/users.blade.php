<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admin-css")
  </head>
  <body>
  
    <div class="container-scroller">
      @include("admin.navbar")              
      
      <div class="container" style="position: relative; top: 60px; ">
        <table class="table" style="color: white; text-align: center;">
          <tr style=" background-color: #dc3545;">
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>

            @foreach($data as $value)
              <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                @if($value->usertype == "0")
                  <td><a href="{{url('/deleteuser', $value->id)}}" >Delete</a></td>
                @else
                  <td>Not Allowed<td> 
                @endif
              </tr>
            @endforeach
        </table>        
      </div>
     
    </div>              
     

   

    @include("admin.admin-script")
   
  </body>
</html>

