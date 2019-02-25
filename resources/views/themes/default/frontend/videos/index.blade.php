@extends('theme::layouts.videos')

@section('content')
    <div class="discover load-more">
        <h2>{{_($title)}}</h2>
        @if(isset($description))
            <p>{{__($description)}}</p>
        @endif
        <div class="row">
            @include('theme::frontend.videos.partials.videos')
        </div>
    </div>

    @if($videos instanceof \Illuminate\Pagination\AbstractPaginator)
        <div class="row book"> {{ $videos->links() }}</div>
    @endif
@endsection
