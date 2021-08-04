@php
    $Menu = [
        "Admin" => [
            "Dashboard" => [
                "has-sub" => false,
                "url" => "admin-index",
                "icon" => 'micon dw dw-house-1'
            ],
            "Manajemen Data User" => [
                "has-sub" => false,
                "url" => "admin-registration",
                "icon" => 'micon dw dw-shop'
            ],
            "Manajemen Menu Makanan" => [
                "has-sub" => false,
                "url" => "manage.menu",
                "icon" => 'micon dw dw-shop'
            ],
            "Manajemen Menu Kategori" => [
                "has-sub" => false,
                "url" => "manage.menu-kategori",
                "icon" => 'micon dw dw-shop'
            ],
            // "Menu Kasir" => [
            //     "has-sub" => false,
            //     "url" => "home",
            //     "icon" => 'micon dw dw-shop'
            // ],
            "Manajemen Meja" => [
                "has-sub" => false,
                "url" => "manage.table",
                "icon" => 'micon dw dw-shop'
            ],
            "Manajemen Role" => [
                "has-sub" => false,
                "url" => "admin-role",
                "icon" => 'micon dw dw-shop'
            ]
        ],
        "Pelayan" => [
            "Dashboard" => [
                "has-sub" => false,
                "url" => "waiter-index",
                "icon" => 'micon dw dw-house-1'
            ],
            "Pemesanan Menu" => [
                "has-sub" => false,
                "url" => "waiter-pemesanan-index",
                "icon" => 'micon dw dw-house-1'
            ],
        ],
        "Koki" => [
            "Dashboard" => [
                "has-sub" => false,
                "url" => "chef-index",
                "icon" => 'micon dw dw-house-1'
            ],
            "Pesanan" => [
                "has-sub" => false,
                "url" => "chef-order-list",
                "icon" => 'micon dw dw-house-1'
            ],
            "Status Menu" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-house-1'
            ],
        ],
        "Kasir" => [
            "Dashboard" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw-house-1'
            ],
            "Data Struk Pesanan" => [
                "has-sub" => false,
                "url" => 'home',
                "icon" => 'micon dw dw-notebook'
            ],
            "Laporan Penghasilan" => [
                "has-sub" => false,
                "url" => "home",
                "icon" => 'micon dw dw dw-notepad-1'
            ],
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
                @php
                    $myRoles = App\User::getRole();
                @endphp
                @foreach ($Menu as $index => $submenus)
                    @foreach ($myRoles as $mrole)
                        @if ($mrole->role == strtolower($index))
                            <li class="mt-2">
                                <div class="sidebar-small-cap">{{$index}}</div>
                            </li>
                            @foreach ($submenus as $indexSubmenu => $submenu)
                            <li class="dropdown">
                                <a href="{{route($submenu["url"])}}" class="dropdown-toggle {{(!$submenu['has-sub']) ? 'no-arrow':''}}">
                                    <span class="{{$submenu["icon"]}}"></span><span class="mtext">{{$indexSubmenu}}</span>
                                </a>
                            </li>
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>