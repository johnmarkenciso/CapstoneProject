@props(['product'])

<x-card class="m-2 p-2 content-center rounded">
    <img class="rounded h-44" src="images/apple.jpg">
    <div class="text-start p-10">
        <span>Sample Farm</span>
        <h5>{{$product->product_name}}</h5>
        <div class="star">
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
            <i class='bx bxs-star text-yellow-500'></i>
        </div>
        <span><i class='bx bx-wallet' ></i> Available Cash on Delivery</span>
        <br>
        <span><i class='bx bx-package'></i> ₱{{$product->product_price}} per dozen</span>
        <br>
        <span><i class='bx bxs-truck'></i> Stocks Available: {{$product->product_quantity}}</span>
        
    </div>
    <a href="#"><i class='bx bx-basket new-cart text-success'></i></a>
</x-card>