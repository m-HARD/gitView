
<style>
   .f-nav{
        background: none;
        border: 0;
        font:inherit;

        background-color: hsla(0,0%,100%,.125);
        font-size: inherit;
        
    }
    
</style>

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #24292e; padding-top: 12px;padding-bottom: 12px;">
  <a class="navbar-brand fa fa-github fa-2x" style="padding: 0px" href="#" aria-hidden="true"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: rgb(255, 255, 255);">
    <ul class="navbar-nav mr-auto" style="font-size: 14px;">

            <form class="form-inline">
                    <input class="form-control f-nav" style="height: 30px;width: 297px;" type="search" placeholder="Search or jump to… " aria-label="Search">
            </form>

            <li class="nav-item">
            <a class="nav-link" style="color:white;font-family: Arial,sans-serif;" href="#">Pull requests</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color:white;font-family: Arial,sans-serif;" href="#">Issues</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color:white;font-family: Arial,sans-serif;" href="#">Marketplace</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color:white;font-family: Arial,sans-serif;" href="#">Explore</a>
            </li>
           

          @yield('nav-item')
      
          

    </ul>
    <div class=" my-2 my-lg-0">
        <ul class="navbar-nav mr-auto" >

            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else

                            <div class="menu-right navbar-nav collapse navbar-collapse" style="margin-right: 6px">
                                <i class="fa fa-bell" aria-hidden="true"></i>    
                                </div>    

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i style="color: white" class="fa fa-plus fa-1x" aria-hidden="true"></i> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"style="font-size: 13px">
                                    <a href="#" class="dropdown-item" >New repository</a>
                                    <a href="#" class="dropdown-item" >Import repository</a>
                                    <a href="#" class="dropdown-item" >New gist</a>
                                    <a href="#" class="dropdown-item" >New organization</a>
                                    <a href="#" class="dropdown-item" >New project</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img alt="@m-HARD" class="avatar float-left mr-1" src="{{ asset('images/avatar/profile.jpg') }}" height="20" width="20"> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"style="font-size: 13px">
                                    <a href="#" class="dropdown-item" >Singed in as <strong>{{ auth::user()->name }}</strong></a>
                                    <hr class="my-1">
                                    <a href="#" class="dropdown-item" >Stutus</a>
                                    <hr class="my-1">
                                    <a href="#" class="dropdown-item" >Your profile</a>
                                    <a href="#" class="dropdown-item" >Your repositories</a>
                                    <a href="#" class="dropdown-item" >Your projects</a>
                                    <a href="#" class="dropdown-item" >Your stard</a>
                                    <a href="#" class="dropdown-item" >Your gists</a>
                                    <hr class="my-1">
                                    <a href="#" class="dropdown-item" >Help</a>
                                    <a href="#" class="dropdown-item" >Setting</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sing out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </div>
                            </li>
                        @endguest
        </ul>
    </div>
  </div>
</nav>