@extends('layouts.app')

@section('title', 'Donate')

@section('content')
    <div class="text-center py-4">
        <div class="d-flex justify-content-center">
            <div>
                <h1 class="fw-bold" style="font-size: 72px; color: black;">We Need Your Help</h1>
                <p style="font-size: 20px; color: black;">Your donation helps clean the oceans and protect marine life from pollution. Together, we can restore ocean health and create a sustainable future for all.</p>
                <div class="d-flex justify-content-center">
                    <div>
                        <p style="font-size: 20px; color: black;">Amount*</p>
                        <form method="POST" action="{{ route('donate.submit') }}">
                            @csrf
                            <div class="row justify-content-center">
                                @foreach([150000, 300000, 450000] as $amount)
                                    <div class="col-md-4 mb-2">
                                        <button type="button" class="btn btn-light btn-block donate-amount" style="border-radius: 10px; padding: 10px 20px; font-size: 20px; width: 240px;" data-amount="{{ $amount }}">
                                            Rp {{ number_format($amount, 0, '.', '.') }}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row justify-content-center mt-2">
                                @foreach([600000, 750000, 950000] as $amount)
                                    <div class="col-md-4 mb-2">
                                        <button type="button" class="btn btn-light btn-block donate-amount" style="border-radius: 10px; padding: 10px 20px; font-size: 20px; width: 240px;" data-amount="{{ $amount }}">
                                            Rp {{ number_format($amount, 0, '.', '.') }}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4">
                                <p style="font-size: 20px; color: black;">Other</p>
                                <input type="text" name="other" class="form-control text-center" style="border-radius: 10px;" placeholder="Other Amount" id="other-amount">
                            </div>
                            <input type="hidden" name="amount" id="selected-amount">
                            <button type="submit" class="btn btn-primary mt-4 fw-bold border-0" style="padding: 10px 40px; background-color: #ffffff; font-size: 16px; color: black;">Donate</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ms-5">
                <img src="images\360_F_825525872_EhpRImtjshJG3YZLsUBYL7okymarEimp.jpg" alt="Beach Cleanup" style="max-width: 100%; height: auto; border-radius: 0 194px 194px 0;">
            </div>
        </div>

        <div class="text-center py-4">
            <h2>Total Donations: Rp {{ number_format($totalDonations, 0, '.', '.') }}</h2>
        </div>
    </div>

    <script>
        document.querySelectorAll('.donate-amount').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.donate-amount').forEach(btn => btn.classList.remove('active'));
                document.getElementById('selected-amount').value = this.dataset.amount;
                this.classList.add('active');
                document.getElementById('other-amount').value = '';
            });
        });

        document.getElementById('other-amount').addEventListener('input', function() {
            document.querySelectorAll('.donate-amount').forEach(btn => btn.classList.remove('active'));
            document.getElementById('selected-amount').value = this.value;
        });
    </script>
@endsection
