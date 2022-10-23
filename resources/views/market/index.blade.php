<x-layout>
    <x-nav>
        <nav-menu class="mt-10">
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

        

        <li class="search-box">
            <i class='bx bx-search icon'></i>
            <input type="text" placeholder="Search...">
        </li>
        </nav-menu>
    </x-nav>

    <x-main class="p-10">
        @include('partials._search')
        <div>
            <div class="sticky top-2">
                <h1>Fruits Section</h1>
            </div>

            <div class="mt-3 flex flex-wrap justify-center gap-3">
                @unless (count($fruits) == 0)

                @foreach($fruits as $fruit)
                <x-product-card :product="$fruit"/>
                @endforeach

                @else
                <p>No products found</p>
                @endunless
                
            </div>
        </div>
        <div>
            <div class="sticky top-2">
                <h1>Vegetables Section</h1>
            </div>

            <div class="mt-3 flex flex-wrap justify-center gap-3">
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

