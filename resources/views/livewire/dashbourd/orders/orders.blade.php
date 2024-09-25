<div class="container-fluid p-0 m-0">
    <h2 class="text-center my-4">
        All Orders Data 👋
       
    </h2>
    <div class="container-fluid p-0 mb-3">
        <div class="d-flex  justify-content-between">
            <div class=" d-flex justify-content-between">
                    
                @livewire("search")
          
             
              
           
          
          
       </div>
       <div class="">
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$state}} orders
            </button>
            <ul class="dropdown-menu">
              <li> <a  class="dropdown-item" wire:click="handelfilter('All')">All orders</a></li>
              <li><a  class="dropdown-item" wire:click="handelfilter('pending')">pending orders</a></li>
              <li><a class="dropdown-item"wire:click="handelfilter('shipped')">shipped  order</a></li>
              <li><a  class="dropdown-item" wire:click="handelfilter('processing')">processing orders</a></li>
              <li><a class="dropdown-item"wire:click="handelfilter('canceled')"> canceled orders</a></li>
            </ul>
          </div>

         {{-- <select  class="form-select  ms-3" >
                  <option > <a  class="text-dark" wire:click="handelfilter('all')">All orders</a></option>
                   <option  ><a  class="text-dark" wire:click="handelfilter('pending')">pending orders</a></option>
                   <option  ><a class="text-dark"wire:click="handelfilter('shipped')">shipped  order</a></option>
                   <option ><a  class="text-dark" wire:click="handelfilter('processing')">processing orders</a></option>
                   <option > <a class="text-dark"wire:click="handelfilter('canceled')"> canceled orders</a></option>
               </select> --}}
     
    </div>
        </div>
        
    </div>

    
    <table class="table table-hover w-100">
        <thead >
            <tr class="" style="">
                <th>ORDER</th>
                <th>USER</th>
                <th>PRICE</th>
                <th>STATE</th>
                <th>TIME TO RECIVE</th>
                <th>NUMBER ORDER ITEM</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($orders as $order )
           
                 <tr class="">
                    {{-- {{asset("storage/".$post->image)}} --}}
              
                
                <td>{{$order->id}}</td>
             
                <td>
                    @foreach ($users as $user)
                    @if($user->id==$order->user_id)
                     {{$user->name}}
                    @endif
                        
                    @endforeach
                   
               </td>
               <td>{{$order->order_total}}</td>
               <td>{{$order->state}}</td> 
                
               
                <td>{{$order->time_to_recive}}</td>
               <td>{{$order->num_order_items}}</td>
                <td>
                    <a wire:navigate href="/adminupdateorder/{{$order->id}}" class="btn"><i class="fas fa-edit"></i></a>
                    <a href="/adminshoworder/{{$order->id}}" class="text-dark"><i class="fas fa-eye"></i></a>

                </td>
            </tr>
            @endforeach
          
           
       
        </tbody>
    </table> 
     <div class="mt-3">
                {{$orders->links()}}
    </div>

</div>
