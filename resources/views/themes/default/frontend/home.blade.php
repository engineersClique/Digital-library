@extends('theme::layouts.app')

@section('content')
    <div class="discover">
        <h2>{{__('Discover (Random Books)')}}</h2>
        <div class="row">
            @php $books = $random @endphp
            @include('theme::frontend.partials.books')
        </div>
        <div class="row">
            <div class=" book" > <a href="{{route('books.discover')}}">{{ __('View More') }}...</a></div>
        </div>
    </div>

    <div class="discover ">
        <h2>{{__('Recently Added Books')}}</h2>
        <div class="row" id="post-data">
            @php $books = $recent_books @endphp
            @include('theme::frontend.partials.books')
        </div>
        <div class="book">
            {{  $books->links() }}
        </div>
    </div>
@endsection
