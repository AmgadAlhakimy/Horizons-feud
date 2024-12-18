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

    </head>
    <body>

    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="form-container">
            <h2 class="text-center title">Enter Your Question</h2>
            <form action="{{route('questions.store')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <textarea class="form-control text-center title_3" id="question" rows="3" placeholder="Type your question here..."
                         name="name"     ></textarea>
                    @error('name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit Question</button>
            </form>
        </div>
    </div>
    </body>
</div>
