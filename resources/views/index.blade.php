@extends('home')

@section('slide')
<img class="w-full h-[600px] object-cover" src="https://scr.vn/wp-content/uploads/2020/07/H%C3%ACnh-%E1%BA%A3nh-Si%C3%AAu-xe-Roll-Royce-%C4%91%E1%BA%B9p-scaled.jpg" alt="">
@endsection

@section('product')

<section>
    <div class="grid grid-cols-4 my-[20px]">
        @isset($arr)
        @foreach ($arr as $row)
        <div class='product-card p-3 hover:shadow-lg hover:border-2'>
            <div>
                <img class="w-full h-[350px] object-cover rounded-lg" src='{{ $row-> img }}' alt="">
            </div>
            <div class="my-[10px]">
                <div class="font-semibold text-center py-3">{{ $row->brand }} - {{ $row->model }}</div>
                <div class="flex justify-between">
                    <div>Price:<strong class="text-red-500 px-[5px]">{{ $row->price }} $</strong></div>
                    <div class="">Date:<strong class="text-red-500 px-[5px]">{{ $row->year }}</strong></div>
                </div>
                <div class=""></div>
            </div>
            <button class="w-full p-2 bg-black text-white">Order now</button>
        </div>
        @endforeach
        @else
        <p>No cars found.</p>
        @endisset
    </div>
</section>
@endsection