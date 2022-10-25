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
            <li>
                <a href="/aboutus">
                    <i class='bx bxs-help-circle icon'></i>
                    <span class="text nav-text">About Us</span>
                </a>
            </li>
        </x-nav-menu>
        <div class="bottom-content">
            <li class="bg-[#E4E9F7] rounded-sm">
                <a href="/login">
                    <i class='bx bx-user icon' ></i>
                    <span class="text nav-text">Sign Up</span>
                </a>
            </li>
        </div>
    </x-nav>

    <x-main>
        <div class="flex flex-row">
            <div class="forms w-1/2 h-full">
                <div class="container mt-24 m-10 w-[500px] h-[580px] rounded-lg border border-solid border-gray-400">
                    <div class="ml-[20px] mt-3">
                        <h3 class="text-[30px]">Sign up</h3>
                        <p class="text-sm mt-2">I'm signing up as:</p>
                        <div class="buttons mt-2 flex flex-row w-[450px]">
                            <button type="button" class="w-1/2 rounded-sm border border-solid border-slate-500 p-2 bg-slate-500">Customer</button>
                            <button type="button" class="w-1/2 rounded-sm border border-solid border-slate-500 p-2 hover:bg-slate-400">Farmer</button>
                        </div>
                        {{-- Forms --}}
                        <form class="forms mt-5 w-[450px]">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">
                                  First Name
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" type="text" placeholder="First Name">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
                                  Last Name
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="Last Name">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                  Email
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                  Password
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="Password">
                            </div>

                            <button class="bg-green-500 w-full hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Account</button>
                        </form>
                        <div class="mt-3">
                            <p class="text-[15px] text-gray-500">Already have an account? <a href="#" class="text-[15px] text-blue-300">Login</a>
                        </div>
                        

                    </div>
                </div>
            </div>
            <div class="image w-1/2 h-full">
                <img class="w-auto h-[700px]" src="images/vegetables.jpg">
            </div>
        </div>
    </x-main>
    
</x-layout>