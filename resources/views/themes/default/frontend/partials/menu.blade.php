<ul class="cd-accordion-menu animated">
    <li class="has-children">
        <input type="checkbox" name ="group-ebooks" id="group-ebooks" @if(request()->is(['books/*', '/'])) checked @endif>
        <label for="group-ebooks">{{ __('E-Books') }}</label>

        <ul>
            <li id="nav_new" @if(request()->is('/'))class="active"@endif><a href="{{url('/')}}"><span class="glyphicon glyphicon-book"></span> {{__('Recently Added')}}</a></li>

            <li class="has-children" >
                <input type="checkbox" name ="sub_nav_sort_books" id="sub_nav_sort_books" @if(request()->is('books/sort/*')) checked @endif>

                <label for="sub_nav_sort_books">{{__('Sorted Books')}}</label>
                <ul>
                    <li id="nav_sort_old" @if(request()->is('books/sort/newest'))class="active"@endif><a href="{{route('books.sort.newest')}}">{{__('Sort By Newest')}}</a></li>
                    <li id="nav_sort_new"  @if(request()->is('books/sort/oldest'))class="active"@endif><a href="{{route('books.sort.oldest')}}">{{__('Sort By Oldest')}}</a></li>
                    <li id="nav_sort_asc"  @if(request()->is('books/sort/a-z'))class="active"@endif><a href="{{route('books.sort.titles_ascending')}}">{{__('Sort By')}} {{__('Title')}} ({{__('Ascending')}})</a></li>
                    <li id="nav_sort_desc"  @if(request()->is('books/sort/z-a'))class="active"@endif><a href="{{route('books.sort.titles_descending')}}">{{__('Sort By')}} {{__('Title')}}  ({{__('Descending')}})</a></li>
                </ul>
            </li>

            <li id="nav_hot"  @if(request()->is('books/hot'))class="active"@endif><a href="{{route('books.hot')}}"><span class="glyphicon glyphicon-fire"></span>{{__('Hot Books')}}</a></li>
            <li id="nav_rated"  @if(request()->is('books/rated'))class="active"@endif><a href="{{route('books.rated')}}"><span class="glyphicon glyphicon-star"></span>{{__('Best rated Books')}}</a></li>
            <li id="nav_rand"  @if(request()->is('books/discover'))class="active"@endif><a href="{{route('books.discover')}}"><span class="glyphicon glyphicon-random"></span>{{__('Discover')}}</a></li>
            <li id="nav_cat" @if(request()->is('books/discover'))class="category"@endif><a href="{{route('books.category')}}"><span class="glyphicon glyphicon-inbox"></span>{{__('Categories')}}</a></li>
            <li id="nav_serie" @if(request()->is('books/series'))class="active"@endif><a href="{{route('books.series')}}"><span class="glyphicon glyphicon-bookmark"></span>{{__('Series')}}</a></li>
            <li id="nav_author" @if(request()->is('books/author'))class="active"@endif><a href="{{route('books.author')}}"><span class="glyphicon glyphicon-user"></span>{{__('Authors')}}</a></li>
            <li id="nav_publisher" @if(request()->is('books/publisher'))class="active"@endif><a href="{{route('books.publisher')}}"><span class="glyphicon glyphicon-text-size"></span>{{__('Publishers')}}</a></li>
            <li id="nav_lang" @if(request()->is('books/language'))class="active"@endif><a href="{{route('books.language')}}"><span class="glyphicon glyphicon-flag"></span>{{__('Languages')}} </a></li>

        </ul>
    </li>
    <li>
        <input type="checkbox" name ="group-interactive-teaching-learning" id="group-interactive-teaching-learning" >
        <label for="group-interactive-teaching-learning">{{ __('Interactive Teaching Learning') }}</label>
        <ul>
            <li><a href="#0">Class 1</a></li>
            <li><a href="#0">Class 2</a></li>
            <li><a href="#0">Class 3</a></li>
            <li><a href="#0">Class 4</a></li>
            <li><a href="#0">Class 5</a></li>
            <li><a href="#0">Class 6</a></li>
            <li><a href="#0">Class 7</a></li>
            <li><a href="#0">Class 8</a></li>
            <li><a href="#0">Class 9</a></li>
            <li><a href="#0">Class 10</a></li>
            <li><a href="#0">Class XI</a></li>
            <li><a href="#0">Class XII</a></li>

        </ul>
    </li>
    <li class="has-children">
        <input type="checkbox" name ="group-lok-sewa" id="group-lok-sewa" >
        <label for="group-lok-sewa">{{ __('Lok Sewa Aayog') }}</label>

        <ul>
            <li class="has-children">
                <input type="checkbox" name ="sub-group-1" id="sub-kharidar" >
                <label for="sub-kharidar">{{ __('Kharidar') }}</label>

                <ul>
                    <li><a href="#0">Mock test </a></li>
                    <li><a href="#0">Syllabus</a></li>
                    <li><a href="#0">Books</a></li>
                    <li><a href="#0">Videos</a></li>
                </ul>
            </li>
            <li class="has-children">
                <input type="checkbox" name ="sub-subba" id="sub-subba">
                <label for="sub-subba">Subba</label>

                <ul>
                    <li><a href="#0">Mock test </a></li>
                    <li><a href="#0">Syllabus</a></li>
                    <li><a href="#0">Books</a></li>
                    <li><a href="#0">Videos</a></li>
                </ul>
            </li>
            <li><a href="#0">section officer</a></li>
            <li><a href="#0">computer operator</a></li>
            <li><a href="#0">Accountant</a></li>
            <li><a href="#0">Administration</a></li>
            <li><a href="#0">Rastra bank</a></li>
            <li><a href="#0">Police</a></li>

        </ul>
    </li>

    <li  class="has-children">
        <input type="checkbox" name ="sub-learn-english" id="sub-learn-english">
        <label for="sub-learn-english">{{ __('Learn english') }}</label>

        <ul>
            <li><a href="#0">{{ __('List of courses') }}</a></li>
        </ul>
    </li>
    <li  class="has-children">
        <input type="checkbox" name ="sub-entrance-tests" id="sub-entrance-tests">
        <label for="sub-entrance-tests">{{ __('Entrance Tests') }}</label>

        <ul>
            <li  class="has-children">
                <input type="checkbox" name ="sub-engineering" id="sub-engineering">
                <label for="sub-engineering">{{ __('Engineering') }}</label>

                <ul>
                    <li  class="has-children">
                    <li><a href="#0">{{ __('Learning Materials') }}</a></li>
                    <li><a href="#0">{{ __('Mock Test') }}</a></li>
                    </li>
                </ul>
            </li>
            <li  class="has-children">
                <input type="checkbox" name ="sub-engineering" id="sub-medical">
                <label for="sub-medical">{{ __('Medical') }}</label>

                <ul>
                    <li  class="has-children">
                    <li><a href="#0">{{ __('Learning Materials') }}</a></li>
                    <li><a href="#0">{{ __('Mock Test') }}</a></li>
                    </li>
                </ul>
            </li>
            <li  class="has-children">
                <input type="checkbox" name ="sub-english" id="sub-english">
                <label for="sub-english">English</label>

                <ul>
                    <li  class="has-children">
                    <li><a href="#0">IELTS</a></li>
                    <li><a href="#0">CMAT</a></li>
                    <li><a href="#0">GRE</a></li>
                    <li><a href="#0">GMAT</a></li>
                    <li><a href="#0">SAT</a></li>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="has-children">
        <input type="checkbox" name ="group-about" id="group-about">
        <label for="group-about">{{ __('About Us') }}</label>

        <ul>
            <li><a href="#0">{{ __('About Squad of Technical Minds') }}</a></li>
            <li><a href="#0">{{ __('About System') }}</a></li>
        </ul>
    </li>

    <li><a href="#">{{ __('Contact Us') }}</a></li>
    <li><a href="#">{{ __('Partners') }}</a></li>
    <li><a href="#">{{ __('Legal Notice') }}</a></li>
</ul> <!-- cd-accordion-menu -->