<nav>
    <ul>    
    <li><a class="{{ request()->routeIs('/') ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="/about">About</a></li>
        <li><a class="{{ request()->routeIs('portfolio') ? 'active' : '' }}" href="/portfolio">Portfolio</a></li>
        <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
    </ul>
</nav>
