@extends('layouts.app')

@section('title', 'Home')

@section('content')

<head>
    <style>
        body{
            background-color: #34BCF2;
        }

        .container {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 20px;
        }

        .content {
            max-width: 600px;
        }

        h1{
           position: absolute;
           width: 653px;
           height: 139px;
           left: 500px;
           top: 200px;

           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           font-style: normal;
           font-weight: 600;
           font-size: 38px;
           line-height: 70px;
           color: #FFFFFF;
           margin: 0;
           
        }

        h2{

           position: absolute;
           width: 389px;
           height: 53px;
           left: 516px;
           top: 280px;

           font-family: 'Poppins';
           font-style: normal;
           font-weight: 300;
           font-size: 20px;
           line-height: 26px;

           color: #FFFFFF;


        }

        button{
            position: absolute;
            width: 160px;
            height: 52px;
            left: 516px;
            top: 380px;
            font-weight: bold;
            border: none;
            border-radius: 10px
        }

        .rectangle{
            position: absolute;
            width: 548px;
            height: 193px;
            left: 503px;
            top: 480px;
            background: #5FD58C;
            border-radius: 10px 0px 0px 10px;


        }

        .raised_1{
         font-family: 'Poppins';
         padding: 60px 70px 0px 70px;
         font-style: normal;
         font-weight: 400;
         font-size: 44px;
         line-height: 26px;
         color: #002147;


        }

        .raisedm{
        font-family: 'Poppins';
         padding: 10px 70px 0px 70px;
         font-style: normal;
         font-weight: 400;
         font-size: 44px;
         line-height: 26px;
         color: #002147;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="content">
     <h1 class="judul"> Fundraise for a great cause</h1>
     <h2>Help create a clean ocean for the benefit of all living beings on Earth.</h2>
     <button style="font-size: 15px; background-color: #FFFFFF;" onclick="window.location.href='{{ route('donate.index') }}'">DONATE NOW</button>
     <div class="rectangle">
        <h3 class="raised_1">
            Raised so far
        </h3>
        <h3 class="raisedm">
            Rp 50.467.893
        </h3>
     </div>

    </div>
    <img src="/images/v11_4.png" alt="" style="width: 550px; height: 600px; left: 951px; right: 192px; border-radius: 100px 0px; position: absolute; bottom: 238px; object-fit: cover; margin-left: 20px;">
    </div>
</body>
@endsection