<!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{route('home')}}" class="nav-link">Alpha-School</a></li>
            <li class="list-inline-item"><a class="nav-link" href="callto:+443003030266"><strong>CALL</strong> +95 300 303 0266</a></li>
          </ul>
            
            
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
          {{-- Authentication Links --}}
                <!-- @guest
                    <li class="list-inline-item"><a class="nav-link" href="{{ route('login') }}">{{ trans('login') }}</a></li>
                    @if (Route::has('register'))
                        <li class="list-inline-item"><a class="nav-link" href="{{ route('register') }}">{{ trans('register') }}</a></li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 2)
                                <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">
                            @else
                                <div class="user-avatar-nav"></div>
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <!-- <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}" href="{{ url('/profile/'.Auth::user()->name) }}">
                                {!! trans('profile') !!}
                            </a> -
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest -->

                <!-- topbar -->
                  @auth
                    <li class="list-inline-item"><a href="" class="nav-link">{{Auth::user()->name}}</a></li>
                    <li class="list-inline-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>
                  @endauth
                  @guest
                    <li class="list-inline-item"><a class="nav-link" href="{{ route('login') }}">{{ trans('login') }}</a></li>
                    @if (Route::has('register'))
                        <li class="list-inline-item"><a class="nav-link" href="{{ route('register') }}">{{ trans('register') }}</a></li>
                    @endif
                  @endguest
                <!-- topbar -->
          </ul>
        </div>
      </div>
    </div>
  </div>


