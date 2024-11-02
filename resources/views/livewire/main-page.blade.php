<div class="containers ">
    <label class="col-12 text-center mt-2 title" for="">New Horizons Feud</label>
    <div class="line col-12"></div>
    <br>
    <div class="col-12 text-center">
        <label for="" class=" main_label">
                        {{$question->name}}
        </label>
    </div>
        <button><label for="" class="label_4 h1">{{$score->current}}</label></button>
    <div class="col-12 text-center">
        <label for="" class="main_label text-white">
            <div id="score-display" class="score-display">Current Score: 0</div>
        </label>
    </div>

    <div class="container_2">
        <!-- cars 1 -->
        <div class="card_contain me-2 ms-2 ">
            <div class="row points">
                <div class="col">
                    <label for="" class="label_4 h1">0</label>
                </div>
                <div class="col">
                    <?php $counter = 0 ?>
                    @foreach($question->answers as $answer)
                            <?php $counter++ ?>
                        @if($counter<=4)
                            @livewire('flip-button',[
                            'answerName'=> $answer->name,
                            'answerValue'=> $answer->value,
                            'questionId'=> $answer->question_id,
                            key($answer->question_id)
                            ])
                        @endif
                    @endforeach
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-white"> The Number OF Question {{$qNum}}</p>
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
                            'questionId'=> $answer->question_id,
                            key($answer->question_id)
                            ])
                        @endif
                    @endforeach
                </div>
                <div class="col">
                    <label for="" class="label_4 h1">0</label>
                </div>
            </div>
        </div>
    </div>
    <div class="line col-12 mt-3"></div>
    <div class="footer_buttons">
        <button class="footer_button_1">Award team 1</button>
        <button class="footer_button" wire:click="increment">
            Next Q?
            </a>
        </button>
        <button class="footer_button">Wrong</button>
        <button class="footer_button_2">Award team 2</button>
    </div>
</div>
