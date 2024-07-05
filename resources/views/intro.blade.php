<!-- resources/views/intro.blade.php -->
@extends('home')
@section('title', 'Intro Page')

@section('content')
<section class="my-[20px]">
    <div class="grid grid-cols-2">
        <img class="rounded-lg" src="https://i.ytimg.com/vi/9Mnr5wyvCEQ/maxresdefault.jpg" alt="">
        <div class="p-7">
            <h1 class="uppercase font-bold text-center text-[30px] py-[10px]">How about KIN-G</h1>
            <p>Cars are not only a common means of transportation but also a symbol of comfort and class in modern life. From fuel-efficient sedans to powerful SUVs and awe-inspiring sports cars, the world of cars offers us not just choice but connection to technology and style. contemporary living. Let's explore the rich world of cars, where innovation never stops, and each car brings a unique story.</p>
        </div>
    </div>
    <div class="grid grid-cols-2">
        <div class="p-14">
            <h1 class="uppercase font-bold text-center text-[30px] py-[10px]">KIN-G FOR ALL</h1>
            <p>You can add details such as the history of the car's development, advanced technologies in the car industry, or the latest trends in car design and environmental protection.</p>
        </div>
        <img class="rounded-lg" src="https://i.ytimg.com/vi/LJeqoZ84tbg/maxresdefault.jpg" alt="">
    </div>
</section>
@endsection