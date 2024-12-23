@extends('layouts.app')

@section('title', 'Impact')

@section('content')

<div class="impact-page" style="background-color: #34BCF2; padding: 3em; color: white; text-align: center; font-family: Arial, sans-serif;">
    
    <div class="impact-header">
        <h2>Our Impact</h2>
        <div style="display: flex; justify-content: center; gap: 2em; margin-top: 1em;">
            <div>
                <img src="/images/image_4.jpg" alt="Before" style="width: 443px; Height:314px; border-radius: 10px; object-fit: cover;">
                <p>Before</p>
            </div>
            <div>
                <img src="/images/image_5.jpg" alt="After" style="width: 443px; Height:314px; border-radius: 10px; object-fit: cover;">
                <p>After</p>
            </div>
        </div>
    </div>

    
    <div class="cleanup-projects" style="margin-top: 3em;">
        <h3>Cleanup Projects</h3>
        <div style="display: flex; justify-content: center; gap: 2em; margin-top: 1em;">
            
            <div style="background-color: white; color: black; padding: 1em; border-radius: 10px; width: 45%; ">
                <img src="/images/image_6.jpg" alt="Project 1" style="width: 752px; height:379px; border-radius: 10px; object-fit: cover;">
                <p style="margin-top: 20px"><strong>Name Event:</strong> Ocean Renew Day</p>
                <p><strong>Location:</strong> Raya Beach</p>
                <p><strong>Date:</strong> 3 June 2022</p>
            </div>
            
            <div style="background-color: white; color: black; padding: 1em; border-radius: 10px; width: 45%;">
                <img src="/images/image_7.jpg" alt="Project 2" style="width: 752px; height:379px; border-radius: 10px; object-fit: cover;">
                <p style="margin-top: 20px"><strong>Name Event:</strong> Beach Rescue Blitz</p>
                <p><strong>Location:</strong> Mutiara Beach</p>
                <p><strong>Date:</strong> 21 October 2022</p>
            </div>
        </div>
    </div>

    
    <div class="impact-statistics" style="margin-top: 3em;">
        <h3>Impact Statistics (Overall Projects)</h3>
        <div style="display: flex; justify-content: center; gap: 3em; margin-top: 1em;">
            <div>
                <h1>200</h1>
                <p>Tons of waste removed</p>
            </div>
            <div>
                <h1>500</h1>
                <p>Volunteers</p>
            </div>
            <div>
                <h1>56</h1>
                <p>Hours volunteered</p>
            </div>
        </div>
    </div>
</div>


@endsection