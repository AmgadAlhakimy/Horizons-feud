<div>
    <div class="cards m-0">
        <button
            wire:click="flip"
            class="flip-button {{ $flipped ? 'flipped' : '' }}" onclick="handleButtonClick()">
            <label for="" class="label_3">{{$questionId}}</label>
        </button>
        <audio id="flip-audio" src="{{ asset('sounds/family-feud-good-answer.mp3') }}" preload="auto"></audio>

        <label for="" class="label_1">{{$answerName}}</label>
        <label for="" class="label_2 h1">{{$answerValue}}</label>

    </div>

    <script>
        function handleButtonClick() {
            const audio = document.getElementById('flip-audio');
            audio.currentTime = 0; // Rewind to the start
            audio.play();
        }
    </script>
</div>
