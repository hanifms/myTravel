@extends('master.layout')
@section('content')
<div class="container">
    <h1>{{ $package->packageName }}</h1>
    <p>{{ $package->description }}</p>
    <p>Price: ${{ $package->price }}</p>
    <p>Duration: {{ $package->duration }} days</p>
    <p>Itinerary: {{ $package->itinerary }}</p>
    <p>Status: {{ $package->availabilityStatus ? 'Available' : 'Unavailable' }}</p>
</div>
@endsection
