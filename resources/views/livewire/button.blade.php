<div class="cards">
    @if($flipped)
        <button class="flip-button" wire:click="flip">
            <label for="" class="label_3">1</label>
        </button>
    @else
        <label for="" class="label_1">chose me</label>
        <label for="" class="label_2 h1">1</label>
    @endif
</div>
