<div class="containers ">
    <div class="row title_photo">
        <img  class="COL cards_img_1" src="{{URL::asset('images/2.png')}}" alt="skills"/>
        <label class="col text-center mt-2 title" for="">New Horizons Feud</label>
{{--        <div class="col-auto ms-auto text-end">--}}
{{--            <label class="text-white">--}}
{{--                Question {{$question->id}}--}}
{{--            </label>--}}
{{--        </div>--}}
    </div>
    <div class="line col-12"></div>
    <div class="col-12 text-center">
        <label for="" id="score-display" class="label_4 h1 mt-3">0</label>
            @livewire('award1')
    </div>

    <div class="container_2">
        <!-- cars 1 -->
            <div class="card_contain me-2 ms-2 ">
                <div class="row points">
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
    <div class="line col-12 mt-3 mb-5"></div>
    <button class="footer_button "  wire:click="increment" onclick="loadNextQuestion()">
        Next Q?
    </button>
    <button id="wrong-answer-button" onclick="enlargeImage()" >
        <img id="wrong-answer-image" class="normal-size img_d" src="{{ URL::asset('images/Wrong.svg') }}" alt="Wrong Answer"/>
    </button>
    <audio id="wrong-audio" src="{{ asset('sounds/the-family-feud-buzzer-sound-effect.mp3') }}" preload="auto"></audio>
</div>
