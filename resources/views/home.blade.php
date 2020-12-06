@extends('layouts.main')
@section('content')
    <nav>
        <ul>
            <li>Name</li>
            <li>Maker</li>
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
                <li>{{$cr->make}}</li>
                <li>{{$cr->license_number}}</li>
                <li>{{$cr->weight}}</li>
                <li>{{$cr->registration_year}}</li>
                <li>{{$cr->getAge()}}</li>
            </ul>
        @endforeach
        <form action="companies/create" method="POST">
            @csrf
            <ul>
                <li><input type="text" name="name" id="name"></li>
                <li><input type="text" name="make" id="make"></li>
                <li><input type="text" name="license_number" id="license_number"></li>
                <li><input type="text" name="weight" id="weight"></li>
                <li><input type="text" name="registration_year" id="registration_year"></li>
                <li><button type="submit" style="background:grey;">Save</button></li>
            </ul>
        </form>
    </nav>
@endsection
