<x-layout>
    <x-nav>
        <x-nav-menu class="mt-10">
            <li id="selected">
                <a href="/">
                    <i class='bx bx-store-alt icon'></i>
                    <span class="text nav-text">MarketPlace</span>
                </a>
            </li>
            <li>
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
        </x-nav-menu>
        <div class="bottom-content">
            <li>
                <a href="/cart">
                    <i class='bx bx-basket icon' ></i>
                    <span class="text nav-text">Cart</span>
                    <span class="nav-text absolute right-10 rounded-full bg-slate-300 p-1">{{count($fruits)+count($vegetables)}}</span>
                </a>

            </li>         
            <li>
                <a href="/login">
                    <i class='bx bx-user icon' ></i>
                    <span class="text nav-text">Sign Up</span>
                </a>
            </li>         
        </div>
    </x-nav>

    <x-main class="p-10">
        @include('partials._search')
        @include('partials._filter')
        
        <div>
            <div class="sticky top-2 z-10 w-full rounded-full p-2 bg-slate-300">
                <p class="text-2xl">Fruits Section</p>
            </div>

            <div class="mt-3 flex flex-wrap text-center justify-center gap-3">
                @unless (count($fruits) == 0)

                @foreach($fruits as $fruit)
                <x-product-card :product="$fruit"/>
                @endforeach

                @else
                <p>No products found</p>
                @endunless
                
            </div>
        </div>
        <div class="mt-5">
            <div class="sticky top-2 z-10 w-full rounded-full p-2 bg-slate-300">
                <p class="text-2xl">Vegtables Section</p>
            </div>

            <div class="mt-3 flex flex-wrap text-center justify-center gap-3">
                @unless (count($vegetables) == 0)

                @foreach($vegetables as $vegetable)
                <x-product-card :product="$vegetable"/>
                @endforeach

                @else
                <p>No products found</p>
                @endunless
                
            </div>
        </div>
    </x-main>

</x-layout>

