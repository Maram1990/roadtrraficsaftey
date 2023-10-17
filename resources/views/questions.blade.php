@extends('layouts.review');
@section('content')
<br>
<br>
@foreach ($questions as $question)



<div class="container   mx-auto mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            <div class="border">

                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <span>(5 of 20)</span></div>
                </div>
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row align-items-center question-title">

                        <h5 class="mt-1 ml-2">{{$question->questiontext}}</h5>
                    </div>
                </div>

                    <div class="question bg-white p-3 border-bottom">

                        @if (count($question->answer))
        @foreach($question->answer as $answer)
        <h6>{{$answer->title}}</h6>

        @endforeach
    @else
        No answers Found
    @endif

               <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">التالي<i class="fa fa-angle-right ml-2"></i></button></div>
            </div>
        </div>
    </div>
</div>
@endforeach

<br>

@endsection

