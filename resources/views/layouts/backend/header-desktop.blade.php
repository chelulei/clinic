<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header">
                </form>
                <div class="header-button">
             <div class="noti-wrap">
           <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                     @if(auth()->user()->unreadNotifications->count())
                    <span class="quantity"> {{auth()->user()->unreadNotifications->count()}}</span>
                      @endif
                    <div class="notifi-dropdown js-dropdown">
                        <div class="notifi__title">
                              @if(auth()->user()->unreadNotifications->count())
                            <p class="text-center">You have {{auth()->user()->unreadNotifications->count()}} Notifications</p>
                            <p class="text-center"><a href="{{url('/markAsRead')}}">Mark All as Read</a></p>
                              @endif

                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                             <i class="zmdi zmdi-email"></i>
                            </div>
                            <div class="content">
                                @forelse(auth()->user()->unreadNotifications as $notification)
                                <p>{{$notification->data['message']}} by {{$notification->data['name']}} </p>
                                <span class="date">{{$notification->created_at->toDayDateTimeString()}}</span>
                                 @empty
                                    <p>No Notifications</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>

             </div>

                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ Auth::user()->image_url}}" alt="{{ Auth::user()->name }}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ Auth::user()->image_url}}" alt="{{ Auth::user()->name }}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{route('backend.account.index')}}">
                                            <i class="zmdi zmdi-account"></i>Edit Profile</a>
                                    </div>
                                    <?php $user = Auth::user(); ?>
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('profile-edit', ['user' => $user]) }}">
                                            <i class="zmdi zmdi-settings"></i>Edit Password</a>
                                    </div>

                                </div>
                                <div class="account-dropdown__footer">
                                    <a class="zmdi zmdi-power" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>


