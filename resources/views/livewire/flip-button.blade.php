<div>
    <div class="cards m-2 text-center">
        <button
            wire:click="flip"
            class="flip-button {{ $flipped ? 'flipped' : '' }}"
            onclick="handleButtonClick({{ $answerValue }})">
            <label class="label_3">{{$questionId}}</label>
        </button>
        <audio id="flip-audio" src="{{ asset('sounds/family-feud-good-answer.mp3') }}" preload="auto"></audio>

        <label class="label_1">{{$answerName}}</label>
        <label class="label_2 h1">{{$answerValue}}</label>
    </div>
</div>
