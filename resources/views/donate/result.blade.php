@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Thank you for your donation!</h1>
    <p>You have chosen to donate Rp {{ number_format($amount, 0, '.', '.') }}.</p>
    <a href="{{ route('donate.index') }}" class="btn btn-primary">Back to Donate Page</a>
</div>
@endsection
