<div class="containers">
    <div class="row title_photo">
        <img  class="COL cards_img_1" src="{{URL::asset('images/2.png')}}" alt="skills"/>
        <label class="col text-center  title" for="">Teachers Feud</label>
    </div>
    <div class="line col-12"></div>
    <div class="col-12 text-center">
        <label for="" id="score-display" class="mt-1 title">CURRENT SCORE 0</label>
    </div>

    <div class="container_2">
        <!-- cars 1 -->
        <div class="card_contain me-2 ms-2 ">
            <div class="row points">
                <div class="col">
                    @livewire('award1')
                </div>
                <div class="col">
                    <?php $counter = 0 ?>
                    @foreach($question->answers as $answer)
                            <?php $counter++ ?>
                        @if($counter<=4)
                            @livewire('flip-button',[
                            'answerName'=> $answer->name,
                            'answerValue'=> $answer->value,
                            'questionId'=> $counter,
                            key($answer->question_id)
                            ])
                        @endif
                    @endforeach
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cars 1 -->
        <div class="card_contain me-2 ms-2 ">
            <div class="row points">
                <div class="col">
                    <?php $counter = 0 ?>
                    @foreach($question->answers as $answer)
                            <?php $counter++ ?>
                        @if($counter>4)
                            @livewire('flip-button',[
                            'answerName'=> $answer->name,
                            'answerValue'=> $answer->value,
                            'questionId'=> $counter,
                            key($answer->question_id)
                            ])
                        @endif
                    @endforeach
                </div>
                <div class="col">
                    @livewire('award2')
                </div>
            </div>
        </div>
    </div>
    <div class="line col-12 mt-2 mb-3"></div>
{{--    <div class="m-5"></div>--}}
    <a class="main_btn" href="{{ route('bell') }}">
        <button id="bell-question" class="footer_button" hidden="">
          Bell Q
        </button>
    </a>
    @if($qNum < 3 )
        <a class="main_btn">
            <button class="footer_button" wire:click="increment" onclick="loadNextQuestion()">
                Next Q? {{$question->id}}
            </button>
        </a>
    @else
        <a class="main_btn" href="{{ route('final') }}">
            <button class="footer_button">
                Next Q? {{$question->id}}
            </button>
        </a>
    @endif
    <div class="m-5"></div>
    <a class="main_btn" href="{{ route('survey') }}">
        <button class="footer_button">
            Survey Says
        </button>
    </a>
    <div class="m-5"></div>
    <a class="main_btn" href="{{ route('final') }}">
        <button class="footer_button">
            Final Score
        </button>
    </a>

    <label id="wrong-answer-button" onclick="enlargeImage()">
        <img id="wrong-answer-image" class="normal-size1 img_d" src="{{ URL::asset('images/Wrong.svg') }}"
             alt="Wrong Answer"/>
    </label>
    <audio id="calm-down-audio" src="{{ asset('sounds/calm-down.mp3') }}" preload="auto"></audio>
    <audio id="final-audio" src="{{ asset('sounds/final-audio.mp3') }}" preload="auto"></audio>
    <audio id="dreamers-audio" src="{{ asset('sounds/dreamers.mp3') }}" preload="auto"></audio>
    <audio id="French-audio" src="{{ asset('sounds/French.mp3') }}" preload="auto"></audio>
    <audio id="wait-audio" src="{{ asset('sounds/wait.mp3') }}" preload="auto"></audio>
    <audio id="danza-audio" src="{{ asset('sounds/danza.mp3') }}" preload="auto"></audio>
    <audio id="wrong-audio" src="{{ asset('sounds/x.mp3') }}" preload="auto"></audio>
    <div class="image-container">
        <img id="wrong-answer-image1" class="normal-size1" src="{{ URL::asset('images/Wrong.svg') }}"
             alt="Wrong Answer"/>
        <img id="wrong-answer-image2" class="normal-size1" src="{{ URL::asset('images/Wrong.svg') }}"
             alt="Wrong Answer"/>
        <img id="wrong-answer-image3" class="normal-size1" src="{{ URL::asset('images/Wrong.svg') }}" alt="Wrong Answer"/>
    </div>
</div>
