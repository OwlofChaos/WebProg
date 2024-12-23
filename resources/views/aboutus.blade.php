@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<div class="about-us-container" style="display: flex; flex-direction: row; align-items: center; background-color: #34BCF2; color: white; padding: 3em;">
    
    <!-- Images Section -->
    <div class="about-images" style="flex: 1; display: grid; grid-template-columns: repeat(2, 1fr); gap: 1em;">
        <img src="/images/global-ocean-cleanup-results-kenya-1.jpg" alt="Beach Cleanup 1" style="width: 228px; height: 254px; border-radius: 300px 0 0 0; object-fit: cover; margin-left: 100px; margin-bottom: 30px">
        <img src="/images/P6300209.jpg" alt="Beach Cleanup 2" style="width: 160px; height: 267px; border-radius: 0 300px 0 0; object-fit: cover; margin-bottom: 30px">
        <img src="/images/28-Slat-Ocean-Cleanup.jpg" alt="Beach Cleanup 3" style="width: 192px; height: 257px; border-radius: 0 0 0 300px; object-fit: cover; margin-left: 135px;">
        <!-- <img src="/images/Sorting-marine-litter-for-recycling-WMA-scaled.jpg" alt="Beach Cleanup 4" style="width: 187px; height: 135px; border-radius: 24px; object-fit: cover;"> -->
        <img src="/images/beachcleanup2.jpg" alt="Beach Cleanup 5" style="width: 229px; height: 214px; border-radius: 0 0 300px 0; object-fit: cover;">
    </div>

    <!-- Text Section -->
    <div class="about-text" style="flex: 1; color: #000000;">
        <h2 style="font-size: 63px">About Us</h2>
        <p style="font-size: 20px">
            At OCEAN, we are on a mission to restore and protect our oceans for future generations. 
            Every year, millions of tons of plastic and waste enter our oceans, threatening marine life, 
            coastal communities, and the health of our planet. We believe that through collective action 
            and innovation, we can make a lasting difference.
        </p>
        <p style="font-size: 20px">
            Our organization was founded by a group of passionate environmentalists, scientists, and 
            community leaders who share a common goal: to rid the oceans of pollution and inspire global change. 
            We partner with individuals, businesses, and nonprofits around the world to fund ocean cleanup projects, 
            promote sustainable practices, and educate communities about the importance of preserving marine ecosystems.
        </p>
    </div>
</div>

@endsection

