@extends('theme::layouts.videos')

@section('content')
    <div data-v-3da44c83="" data-v-0c0c8412="">
        <div data-v-7c4d0bf6="" data-v-3da44c83="" class="learn-breadcrumbs" data-v-0c0c8412="">
            <div data-v-0bc416b1="" data-v-7c4d0bf6="" style="position: relative;">
                <nav data-v-0bc416b1="" class="breadcrumbs">
                    {{--<div data-v-0bc416b1="" class="breadcrumbs-dropdown-wrapper" style="">--}}
                        {{--<button data-v-0bc416b1="" type="button" class="ui-icon-button ui-icon-button--type-primary ui-icon-button--color-default ui-icon-button--size-small has-dropdown drop-target"><div class="ui-icon-button__icon"><svg data-v-0bc416b1="" role="presentation" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path data-v-0bc416b1="" d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>--}}
                                {{--</svg>--}}
                            {{--</div>--}}
                            {{--<div class="ui-icon-button__focus-ring"></div>--}}
                            {{--<div class="ui-progress-circular ui-icon-button__progress ui-progress-circular--color-black ui-progress-circular--type-indeterminate" style="width: 18px; height: 18px; display: none;"><svg role="progressbar" viewBox="25 25 50 50" aria-valuemax="100" aria-valuemin="0" class="ui-progress-circular__indeterminate"><circle cx="50" cy="50" fill="none" r="20" stroke-miterlimit="10" stroke-width="4.5" class="ui-progress-circular__indeterminate-path"></circle></svg>--}}
                            {{--</div><!----><!---->--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    <ol data-v-0bc416b1="" class="breadcrumbs-visible-items">
                        {{--<li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics" class="router-link-active link" dir="auto">Channels</a></li>--}}
                        {{--<li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/1ceff53605e55bef987d88e0908658c5" class="link" dir="auto">Khan Academy (English)</a></li>--}}
                        {{--<li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/c6edbc3129c55ba99125266c3effa234" class="link" dir="auto">Math</a></li>--}}
                        {{--<li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/46155a8dfc97536d96babb23f715b5b1" class="link" dir="auto">Class 5 math (India)</a></li>--}}
                        {{--<li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/5fae746f784854ed9c43fbbebaff88c3" class="link" dir="auto">Parts and wholes</a></li>--}}
                        {{--<li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/3bb296b286e25f51aa8157496e2a099a" class="link" dir="auto">Fraction comparisons and equivalent fractions</a></li>--}}
                        <li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumb-visible-item-last"><span data-v-0bc416b1="" dir="auto" style="max-width: 300px;">{{$video->title}}</span></li>
                    </ol>
                </nav>
                {{--<div data-v-0bc416b1="" aria-hidden="true" class="breadcrumbs breadcrumbs-offscreen"><ol data-v-0bc416b1="" class="breadcrumbs-visible-items"><li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="position: relative;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics" class="router-link-active link" dir="auto" tabindex="-1">Channels</a><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></li><li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="position: relative;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/1ceff53605e55bef987d88e0908658c5" class="link" dir="auto" tabindex="-1">Khan Academy (English)</a><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></li><li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="position: relative;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/c6edbc3129c55ba99125266c3effa234" class="link" dir="auto" tabindex="-1">Math</a><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></li><li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="position: relative;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/46155a8dfc97536d96babb23f715b5b1" class="link" dir="auto" tabindex="-1">Class 5 math (India)</a><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></li><li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="position: relative;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/5fae746f784854ed9c43fbbebaff88c3" class="link" dir="auto" tabindex="-1">Parts and wholes</a><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></li><li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="position: relative;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/3bb296b286e25f51aa8157496e2a099a" class="link" dir="auto" tabindex="-1">Fraction comparisons and equivalent fractions</a><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></li><li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumb-visible-item-last" style="position: relative;"><span data-v-0bc416b1="" style="max-width: 300px;">Visualizing equivalent fractions</span><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></li></ol></div><div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        <div data-v-525a95a6="" data-v-3da44c83="" data-v-0c0c8412="">
            <div data-v-9ba93056="" data-v-525a95a6="" dir="auto">
                <h1 data-v-9ba93056="" class="title">
                    {{$video->title}}
                </h1>
            </div>
        </div>
    </div>

    <div>
        @php $video_files = get_storage_url($video->files); @endphp
        <iframe src="{{$file_url}}" width="936px" height = "500px">
            alternative content for browsers which do not support iframe.
        </iframe>
        <div class="description">
            <p>{{$video->description}}</p>
        </div>
    </div>

    {{--{!! dd($files) !!}--}}
@endsection

@push('styles')
    <script src="{{ asset('js/vendor/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/jszip-utils.min.js')}}"></script>
    <!--
    Mandatory in IE 6, 7, 8 and 9.
    -->
    <!--[if IE]>
    <script type="text/javascript" src="{{ asset('js/vendor/jszip-utils-ie.min.js')}}"></script>
    <![endif]-->
@endpush

@push('scripts')
    {{--<script src="//vjs.zencdn.net/7.3.0/video.min.js"></script>--}}
    <script>
        // var JSZip = require('JSZip');
        // var jsZip = JSZip();
        // console.log(jsZip);
        {{--let file = '{{$files['html5_zip']}}';--}}
        {{--console.log('file::', file);--}}
        // jsZip.loadAsync(file).then(function (zip) {
        //     Object.keys(zip.files).forEach(function (filename) {
        //         zip.files[filename].async('string').then(function (fileData) {
        //             console.log(fileData) // These are your file contents
        //         })
        //     })
        // })
        //
        // fetch(file)       // 1) fetch the url
        //     .then(function (response) {                       // 2) filter on 200 OK
        //         if (response.status === 200 || response.status === 0) {
        //             return Promise.resolve(response.blob());
        //         } else {
        //             return Promise.reject(new Error(response.statusText));
        //         }
        //     })
        //     .then(JSZip.loadAsync)                            // 3) chain with the zip promise
        //     .then(function (zip) {
        //
        //         console.log(zip);
        //         return zip;
        //         return zip.file("index2.html").async("string"); // 4) chain with the text content promise
        //     })
        //     .then(function success(text) {                    // 5) display the result
        //         console.log(text);
        //         $("#fetch").append($("<p>", {
        //             "class": "alert alert-success",
        //             text: "loaded, content = " + text
        //         }));
        //     }, function error(e) {
        //         $("#fetch").append($("<p>", {
        //             "class": "alert alert-danger",
        //             text: e
        //         }));
        //     });

    </script>
@endpush