@extends('layouts.main')
@section('content')
    <div class = "list"><div class = "inside">Name  | </div></div>
    <div class = "list"><div class = "inside">Make  | </div></div>
    <div class = "list"><div class = "inside">License Number  | </div></div>
    <div class = "list"><div class = "inside">Name  | </div></div>
    <div class = "list"><div class = "inside">Name  | </div></div>
    <div class = "list"><div class = "inside">Name  | </div></div>
    <div class = "list"><div class = "inside">Name  | </div></div> <br>
    @foreach($cars as $cr)
        <div class="list">{{$cr->name}} |</div>
        <div class="list">{{$cr->make}} |</div>
        <div class="list">{{$cr->license_number}} |</div>
        <div class="list">{{$cr->weight}} |</div>
        <div class="list">{{$cr->registration_year}} |</div>
        <div class="list">{{$cr->age}}  |</div><br>
    @endforeach

@endsection
