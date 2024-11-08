<div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Answer Entry Form</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.min.css.map')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">


    </head>
    <body>

    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="form-container">
            <h2 class="text-center title">Enter Your Answers</h2>
            <form action="{{route('answers.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="question" class="title_2 ">Select a Question</label>
                    {{--                    <input type="text" class="form-control title_3" id="question" placeholder="Type your question here..." >--}}
                    <select class="form-select title_3" aria-label="Default select example" name="question_id">
                        <option selected>Open this select menu</option>
                    @foreach($questions as $question)
                        <option value="{{$question->id}}">{{$question->name}}</option>
                    @endforeach
                    </select>
                </div>
                <!-- Loop for eight answers -->
            <div class="ms-2 me-2 mt-3 mb-2 ">
                <div class="row mb-2">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer1" placeholder="Type answer 1..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value1" placeholder="Type value 1..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer2" placeholder="Type answer 2..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value2" placeholder="Type value 2..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer3" placeholder="Type answer 3..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value3" placeholder="Type value 3..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer4" placeholder="Type answer 4..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value4" placeholder="Type value 4..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer5" placeholder="Type answer 5..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value5" placeholder="Type value 5..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer6" placeholder="Type answer 6..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value6" placeholder="Type value 6..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer7" placeholder="Type answer 7..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value7" placeholder="Type value 7..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                    <input name="name[]" type="text" class="form-control title_3" id="answer8" placeholder="Type answer 8..." >
                    </div>
                    <div class="col">
                    <input name="value[]" type="text" class="form-control title_3" id="value8" placeholder="Type value 8..." >
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary btn-block">Submit Answers</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</div>
