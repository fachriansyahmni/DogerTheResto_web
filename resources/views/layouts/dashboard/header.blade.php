<div class="header">
    <div class="header-left" style="width: 75%">
        <div class="menu-icon dw dw-menu"></div>
        <div class="text-center" style="width: 100%">
            @isset($page_title)
            <strong>{{$page_title}}</strong>
            @endisset
        </div>
    </div>
    <div class="header-right" style="width: 25%">
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{asset('vendor/deskapp/vendors/images/gambar_icon.png')}}" alt="">
                                    <h3>Pesan</h3>
                                    <p>Terdapat 0 Pesanan</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{asset('vendor/deskapp/vendors/images/gambar_icon.png')}}" alt="">
                    </span>
                    <span class="user-name">{{Auth::user()->username}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    {{-- <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i> Log Out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>