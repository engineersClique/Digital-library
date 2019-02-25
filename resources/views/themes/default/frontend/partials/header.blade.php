<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">{{__('Toggle navigation')}}</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{url('/')}}">{{env('APP_NAME')}}</a>
</div>

<form class="navbar-form navbar-left" role="search" action="{{url('books/search')}}" method="GET">
    <div class="form-group input-group input-group-sm">
        <label for="query" class="sr-only">{{__('Search')}}</label>
        <input type="text" class="form-control" id="query" name="query" placeholder="{{__('Search')}}" value="@if(isset($term)){{$term}}@endif">
        <span class="input-group-btn">
                <button type="submit" class="btn btn-default">{{__('Go!')}}</button>
              </span>
    </div>
</form>