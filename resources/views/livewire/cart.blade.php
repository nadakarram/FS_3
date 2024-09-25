<div>
{{-- {{$producttype}} --}}
    <div class="d-flex align-items-center mt-3">
        <button class="btn btn-outline-secondary me-2" wire:click="decrementCart">-</button>
        <input type="text" class="form-control text-center" wire:model="cartquntity"  style="width: 50px;">
        <button class="btn btn-outline-secondary ms-2" wire:click="incrementCart">+</button>
    </div>
  @if ($massage=="product add")
  <p class="text-success"> {{$massage}}</p>
  @else
  <p class="text-warning"> {{$massage}}</p>
    @endif
  
    <div class="mt-4">
        <button wire:click="addtocart" class="btn btn-purple-outline me-2"><i class="fas fa-shopping-cart"></i> Add to cart</button>
        <a href="/cartlist" class="btn btn-purple">Checkout </a>
        <button wire:click="addtowhishlist" class="btn btn-purple-outline me-2"><i class="fas fa-heart"></i> Add to whishlist</button>

    </div>
</div>
