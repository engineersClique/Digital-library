@extends('theme::layouts.app')

@section('content')
    <div class="discover load-more">
        <h2>{{__($title)}}</h2>
        @if(isset($subtitle))
            <p>{{__($subtitle)}}</p>
        @endif
        <div class="row">
            @include('theme::frontend.partials.books')
        </div>
    </div>

    @if($books instanceof \Illuminate\Pagination\AbstractPaginator)
        <div class="row book"> {{ $books->links() }}</div>
    @endif
@endsection
