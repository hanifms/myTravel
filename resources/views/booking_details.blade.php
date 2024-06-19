<link href="assets/css/style.css" rel="stylesheet">
@extends('master.layout')

@section('content')
<main id="main">
    <h1>Booking Details</h1>
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div class="booking-detail">
            <label for="package-id">Choose a Package:</label>
            <select id="package-id" name="package_id" required>
                <option value="">Select a package</option>
                @foreach($tour_packages as $tour_package)
                    <option value="{{ $tour_package->id }}" data-price="{{ $tour_package->price }}">
                        {{ $tour_package->packageName }} - ${{ $tour_package->price }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="booking-detail">
            <label for="booking-date">Booking Date:</label>
            <input type="date" id="booking-date" name="booking_date" required>
        </div>
        <div class="booking-detail">
            <label for="number-of-people">Number of People:</label>
            <input type="number" id="number-of-people" name="number_of_people" min="1" required>
        </div>
        <div class="booking-detail">
            <label for="total-price">Total Price:</label>
            <input type="number" id="total-price" name="total_price" readonly>
        </div>
        <div class="booking-detail">
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const packageSelect = document.getElementById('package-id');
        const numberOfPeopleInput = document.getElementById('number-of-people');
        const totalPriceInput = document.getElementById('total-price');

        function updateTotalPrice() {
            const selectedPackage = packageSelect.options[packageSelect.selectedIndex];
            const pricePerPerson = parseFloat(selectedPackage.getAttribute('data-price')) || 0;
            const numberOfPeople = parseInt(numberOfPeopleInput.value) || 0;
            const totalPrice = numberOfPeople * pricePerPerson;
            totalPriceInput.value = totalPrice.toFixed(2);
        }

        // Initial update when the page loads
        updateTotalPrice();

        // Event listeners for changes in package selection and number of people
        packageSelect.addEventListener('change', updateTotalPrice);
        numberOfPeopleInput.addEventListener('input', updateTotalPrice);
    });
</script>

@endsection
