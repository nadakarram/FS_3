<div class="container-fluid p-0 m-0">
    <h2 class="text-center my-4">
        All Employee Data "Admins" 
       
    </h2>
    <div class="container-fluid p-0 mb-3">
        <div class="d-flex  justify-content-between">
            <div class=" d-flex justify-content-between">
                    
                @livewire("search")
               
          
          
       </div>
       <div class="">
        
        <a href="/addadmin" class="btn btn-outline-dark">Add Admin <i class="fas fa-add"></i></a>
    </div>
        </div>
        
    </div>

    
    <table class="table table-hover w-100">
        <thead >
            <tr class="" style="">
                <th>Admin </th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($admins as $admin )
           
                 <tr class="">
                    <td>
                        @if ($admin->image==null)
                        <i class="fas fa-user fs-1"></i>
                            
                        @else
                                 <img src="{{asset("storage/".$admin->image)}}" alt="image" height="50" width="50">
                        @endif
                   </td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->phone_number}}</td>
                    
               
                <td>{{$admin->email}}</td>
               
              
                <td>
                    <a wire:navigate href="/updateadmin/{{$admin->id}}" class="btn"><i class="fas fa-edit"></i></a>
                    <a wire:navigate href="/admindelete/{{$admin->id}}" class="btn"><i class="fas fa-delete-left"></i></a>

                </td>
            </tr>
            @endforeach
           
       
        </tbody>
    </table>
    {{-- {{$admins->links()}} --}}

</div>
