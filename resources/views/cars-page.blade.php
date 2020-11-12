@extends('layouts.main')
@section('content')
    <nav>
        <ul>
            <li>Name</li>
            <li class="active">Maker</li>
            <li>License Number</li>
            <li>Weight</li>
            <li>Registration Year</li>
            <li>Age</li>
        </ul>
    </nav>
    <nav>
    @foreach($cars as $cr)
            <ul>
                <li>{{$cr->name}}</li>
                <li class="active">{{$cr->make}}</li>
                <li>{{$cr->license_number}}</li>
                <li>{{$cr->weight}}</li>
                <li>{{$cr->registration_year}}</li>
                <li>{{$cr->age}}</li>
            </ul>
    @endforeach
    </nav>
    <a href="/car/create">Create new</a>
@endsection
