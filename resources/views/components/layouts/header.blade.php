<header class="px-3 border-bottom">
    <nav class="d-flex justify-content-between align-items-center" style="height: 55px;">
        <svg onclick="toggleSidebar()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="pointer bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>

        <span>
            {{ Auth::check() ? substr(Auth::user()->email, 0, 20) : '' }}
        </span>
    </nav>
</header>

