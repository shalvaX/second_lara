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
            <form action="car/create" method="POST">
                @csrf
                <ul>
                    <li><input type="text" name="name" id="name"></li>
                    <li class="active"><input type="text" name="make" id="make"></li>
                    <li><input type="text" name="license_number" id="license_number"></li>
                    <li><input type="text" name="weight" id="weight"></li>
                    <li><input type="text" name="registration_year" id="registration_year"></li>
                    <li><input type="text" name="age" id="age"></li>
                </ul>
                <button type="submit">Save</button>
            </form>
    </nav>
@endsection
