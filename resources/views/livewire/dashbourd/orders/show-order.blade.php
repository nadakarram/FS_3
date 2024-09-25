<div class="container my-5">
    <!-- Profile Section -->
    <div class="d-flex align-items-center mb-4">
        <img src="{{asset("storage/".$userdata->image)}}" alt="Profile Picture" class="rounded-circle me-3" width="50" height="50">
        <div>
            <h5 class="mb-0">{{$userdata->name}}</h5>
            <small class="text-muted">{{$userdata->email}}</small>
        </div>
    </div>

    <!-- General Information -->
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title">General Information</h6>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Profile:</strong> Created on: <?php
                        $dateString = $userdata->created_at;

                        // Create a DateTime object from the string
                        $date = new DateTime($dateString);

                        // Format the date
                        $formattedDate = $date->format('F d, Y');

                        echo $formattedDate;
                     ?></p>
                    <p><strong>Phone:</strong> {{$userdata->phone_number}}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Address:</strong>  {{$userdata->address}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer Insight -->
    <div class="card mb-4">
        <div class="card-body">
            <h6 class="card-title">Order Data</h6>
            <div class="row">
                <div class="col-md-6">
            <p> <strong>Order state: </strong> {{$orderdata->state}}</p>
            </div>
            <div class="col-md-6">
                <p> <strong>Order created at : </strong> <?php
                    $dateString = $orderdata->created_at;

                    // Create a DateTime object from the string
                    $date = new DateTime($dateString);

                    // Format the date
                    $formattedDate = $date->format('F d, Y');

                    echo $formattedDate;
                 ?> </p>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <p> <strong>Order price : </strong>{{$orderdata->order_total}}</p>
            </div>
            <div class="col-md-6">
                <p><strong> Order items :</strong>{{$orderdata->num_order_items}}</p>
            </div>
            </div>
            
            
            
        </div>
    </div>

    <!-- Subscriptions -->


    <!-- Payments -->
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Order items</h6>



            <table class="table table-borderless mt-3 ">
                <thead>
                <tr>
                    <th>Product /offer</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Type</th>
                  
                </tr>
                </thead>
                <tbody>
                    @foreach ($orderitems as $orderitem) 
                        <tr> 
                            @if ($orderitem->offer_id!=null)
                            @foreach ($offers as $offer)
                            @if ($offer->id == $orderitem->offer_id)
                                <td>
                                    <a href="/offerdetails/{{$offer->id}}">
                                        <img src="{{ asset('storage/' . $offer->offer_image1) }}" alt="image" height="50" width="50">
                                    </a>
                                    {{ $offer->name }}
                                </td>
                                <td>$ {{ $offer->price }}</td>
                                <td>{{ $orderitem->quantity }}</td>
                                <td>offer</td>
                            @endif
                        @endforeach 
                            @else
                            @foreach ($products as $product)
                            @if ($product->id == $orderitem->product_id)
                                <td>
                                    <a href="/productdetails/{{$product->id}}">
                                        <img src="{{ asset('storage/' . $product->image1) }}" alt="image" height="50" width="50">
                                    </a>
                                    {{ $product->name }}
                                </td>
                                <td>$ {{ $product->price }}</td>
                                <td>{{ $orderitem->quantity }}</td>
                                <td>product</td>
                            @endif
                        @endforeach 
                            @endif
                           
                        </tr>  
                    @endforeach
                </tbody>
                
            </table>
                
            
        </div>
    </div>
</div>
