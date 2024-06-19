@extends('master.layout')
@section('content')

<main id="main">
    <h1>Booking Details</h1>
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <input type="hidden" name="packageId" value="{{ $package->id }}">
        <div class="booking-detail">
            <label for="booking-date">Booking Date:</label>
            <input type="date" id="booking-date" name="bookingDate" required>
        </div>
        <div class="booking-detail">
            <label for="number-of-people">Number of People:</label>
            <input type="number" id="number-of-people" name="numberOfPeople" min="1" required>
        </div>
        <div class="booking-detail">
            <label for="total-price">Total Price:</label>
            <input type="number" id="total-price" name="totalPrice" readonly>
        </div>
        <div class="booking-detail">
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const numberOfPeopleInput = document.getElementById('number-of-people');
            const totalPriceInput = document.getElementById('total-price');
            const pricePerPerson = {{ $tour_packages->price }}; // Get the price from the database

            numberOfPeopleInput.addEventListener('input', function() {
                const numberOfPeople = parseInt(numberOfPeopleInput.value) || 0;
                const totalPrice = numberOfPeople * pricePerPerson;
                totalPriceInput.value = totalPrice.toFixed(2);
            });
        });
    </script>
  @endsection
