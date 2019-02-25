<ul class="nav navbar-nav ">
    <li><a href="{{route('books.advanced_search')}}"><span class="glyphicon glyphicon-search"></span><span class="hidden-sm"> {{__('Advanced Search')}}</span></a></li>
</ul>

<ul class="nav navbar-nav navbar-right" id="main-nav">
    @auth()
    <li><a id="top_admin" href="{{url('admin')}}"><span class="glyphicon glyphicon-dashboard"></span><span class="hidden-sm"> {{__('Admin')}}</span></a></li>
    @endauth
    @auth
    <li><a id="top_user" href="{{url('profile')}}"><span class="glyphicon glyphicon-user"></span><span class="hidden-sm"> {{\Auth::user()->name}}</span></a></li>
    <li><a id="logout" href="{{url('logout')}}"><span class="glyphicon glyphicon-log-out"></span><span class="hidden-sm"> {{__('Logout')}}</span></a></li>
    @endauth

    <li style="margin: 10px">
        <form id='locale-form' method='post' action="{{ route('site.language')}}">
            {{ csrf_field() }}
            <input type='hidden' id='language_field' name='locale' value='{{ App::getLocale() }}'/>
        </form>

        <button id='np' type='button' class="@if($locale == 'np') btn-primary @endif">NP</button>
        <button id='en' type='button' class="@if($locale == 'en') btn-primary @endif">EN</button>
        <script>
            document.addEventListener("DOMContentLoaded", function ()
            {
                $np = document.querySelector('button#np');
                $en = document.querySelector('button#en');
                $np.addEventListener('click', function (e) {
                    document.querySelector('#locale-form #language_field').value = 'np'
                    document.querySelector('#locale-form').submit();
                })
                $en.addEventListener('click', function (e) {
                    document.querySelector('#locale-form #language_field').value = 'en'
                    document.querySelector('#locale-form').submit();
                })
            })
        </script>
    </li>
    {{--@guest--}}
    {{--<li><a id="login" href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> {{__('Login')}}</a></li>--}}
    {{--<li><a id="register" href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> {{__('Register')}}</a></li>--}}
    {{--@endguest--}}
</ul>