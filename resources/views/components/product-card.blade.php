@props(['product'])

<x-card class="relative sm:w-[100%] md:w-[50%] lg:w-[23%] m-[15px 0] p-[10px] rounded-[25px] border border-solid hover:shadow-lg hover:transition-700">
    <div class="absolute left-5 top-5 p-2 w-auto featured rounded-full text-slate-300 text-[10px]">Best Seller</div>
    @if ($product->product_name === "Apples")
    <img class="rounded-[20px] w-full" src="images/apple.jpg">
    @else
    <img class="rounded-[20px] w-full" src="images/orange.jpg">
    @endif
    <div class="text-start p-1.5">
        <span class="text-[#606063] text-sm">Yule Farm</span>
        <h1 class="text-xl font-light">{{$product->product_name}}</h1>
        <div class="star">
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
        </div>
        <span class="text-sm"><i class='bx bx-wallet' ></i> Available Cash on Delivery</span>
        <br>
        <span class="text-sm"><i class='bx bx-package'></i> ₱{{$product->product_price}} per dozen</span>
        <br>
        <span class="text-sm"><i class='bx bxs-truck'></i> Stocks Available: {{$product->product_quantity}}</span>
    </div>
    <a href="/addtocart/{{$product->id}}"><i class='bx bx-basket mt-2 w-10 h-10 text-2xl leading-10 rounded-full border border-solid absolute right-5 bottom-5 bg-[#e8f6ea] text-green-300'></i></a>
</x-card>