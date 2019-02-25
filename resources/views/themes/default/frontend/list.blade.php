@extends('theme::layouts.app')

@section('content')
    <h2>{{__($title)}}</h2>
    <div class="container">
        <div class="col-xs-12 col-sm-6">
        @foreach($entries as $entry)
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-1" align="left"><span class="badge">{{$entry->books_count}}</span></div>
            <div class="col-xs-10 col-sm-10 col-md-11"><a href="{{route($route, $entry->id)}}">{{$entry->name}}</a></div>
        </div>
                @if((($loop->iteration ) % 2 )== 0 )
        </div> <div class="col-xs-12 col-sm-6">
            @endif
        @endforeach
        </div>
    </div>
@endsection
