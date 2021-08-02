@php
    $Menu = [
        "Admin" => [
            "Dashboard" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-house-1'
            ],
            "Manajemen Data User" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-shop'
            ],
            "Manajemen Menu Makanan" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-shop'
            ],
            "Manajemen Menu Kategori" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-shop'
            ],
            "Manajemen Role" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-shop'
            ],
            "Manajemen Meja" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-shop'
            ],
        ],
        "Cashier" => [
            // "Home" => [
            //     "has-sub" => false,
            //     "url" => "home",
            //     "icon" => 'micon dw dw-house-1'
            // ],
            // "Menu" => [
            //     "has-sub" => false,
            //     "url" => 'menu',
            //     "icon" => 'micon dw dw-notebook'
            // ],
            // "Pesanan" => [
            //     "has-sub" => false,
            //     "url" => "pesanan",
            //     "icon" => 'micon dw dw dw-notepad-1'
            // ],
        ]
    ]
@endphp

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('/vendor/deskapp/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
            <img src="{{ asset('/vendor/deskapp/vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                @foreach ($Menu as $index => $submenus)
                {{-- <li class="dropdown">
                    <a href="/admin" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="/admin/registration" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Employee Registration</span>
                    </a>
                </li> --}}
                <li>
                    <div class="sidebar-small-cap">{{$index}}</div>
                </li>
                @foreach ($submenus as $indexSubmenu => $submenu)
                <li class="dropdown">
                    <a href="{{route($submenu["url"])}}" class="dropdown-toggle {{(!$submenu['has-sub']) ? 'no-arrow':''}}">
                        <span class="{{$submenu["icon"]}}"></span><span class="mtext">{{$indexSubmenu}}</span>
                    </a>
                </li>
                @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>