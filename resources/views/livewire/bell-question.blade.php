<div>
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    <div class="final-card">
        <h2 class="congrats">Question {{$qNum}}!</h2>
        @if($qNum === 1)
            <h1 class="title winner">How many classrooms and labs does New Horizons Al-Asbahi Branch have?</h1>
            <p class="won">23 Classrooms and 5 Labs</p>
        @elseif($qNum === 2)
            <h1 class="title winner">How many teachers are there at New Horizons Al-Asbahi Branch?</h1>
            <p class="won">32 Teachers</p>
        @elseif($qNum === 3)
            <h1 class="title winner">How old is Mr. Labeeb?</h1>
            <p class="won">41</p>
        @else
            <h1 class="title winner">This is the pre-question.</h1>
        @endif
    </div>
    <div class="line col-12 mt-2 mb-3"></div>
    <div class="m-5"></div>
    <a class="main_btn content-center">
        <button id="nextQ" class="footer_button" wire:click="increment" hidden="">
            Next Q
        </button>
    </a>
    <script src="{{URL::asset('js/main.js')}}"></script>
</div>
