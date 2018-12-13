@extends('layouts.app')

@section('content')
    <head>
        <script type="text/javascript">
            /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
            (function(d, m){
                var kommunicateSettings = {"appId":"1d7620ff69169e0e084616cc52611bf4b","botIds":["Jarvis"],"conversationTitle":"FAQ Bot"};
                var s = document.createElement("script"); s.type = "text/javascript"; s.async = false;
                s.src = "https://api.kommunicate.io/kommunicate.app";
                var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
                window.kommunicate = m; m._globals = kommunicateSettings;
            })(document, window.kommunicate || {});
        </script>
    </head>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Questions
                        <a class="btn btn-primary float-right" href="{{ route('questions.create') }}">
                            Create a question
                        </a>
                        {{--<a class="btn btn-primary float-right" href="#">
                            Create a Question
                        </a>--}}

                        <div class="card-body">

                            <div class="card-deck">
                                @forelse($questions as $question)
                                    <div class="col-sm-4 d-flex align-items-stretch">
                                        <div class="card mb-3 ">
                                            <div class="card-header">
                                                <small class="text-muted">
                                                    Updated: {{ $question->created_at->diffForHumans() }}
                                                    Answers: {{ $question->answers()->count() }}

                                                </small>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{$question->body}}</p>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text">

                                                    <a class="btn btn-primary float-right" href="{{ route('questions.show', ['id' => $question->id]) }}">
                                                        View
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    There are no questions, you can create one.

                                @endforelse


                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                {{ $questions->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection