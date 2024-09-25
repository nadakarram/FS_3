<div class="container-fluid p-0 m-0">
    <h2 class="text-center my-4">
        All Categories Data 
       
    </h2>
    <div class="container-fluid p-0 mb-3">
        <div class="d-flex  justify-content-between">
            <div class=" d-flex justify-content-between">
                    
                @livewire("search")
               
          
          
       </div>
       <div class="">
        
        <a href="/adminaddcategory" class="btn btn-outline-dark">Add Category <i class="fas fa-add"></i></a>
    </div>
        </div>
        
    </div>

    
    <table class="table table-hover w-100">
        <thead >
            <tr class="" style="">
                <th>CATEGORY</th>
                <th>NAME</th>
               
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($categories as $category )
           
                 <tr class="">
                <td>{{$category->id}}</td>
                    
               
                <td>{{$category->name}}</td>
               
              
                <td>
                    <a wire:navigate href="/adminupdatecategory/{{$category->id}}" class="btn"><i class="fas fa-edit"></i></a>
                    <a wire:navigate href="/deletecategory/{{$category->id}}" class="btn"><i class="fas fa-delete-left"></i></a>

                </td>
            </tr>
            @endforeach
           
       
        </tbody>
    </table>
    {{$categories->links()}}

</div>
