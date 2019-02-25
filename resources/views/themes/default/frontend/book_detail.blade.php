@extends("theme::layouts.fragment")
@section('content')
<div class="single">
    <div class="row">
        <div class="col-sm-3 col-lg-3 col-xs-5">
            <div class="cover">
                @if($book->has_cover)
                    <img src="{{ get_cover(str_replace('\\', '/',$book->path)) }}" alt="{{ $book->title }}" />
                @else
                    <img src="{{ asset('generic_cover.jpg') }}" alt="{{ $entry->title ?? '' }}" />
                @endif
            </div>
        </div>
        <div class="col-sm-9 col-lg-9 book-meta">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group" role="group" aria-label="Download, send to Kindle, reading">

                    @if($book->files->first()->format == 'PDF')
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">
                                {{_('Download')}} :
                            </button>

                            <a href="{{ route('books.download', optional($book->files)->first()->book) }}"  class="btn btn-primary" role="button" target="_blank">
                                <span class="glyphicon glyphicon-download"></span>{{$book->files->first()->format}}
                            </a>

                        </div>
                    <div class="btn-group" role="group">
                        <button id="read-in-browser" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="window.open('{{ route('books.read', $book->id) }}', '_blank')">
                        <span class="glyphicon glyphicon-eye-open"></span> {{__('Read in browser')}}
                        </button>
                    </div>


                    @endif
                </div>
            </div>
            </div>
            <h2 id="title">{{ str_limit($book->title, $limit = 40, $end = '...')}}</h2>
            <p class="author">
                @foreach($book->authors as $author)
                    <a href="{{route('books.author.show',$author->id ) }}">{{$author->name}}</a>
                    @if(!$loop->last)
                        &amp;
                    @endif
                @endforeach
            </p>
            @if(count($book->ratings))
                    <div class="rating">
                        @php $rating = $book->ratings->first()->rating / 2;@endphp
                        @foreach(range(1,5) as $i)
                            @if($rating >0)
                                @if($rating >0.5)
                                    <span class="glyphicon glyphicon-star good"></span>
                                @else
                                    <span class="glyphicon glyphicon-star"></span>
                                @endif
                            @else
                                <span class="glyphicon glyphicon-star"></span>
                            @endif
                            <?php $rating--; ?>
                        @endforeach
                    </div>
                @endif

            @if(count($book->series))
{{--            <p>{{__('Book')}} {{entry.series_index}} {{__('of')}} <a href="{{route('series', $book->series->first->id)}}">{{entry.series[0].name}}</a></p>--}}
            @endif

            @if(count($book->languages))
            <div class="languages">
                <p>
                    <span class="label label-default">{{__('language')}}: @foreach($book->languages as $language) {{$language->lang_code}}@if(!$loop->last),@endif @endforeach </span>
                </p>
            </div>
            @endif

            @if(count($book->tags))

            <div class="tags">
                <p>
                    <span class="glyphicon glyphicon-tags"></span>
                    @foreach($book->tags as $tag)
                    <a href="{{ route('books.category.show', $tag->id) }}" class="btn btn-xs btn-info" role="button">{{$tag->name}}</a>
                    @endforeach
                </p>
            </div>
            @endif

            @if(count($book->publishers))
            <div class="publishers">
                <p>
          <span>{{__('Publisher')}}:
              <a href="{{route('books.publisher.show',$book->publishers->first()->id ) }}">{{$book->publishers->first()->name}}</a>
          </span>
                </p>
            </div>
            @endif

            @if($book->pubdate != '0000-00-00')
            <p>{{__('Publishing date')}}: {{date('M j, Y', strtotime($book->pubdate))}} </p>
            @endif

            @if(isset($book->comment) )
            <div class="comments">
                <h3>{{__('Description')}}:</h3>
                {!! $book->comment->text !!}
            </div>
            @endif

        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style>
@endpush
@push('scripts')
@endpush