<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{URL::asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/all.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css.map')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">

    <title></title>
</head>
<body>
    <div class="containers ">
        <label class="col-12 text-center mt-2 title" for="">New Horizons Feud</label>

        <div class="line col-12"></div>
            <a class="btn btn-primary btn-lg" href="{{route('questions.create')}}">Add a question</a>
        <button>  <label for="" class="label_4 h1">0</label>   </button>
            <a class="btn btn-primary btn-lg" href="{{route('answers.create')}}">Add answers</a>
        <div class="col-12 text-center">
            <label for="" class=" main_label">Write your question here</label>
        </div>

        <div class="container_2">
            <!-- cars 1 -->
            <div class="card_contain me-2 ms-2 ">
                <div class="row points">
                    <div class="col">
                        <label for="" class="label_4 h1">0</label>
                    </div>
                    <div class="col">
                        <!-- 1 -->
                        @livewire('button')
                        <!-- 2 -->
                        @livewire('button')
                        @livewire('button')
                        @livewire('button')
                        <!-- 3 -->
{{--                        <div class="cards ">--}}
{{--                            <label for="" class="label_1 ">chose me</label>--}}
{{--                            <label for="" class="label_2 h1">1</label>--}}
{{--                            <button class=" "><label for="" class="label_3">1</label></button>--}}
{{--                        </div>--}}
{{--                        <!-- 4 -->--}}
{{--                        <div class="cards ">--}}
{{--                            <label for="" class="label_1 ">chose me</label>--}}
{{--                            <label for="" class="label_2 h1">1</label>--}}
{{--                            <button class=" "><label for="" class="label_3">1</label></button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- cars 1 -->
            <div class="card_contain me-2 ms-2 ">
                <div class="row points">
                    <div class="col">
                        <!-- 1 -->
                        <div class="cards ">
                            <lable for="" class="label_1 ">chose me</lable>
                            <label for="" class="label_2 h1">1</label>
                            <button class=" "><label for="" class="label_3">1</label></button>
                        </div>
                        <!-- 2 -->
                        <div class="cards ">
                            <label for="" class="label_1 ">chose me</label>
                            <label for="" class="label_2 h1">1</label>
                            <button class=" "><label for="" class="label_3">1</label></button>
                        </div>
                        <!-- 3 -->
                        <div class="cards ">
                            <label for="" class="label_1 ">chose me</label>
                            <label for="" class="label_2 h1">1</label>
                            <button class=" "><label for="" class="label_3">1</label></button>
                        </div>
                        <!-- 4 -->
                        <div class="cards ">
                            <label for="" class="label_1 ">chose me</label>
                            <label for="" class="label_2 h1">1</label>
                            <button class=" "><label for="" class="label_3">1</label></button>
                        </div>
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
            <button class="footer_button">New q</button>
            <button class="footer_button">Wrong</button>
            <button class="footer_button_2">Award team 2</button>
        </div>
    </div>
</body>
</html>
