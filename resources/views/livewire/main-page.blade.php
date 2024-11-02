<div class="containers ">
    <div class="row tilte_photo">
        <img  class="COL cards_img_1" src="{{URL::asset('images/2.png')}}" alt="skills"/>        
        <label class="col text-center mt-2 title" for="">New Horizons Feud</label>
    </div>
    <div class="line col-12"></div>
    <br>
    <div class="col-12 text-center">
        <label for="" class=" main_label">
                        {{$question->name}}
        </label>
    </div>
    <div class="col-12 text-center">
    <label for="" class="label_4 h1">{{$score->current}}</label>
{{--            <div id="score-display" class="score-display">Current Score: 0</div>--}}
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
                   @livewire('award2')
                </div>
            </div>
        </div>
    </div>
    <div class="line col-12 mt-3"></div>
    <button class="footer_button" wire:click="increment">
        Next Q?
    </button>

</div>
