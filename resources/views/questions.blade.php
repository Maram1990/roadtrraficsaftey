@extends('layouts.review');
@section('content')
<div>
    @foreach ($questions as $question)
    {{$question->questiontext}}
    @endforeach
</div>











@endsection
