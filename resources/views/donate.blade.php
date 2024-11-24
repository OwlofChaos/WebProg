@extends('layouts.app')

@section('title', 'Donate')

@section('content')
<div class="container-fluid" style="background-color: #34BCF2; color: black; min-height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand text-white" href="#" style="font-weight: bold;">OCEAN</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="#">Donate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Impact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Projects</a>
                </li>
            </ul>
        </div>
        <div>
            <a href="#" class="btn btn-outline-light">Register</a>
            <a href="#" class="btn btn-outline-light">Login</a>
        </div>
    </nav>

    <div class="text-center py-4">
    <div class="d-flex justify-content-center">
        <div>
        <h1 class="fw-bold">We Need Your Help</h1>
        <p>Your donation helps clean the oceans and protect marine life from pollution. Together, we can restore ocean health and create a sustainable future for all.</p>
        <div class="d-flex justify-content-center">
            <div>
                <form method="POST" action="{{ route('donate.submit') }}">
                    @csrf
                    <div class="row justify-content-center">
                        @foreach([150000, 300000, 450000, 600000, 750000, 950000] as $amount)
                            <div class="col-md-2 mb-2">
                                <button type="button" class="btn btn-light btn-block donate-amount" style="border-radius: 50px; padding: 10px 20px; font-size: 16px;" data-amount="{{ $amount }}">
                                    Rp {{ number_format($amount, 0, '.', '.') }}
                                </button>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        <input type="text" name="other" class="form-control text-center" style="border-radius: 30px;" placeholder="Other Amount" id="other-amount">
                    </div>
                    <input type="hidden" name="amount" id="selected-amount">
                    <button type="submit" class="btn btn-primary mt-4" style=" padding: 10px 40px; background-color: #ffffff; color: black;">Donate</button>
                </form>
            </div>
        </div>
        </div>
        <div class="ms-5">
                <img src="images\360_F_825525872_EhpRImtjshJG3YZLsUBYL7okymarEimp.jpg" alt="Beach Cleanup" style="max-width: 100%; height: auto; border-radius: 0 194px 194px 0;">
        </div>
        </div>
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
