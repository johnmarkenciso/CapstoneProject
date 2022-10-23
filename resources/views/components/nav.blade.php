<nav {{$attributes->merge(['class' => 'sidebar fixed top-0 left-0 h-full p-3 py-5 z-100 bg-white-200'])}}>
    <header>
        <div class="image-text">
            <span class="image">
            </span>

            <div class="text logo-text">
                <span class="name">Supfly</span>
            </div>
        </div>
    </header>
    
    <div class="menu-bar">
        {{$slot}}


        <div class="bottom-content">
            <li class="">
                <a href="#">
                    <i class='bx bx-user icon' ></i>
                    <span class="text nav-text">Login/Register</span>
                </a>
            </li>

            
            
        </div>
    </div>
    
</nav>