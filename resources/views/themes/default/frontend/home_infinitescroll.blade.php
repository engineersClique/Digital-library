@foreach($recent_books as $entry)
    <div class="col-sm-3 col-lg-2 col-xs-6 book">
        <div class="cover">
            <a href="{{ route('book.show', $entry->id) }}" data-toggle="modal" data-target="#bookDetailsModal" data-remote="false">
                @if($entry->has_cover)
                    <img src="{{ get_cover(str_replace('\\', '/',$entry->path)) }}" alt="{{ $entry->title }}" />
                @else
                    <img src="{{ asset('generic_cover.jpg') }}" alt="{{ $entry->title }}" />
                @endif
            </a>
        </div>
        <div class="meta">
            <a href="{{ url('book.show', $entry->id) }}" data-toggle="modal" data-target="#bookDetailsModal" data-remote="false">
                <p class="title">{{ str_limit($entry->title, $limit = 20, $end = '...')}}</p>
            </a>
            <p class="author">
                @foreach($entry->authors as $author)
                    {{-- <a href="{{route('author', $author->id) }}">{{$author->name.replace('|',',')|shortentitle(30)}}</a>--}}
                    <a href="{{route('author', $author->id) }}">{{$author->name}}</a>
                    @if(!$loop->last)
                        &amp;
                    @endif
                @endforeach
            </p>
            @if(count($entry->ratings))
                <div class="rating">
                    @php $rating = $entry->ratings()->first()->rating;@endphp
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
        </div>
    </div>
@endforeach