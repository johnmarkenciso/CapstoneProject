<x-layout>
    <x-nav>
        <x-nav-menu class="mt-10">
            <li>
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
            <li id="selected">
                <a href="/aboutus">
                    <i class='bx bxs-help-circle icon'></i>
                    <span class="text nav-text">About Us</span>
                </a>
            </li>
        </x-nav-menu>
        <div class="bottom-content">
            <li class="selected">
                <a href="/login">
                    <i class='bx bx-user icon' ></i>
                    <span class="text nav-text">Sign Up</span>
                </a>
            </li>

            
            
        </div>
    </x-nav>

    <x-main class="main-content">
        <div class="p-10 h-10 w-full bg-zinc-200 hover:bg-slate-900 hover:duration-700">
            <h1 class="fixed right-0">Mission</h1>
        </div>
    </x-main>

</x-layout>