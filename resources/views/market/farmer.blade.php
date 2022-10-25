<x-layout>
    <x-nav>
        <nav-menu class="mt-10">
            <li>
                <a href="/">
                    <i class='bx bx-store-alt icon'></i>
                    <span class="text nav-text">MarketPlace</span>
                </a>
            </li>
            <li id="selected">
                <a href="/farmers">
                    <i class='bx bxl-spring-boot icon'></i>
                    <span class="text nav-text">Farmers</span>
                </a>
            </li>
            <li>
                <a href="/aboutus">
                    <i class='bx bxs-help-circle icon'></i>
                    <span class="text nav-text">About Us</span>
                </a>
            </li>
        </nav-menu>
        <div class="bottom-content">
            <li class="selected">
                <a href="/login">
                    <i class='bx bx-user icon' ></i>
                    <span class="text nav-text">Sign Up</span>
                </a>
            </li>   
        </div>
    </x-nav>

    <x-main>
        <div class="flex flex-wrap p-2 gap-5">
            @foreach ($farmers as $farmer)
            <x-card class="relative w-full flex flex-row m-5 p-5">
                <div> 
                    <img class="h-[300px] rounded-lg" src="images/farm-1.jpg">
                </div>
                <div class="ml-5">
                    <p class="text-[40px]">{{$farmer->farm_name}} Farm</p>
                    <p class="text-[20px]">Farm Owner: {{$farmer->farm_owner_name}}</p>
                    <p class="text-[20px]">Farm Location:{{$farmer->farm_location}}</p>
                    <p class="text-[20px]">Farm Contact No.:{{$farmer->farm_contact_no}}</p>
                    <p class="text-[20px]">Farm Products:</p>
                    <div class="flex flex-row w-[40px] gap-3 p-2 m-2">
                    @foreach ($products as $product)
                        <x-card>
                            @if ($product->product_name === 'Apples')
                                <img class="h-[110px] w-auto" src="images/apple.jpg">
                            @else
                                <img class="h-[110px] w-auto" src="images/orange.jpg">
                            @endif
                            <p>{{$product->product_name}}</p>
                        </x-card>
                    @endforeach
                    </div>
                </div>
                <div class="absolute right-5 bottom-2">
                    <a href="#" class="text-[15px] text-blue-400">Check Farmer Profile</a>
                </div>
            </x-card>
        @endforeach
        </div>
        
        
    </x-main>

</x-layout>