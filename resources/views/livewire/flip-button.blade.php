<div>
    <div class="cards m-2">
        <button
            wire:click="flip"
            class="flip-button {{ $flipped ? 'flipped' : '' }}"
            onclick="handleButtonClick()">
            <label class="label_3">{{$questionId}}</label>
        </button>
        <audio id="flip-audio" src="{{ asset('sounds/family-feud-good-answer.mp3') }}" preload="auto"></audio>

        <label class="label_1">{{$answerName}}</label>
        <label class="label_2 h1">{{$answerValue}}</label>
    </div>

    <script>
        let currentScore = 0;
        function handleButtonClick() {
            const audio = document.getElementById('flip-audio');
            audio.currentTime = 0; // Rewind to the start
            audio.play();

            // Update the score (you can customize how you calculate the score)
            currentScore += parseInt("{{$answerValue}}") || 0; // Assuming answerValue is a number
            document.getElementById('score-display').innerText = 'Current Score: ' + currentScore;
        }
    </script>
</div>
