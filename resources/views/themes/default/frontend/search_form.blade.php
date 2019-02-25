@extends('theme::layouts.app')

@section('content')
<div class="col-sm-8">
    <form role="form" id="search" action="{{ route('books.advanced_search') }}" method="GET">
        <div class="form-group">
            <label for="title">{{__('Book Title')}}</label>
            <input type="text" class="form-control" name="title" id="title" value="">
        </div>
        <div class="form-group">
            <label for="author">{{__('Author')}}</label>
            <input type="text" class="form-control typeahead" name="author" id="author" value="" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="Publisher">{{__('Publisher')}}</label>
            <input type="text" class="form-control" name="publisher" id="publisher" value="">
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="Publishstart">{{__('Publishing date from')}}</label>
                <div style="position: relative">
                    <input type="date" class="form-control datepicker" name="publish_start" id="Publishstart" value="" >
                    {{--<input type="text" class="form-control fake-input hidden" id="fake_Publishstart" value="">--}}
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label for="Publishend">{{__('Publishing date to')}}</label>
                <div style="position: relative">
                    <input type="date" class="form-control datepicker" name="publish_end" id="Publishend" value="">
                    {{--<input type="text" class="form-control fake-input hidden" id="fake_Publishend" value="">--}}
                </div>
            </div>
        </div>
        <label for="include_tag">{{__('Tags')}}</label>
        <div class="form-group" >
            {{--<div class="btn-toolbar btn-toolbar-lg" data-toggle="buttons">--}}
                {{--@foreach($tags as $tag)--}}
                {{--<label id="tag_{{$tag->id}}" class="btn btn-primary tags_click">--}}
                    {{--<input type="checkbox" autocomplete="off" name="include_tag" id="include_tag" value="{{$tag->id}}">{{$tag->name}}</input>--}}
                {{--</label>--}}
                {{--@endforeach--}}
            {{--</div>--}}

            <select name="include_tags[]" id="include_tag" multiple="multiple" class="form-control js-example-basic-multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        <label for="exclude_tags">{{__('Exclude Tags')}}</label>
        <div class="form-group">
            <select name="exclude_tags[]" id="exclude_tags" multiple="multiple" class="form-control js-example-basic-multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        <label for="include_series">{{__('Series')}}</label>
        <div class="form-group">
            <div class="btn-toolbar btn-toolbar-lg" data-toggle="buttons">
                <select name="include_series" id="include_series"  class="form-control js-example-basic-multiple">
                    <option value="">Select Series</option>
                    @foreach($series as $serie)
                        <option value="{{$serie->id}}">{{$serie->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <label for="exclude_serie">{{_('Exclude Series')}}</label>
        <div class="form-group">
            <div class="btn-toolbar btn-toolbar-lg" data-toggle="buttons">
                <select name="exclude_series" id="exclude_series"  class="form-control js-example-basic-multiple">
                    <option value="">Select Series</option>
                    @foreach($series as $serie)
                        <option value="{{$serie->id}}">{{$serie->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @if(isset($languages))
        <label for="include_language">{{__('Languages')}}</label>
        <div class="form-group">
            <select name="include_language" id="include_language"  class="form-control js-example-basic-multiple">
                <option value="">Select Language</option>
                @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->lang_code}}</option>
                @endforeach
            </select>
        </div>
        <label for="exclude_language">{{__('Exclude Languages')}}</label>
        <div class="form-group">
            <select name="exclude_language" id="exclude_language"  class="form-control js-example-basic-multiple">
                <option value="">Select Language</option>
                @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->lang_code}}</option>
                @endforeach
            </select>
        </div>
        @endif
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="ratinghigh">{{__('Rating bigger than')}}</label>
                <input type="number"  name="ratinghigh" id="ratinghigh" class="rating input-lg" data-clearable="" >
            </div>
            <div class="form-group col-sm-6">
                <label for="ratinglow">{{__('Rating less than')}}</label>
                <input type="number"  name="ratinglow" id="ratinglow" class="rating input-lg" data-clearable="" >
            </div>
        </div>
        <div class="form-group">
            <label for="comment">{{__('Description')}}</label>
            <input type="text" class="form-control" name="comment" id="comment" value="">
        </div>
        <button type="submit" class="btn btn-default">{{__('Submit')}}</button>
    </form>
</div>
@endsection
@push('styles')
<link href="{{ url('css/vendor/select2.min.css') }}" rel="stylesheet" />
@endpush
@push('scripts')
<script src="{{ url('js/vendor/select2.min.js') }}"></script>
<script src="{{ url('js/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ url('js/vendor/bootstrap-rating-input.min.js') }}"></script>
<script src="{{ url('js/vendor/typeahead.bundle.js') }}"></script>
<script src="{{ url('js/edit_books.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    });
</script>
@endpush
@push('header')
<link href="{{ url('css/vendor/typeahead.css') }}" rel="stylesheet" media="screen">
<link href="{{ url('css/vendor/bootstrap-datepicker3.min.css') }}" rel="stylesheet" media="screen">
@endpush
