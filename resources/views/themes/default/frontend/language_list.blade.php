@extends('theme::layouts.app')

@section('content')
@php $iso = new \Matriphe\ISO639\ISO639;@endphp
    <h2>{{__($title)}}</h2>
    <div class="container">
        <div class="col-xs-12 col-sm-6">
        @foreach($entries as $entry)
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-1" align="left"><span class="badge">{{$entry->books_count}}</span></div>
            <div class="col-xs-10 col-sm-10 col-md-11"><a href="{{route($route, $entry->id)}}">{{$iso->languageByCode2t($entry->lang_code)}}</a></div>
        </div>
                @if((($loop->iteration ) % 2 )== 0 )
        </div> <div class="col-xs-12 col-sm-6">
            @endif
        @endforeach
        </div>
    </div>
@endsection
