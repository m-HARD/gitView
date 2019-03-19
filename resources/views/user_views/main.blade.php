<!DOCTYPE html>
<html>

            @include('user_views.partials._head')
            
    <body>

            @include('user_views.partials._nav')
            <br>


        <div class='container' style="margin-left: 168.500px;padding-right: 139px;">
             @include('user_views.partials._messages')
             @yield('content')
             <br><br><br>
             @include('user_views.partials._footer')
        </div>



             @include('user_views.partials._javascript')
             <br>
    </body>
</html>