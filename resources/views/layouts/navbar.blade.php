<header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="{{route ('home') }}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img
            src="{{asset ('assets/img/Logo/coolze-stamp-7.png') }}"
            alt="logo coolze"
          />
          <!-- <h2 class="d-flex align-items-cente(2).pngr">Coolze</h2> -->
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <!-- Navbar -->
        <nav id="navbar" class="navbar">
    <ul>
        <li>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        </li>
        <li>
            <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
        </li>
        <li class="dropdown">
            <a href="#">
                <span>Product</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul>
                <li>
                    <a href="{{ route('product.allProduct') }}" class="{{ request()->routeIs('product.allProduct') ? 'active' : '' }}">All Products</a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Commercial AC</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('product.commercial.vrv') }}" class="{{ request()->routeIs('product.commercial.vrv') ? 'active' : '' }}">VRV</a>
                        </li>
                        <li>
                            <a href="{{ route('product.commercial.vrf') }}" class="{{ request()->routeIs('product.commercial.vrf') ? 'active' : '' }}">VRF</a>
                        </li>
                        <li>
                            <a href="{{ route('product.commercial.cassette') }}" class="{{ request()->routeIs('product.commercial.cassette') ? 'active' : '' }}">Cassette</a>
                        </li>
                        <li>
                            <a href="{{ route('product.commercial.ducting') }}" class="{{ request()->routeIs('product.commercial.ducting') ? 'active' : '' }}">Ducting</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('product.splitWall') }}" class="{{ request()->routeIs('product.splitWall') ? 'active' : '' }}">Split Wall</a>
                </li>
                <li>
                    <a href="{{ route('product.standingFloor') }}" class="{{ request()->routeIs('product.standingFloor') ? 'active' : '' }}">Standing Floor</a>
                </li>
                <li>
                    <a href="{{ route('product.acCombo') }}" class="{{ request()->routeIs('product.acCombo') ? 'active' : '' }}">AC Combo</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('project') }}" class="{{ request()->routeIs('project') ? 'active' : '' }}">Project</a>
        </li>
        <li>
            <a href="{{ route('article') }}" class="{{ request()->routeIs('article') ? 'active' : '' }}">Article</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </li>
    </ul>
</nav>

        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->