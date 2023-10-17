@extends('layouts.review');

@section('content')
<br>
<br>
<br>
<br>
 <br>
 <br>
 <br>

<table class="table table-striped">
    <tr>
        <td>id</td>
        <td>title</td>
        <td>istrue</td>
        <td>question</td>
    </tr>
    @foreach ($answers as $answer )
    <tr>
        <td>{{$answer->id}} </td>
        <td>{{$answer->title}} </td>
        <td>{{$answer->istrue}} </td>
        <td>{{$answer->question->questiontext}}</td>
    </tr>

    @endforeach
    <tr></tr>
</table>
@endsection
