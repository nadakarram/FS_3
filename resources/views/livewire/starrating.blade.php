<!-- resources/views/livewire/star-rating.blade.php -->
<form action="" wire:submit="addreview">
   @if ($massage!="")
   <div class="alert alert-warning">
    {{$massage}}

   </div>
       
   @endif
    <div class="star-rating mb-5">
        @for ($i = 1; $i <= 5; $i++)
            <i class="fas fa-star fs-5 {{ $rating >= $i ? 'text-purpel' : 'text-secondary' }}" 
               wire:click="setRating({{ $i }})" style="cursor: pointer;"></i>
        @endfor
        <input type="hidden" name="{{$name}}" wire:model="rating" >
    </div>
    
    <textarea placeholder="Descripe your Experence (optional)" id="review_text" class=" p-2 w-100" cols="60" rows="7" wire:model="review_text"></textarea>
        
    <p>
        Reviews are public and include your account and device info. Everyone can see your Google Account name and photo, and the type of device associated with your review. Developers can also see your country and device information (such as language, model, and OS version) and may use this information to respond to you. Past edits are visible to users and the app developer unless you delete your review

    </p>
    <input type="submit" class="btn btn-purple-outline">
  </form>

