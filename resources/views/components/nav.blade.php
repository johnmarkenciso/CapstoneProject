<nav {{$attributes->merge(['class' => 'sidebar fixed top-0 left-0 h-full p-3 py-5 z-100 bg-white-200 w-[20%]'])}}>
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
    </div>
    
</nav>