<div class="cards ">
        <button class=" " wire:click="flip"     class="flip-button {{ $flipped ? 'flipped' : '' }}">
            <label for="" class="label_3"></label>{{$questionId}}</button>
        <label for="" class="label_1 ">{{$answerName}}</label>
        <label for="" class="label_2 h1">{{$answerValue}}</label>

        <style>
            .flip-button {
                transition: transform 0.6s;
                font-size: 16px;
                padding: 10px 20px;
                border: none;
                background-color: #007bff;
                color: white;
                cursor: pointer;
            }

            .flipped {
                transform: scaleY(0); /* Flips the button vertically */
            }
        </style>
</div>
