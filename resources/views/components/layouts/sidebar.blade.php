@php
    if(Str::contains(Route::currentRouteName(), 'index')) $route = 'index';
    else if(Str::contains(Route::currentRouteName(), 'work')) $route = 'work';
    else if(Str::contains(Route::currentRouteName(), 'user')) $route = 'user';
    else $route = 0;
@endphp

@persist($route)
    <aside id="sidebar" class="sidebar border-end">
        <div>
            <a wire:navigate href="{{ route('index') }}" class="{{ Str::contains(Route::currentRouteName(), 'index') ? 'text-primary' : '' }} px-3 py-2 d-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1z"/>
                </svg>
                <span>หน้าแรก</span>
            </a>

            <a wire:navigate href="{{ route('work') }}" class="{{ Str::contains(Route::currentRouteName(), 'work') ? 'text-primary' : '' }} px-3 py-2 d-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                    <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5m0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5m-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                    <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1zM1 4v10a1 1 0 0 0 1 1h2V4zm4 0v11h9a1 1 0 0 0 1-1V4z"/>
                </svg>
                <span>งาน</span>
            </a>

            <a wire:navigate href="{{ route('user') }}" class="{{ Str::contains(Route::currentRouteName(), 'user') ? 'text-primary' : '' }} px-3 py-2 d-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                </svg>
                <span>ผู้ใช้งาน</span>
            </a>

            <div class="px-3">
                <hr>
            </div>

            <a wire:navigate href="{{ route('logout') }}" class="text-danger px-3 py-2 d-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>
                <span>ออกจากระบบ</span>
            </a>

        </div>
    </aside>
@endpersist()


<script>
    function toggleSidebar() {
        $('#sidebar').toggleClass('sidebar-ml');
    }
</script>


<style>
    .sidebar {
        min-width: 250px;
        width: 250px;
        height: 100%;
        min-height: 100.1vh;
        transition: 300ms ease;
    }

    .sidebar-ml {
        margin-left: -250px;
    }

    @media (max-width: 768px) {
        .sidebar {
            position: absolute;
            left: 0;
            top: 56px;
            z-index: 100;
            background-color: var(--white);
        }
    }
</style>



