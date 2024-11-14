<div>
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    <div class="final-card">
        <h2 class="congrats">Congratulations!</h2>
        <img class="final-img" src="{{asset('images/trophy.png')}}" alt="Trophy Image">
        @if($score->team1 > $score->team2)
            <h1 class="title winner">Team ( 1 ) is the Winner!</h1>
            <p class="won">You won with {{$score->team1}} points!</p>
        @elseif($score->team1 < $score->team2)
            <h1 class="title winner">Team ( 2 ) is the Winner!</h1>
            <p class="won">You won with {{$score->team2}} points!</p>
        @elseif($score->team1 === 0 and  $score->team2 === 0 )
            <h1 class="title winner">Waiting for you!</h1>
        @else
            <h1 class="title winner">Both teams are the Winners!</h1>
            <p class="won">You won with {{$score->team1}} points!</p>
        @endif
        <audio id="winner-audio" src="{{ asset('sounds/winner.mp3') }}" preload="auto"></audio>

    </div>
    <audio id="calm-down-audio" src="{{ asset('sounds/calm-down.mp3') }}" preload="auto"></audio>
    <audio id="final-audio" src="{{ asset('sounds/final-audio.mp3') }}" preload="auto"></audio>
    <audio id="dreamers-audio" src="{{ asset('sounds/dreamers.mp3') }}" preload="auto"></audio>
    <audio id="French-audio" src="{{ asset('sounds/French.mp3') }}" preload="auto"></audio>
    <audio id="wait-audio" src="{{ asset('sounds/wait.mp3') }}" preload="auto"></audio>
    <audio id="danza-audio" src="{{ asset('sounds/danza.mp3') }}" preload="auto"></audio>
    <audio id="wrong-audio" src="{{ asset('sounds/x.mp3') }}" preload="auto"></audio>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script>
        window.onload = function () {
            launchConfetti(1, 1);
            launchConfetti(0, 1);
        };
    </script>
</div>
