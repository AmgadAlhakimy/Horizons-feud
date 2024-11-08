<div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Question Entry Form</title>
        <link href="{{URL::asset('css/bootstrap.min.css.map')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
        <title>3D Game Show Board</title>
    </head>
    <body>

    <div class="row title_photo">
        <img  class="COL cards_img_1" src="{{URL::asset('images/2.png')}}" alt="skills"/>
        <label class="col text-center  title" for="">Teachers Feud</label>
    </div>
    <div class="board-container">
        <div class="board">

                <!-- 5 rows with input fields -->
            <div class="align-middle">
            <h2 class="title_2 text-center text-">Survey Says</h2>
            </div>

            <div id="timer-container" class="">
                <div class="" id="countdown"></div>
            </div>

            <table>
                <tr>
                    <td><input id="textInput1" type="text" wire:model.live.debounce.3000ms="answer1" name="answer1"></td>
                    @if($indexes[0] == 1)
                        <td class="result">{{$result[0]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif
                    <td><input id="textInput5" type="text" wire:model.live.debounce.3000ms="answer5" name="answer5"></td>
                    @if($indexes[4] == 1)
                        <td class="result">{{$result[4]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif
                </tr>
                <tr>
                    <td><input id="textInput2" type="text" wire:model.live.debounce.3000ms="answer2" name="answer2"></td>
                    @if($indexes[1] == 1)
                        <td class="result">{{$result[1]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif
                    <td><input id="textInput6" type="text" wire:model.live.debounce.3000ms="answer6" name="answer6"></td>
                    @if($indexes[5] == 1)
                        <td class="result">{{$result[5]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif
                </tr>
                <tr>
                    <td><input id="textInput3" type="text" wire:model.live.debounce.3000ms="answer3" name="answer3"></td>
                    @if($indexes[2] == 1)
                        <td class="result">{{$result[2]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif
                    <td><input id="textInput7" type="text" wire:model.live.debounce.3000ms="answer7" name="answer7"></td>
                    @if($indexes[6] == 1)
                        <td class="result">{{$result[6]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif                </tr>
                <tr>
                    <td><input id="textInput4" type="text" wire:model.live.debounce.3000ms="answer4" name="answer4"></td>
                    @if($indexes[3] == 1)
                        <td class="result">{{$result[3]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif
                    <td><input id="textInput8" type="text" wire:model.live.debounce.3000ms="answer8" name="answer8"></td>
                    @if($indexes[7] == 1)
                        <td class="result">{{$result[7]}}</td>
                    @else
                        <td class="result">&nbsp;</td>
                    @endif
                </tr>
                <tr>
                    <td class="total"><input type="text" placeholder="Total" readonly></td>
                    <td class="result totalResult">{{$sum1}}</td>
                    <td class="total"><input type="text" placeholder="Total" readonly></td>
                    <td class="result totalResult">{{$sum2}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="m-2"></div>
    <div class="text-center">
        <a class="main_btn m-4" href="{{ route('index-page') }}">
            <button class="footer_button" type="button" wire:click="updateScore">
                Go Back
            </button>
        </a>
    </div>
    <label id="wrong-answer-button" onclick="enlargeImage()">
        <img id="wrong-answer-image" class="normal-size1 img_d" src="{{ URL::asset('images/Wrong.svg') }}"
             alt="Wrong Answer"/>
    </label>
    <audio id="survey-says-audio" src="{{ asset('sounds/survey-says.mp3') }}" preload="auto"></audio>
    <audio id="timer-start-audio" src="{{ asset('sounds/timer-start.mp3') }}" preload="auto"></audio>
    <audio id="time-is-up-audio" src="{{ asset('sounds/time-is-up.mp3') }}" preload="auto"></audio>
    <audio id="wrong-audio" src="{{ asset('sounds/x.mp3') }}" preload="auto"></audio>
    <audio id="you-said-audio" src="{{ asset('sounds/you-said.mp3') }}" preload="auto"></audio>
    <div class="image-container">
        <img id="wrong-answer-image1" class="normal-size1" src="{{ URL::asset('images/Wrong.svg') }}"
             alt="Wrong Answer"/>
        <img id="wrong-answer-image2" class="normal-size1" src="{{ URL::asset('images/Wrong.svg') }}"
             alt="Wrong Answer"/>
        <img id="wrong-answer-image3" class="normal-size1" src="{{ URL::asset('images/Wrong.svg') }}"
             alt="Wrong Answer"/>
    </div>
    @livewireScripts
    <script src="{{URL::asset('js/main.js')}}"></script>
    </body>
</div>
