@extends('theme::layouts.videos')

@section('content')
    <div data-v-3da44c83="" data-v-0c0c8412="">
        <div data-v-7c4d0bf6="" data-v-3da44c83="" class="learn-breadcrumbs" data-v-0c0c8412="">
            <div data-v-0bc416b1="" data-v-7c4d0bf6="" style="position: relative;">
                <nav data-v-0bc416b1="" class="breadcrumbs">
                    <div data-v-0bc416b1="" class="breadcrumbs-dropdown-wrapper" style="">
                        <button data-v-0bc416b1="" type="button" class="ui-icon-button ui-icon-button--type-primary ui-icon-button--color-default ui-icon-button--size-small has-dropdown drop-target"><div class="ui-icon-button__icon"><svg data-v-0bc416b1="" role="presentation" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path data-v-0bc416b1="" d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                </svg>
                            </div>
                            <div class="ui-icon-button__focus-ring"></div>
                            <div class="ui-progress-circular ui-icon-button__progress ui-progress-circular--color-black ui-progress-circular--type-indeterminate" style="width: 18px; height: 18px; display: none;"><svg role="progressbar" viewBox="25 25 50 50" aria-valuemax="100" aria-valuemin="0" class="ui-progress-circular__indeterminate"><circle cx="50" cy="50" fill="none" r="20" stroke-miterlimit="10" stroke-width="4.5" class="ui-progress-circular__indeterminate-path"></circle></svg>
                            </div><!----><!---->
                        </button>
                    </div>
                    <ol data-v-0bc416b1="" class="breadcrumbs-visible-items">
                        <li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics" class="router-link-active link" dir="auto">Channels</a></li>
                        <li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/1ceff53605e55bef987d88e0908658c5" class="link" dir="auto">Khan Academy (English)</a></li>
                        <li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/c6edbc3129c55ba99125266c3effa234" class="link" dir="auto">Math</a></li>
                        <li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast" style="display: none;"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/46155a8dfc97536d96babb23f715b5b1" class="link" dir="auto">Class 5 math (India)</a></li>
                        <li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/5fae746f784854ed9c43fbbebaff88c3" class="link" dir="auto">Parts and wholes</a></li>
                        <li data-v-0bc416b1="" class="breadcrumbs-visible-item breadcrumbs-visible-item-notlast"><a data-v-70229988="" data-v-0bc416b1="" href="#/topics/t/3bb296b286e25f51aa8157496e2a099a" class="link" dir="auto">Fraction comparisons and equivalent fractions</a></li>
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
        <div id="outerContainer">

            <select id="toc"></select>
            <div class="navigation-and-epubjs">
                <a id="prev" href="#prev" class="arrow">‹</a>
                <div id="viewer" class="spreads viewer_spreads"></div>
                <a id="next" href="#next" class="arrow">›</a>
            </div>
        <div class="description">
            <p>{{$video->description}}</p>
        </div>
    </div>

        @php
            $files = get_storage_url($video->files->where('preset', 'epub'));
        @endphp
        @endsection

        @push('styles')
            <link rel="stylesheet" href="{{asset('css/epub_render.css')}}">
        @endpush

        @prepend('scripts')
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/epubjs/dist/epub.min.js"></script>


                <script>
                    var params = URLSearchParams && new URLSearchParams(document.location.search.substring(1));
                    var url = params && params.get("url") && decodeURIComponent(params.get("url"));
                    var currentSectionIndex = (params && params.get("loc")) ? params.get("loc") : undefined;

                    // Load the opf
                    var book = ePub(url || "{{$files['epub']}}");
                    var rendition = book.renderTo("viewer", {
                        width: "100%",
                        height: 600,
                        spread: "always"
                    });

                    rendition.display(currentSectionIndex);

                    book.ready.then(() => {

                        var next = document.getElementById("next");

                    next.addEventListener("click", function(e){
                        book.package.metadata.direction === "rtl" ? rendition.prev() : rendition.next();
                        e.preventDefault();
                    }, false);

                    var prev = document.getElementById("prev");
                    prev.addEventListener("click", function(e){
                        book.package.metadata.direction === "rtl" ? rendition.next() : rendition.prev();
                        e.preventDefault();
                    }, false);

                    var keyListener = function(e){

                        // Left Key
                        if ((e.keyCode || e.which) == 37) {
                            book.package.metadata.direction === "rtl" ? rendition.next() : rendition.prev();
                        }

                        // Right Key
                        if ((e.keyCode || e.which) == 39) {
                            book.package.metadata.direction === "rtl" ? rendition.prev() : rendition.next();
                        }

                    };

                    rendition.on("keyup", keyListener);
                    document.addEventListener("keyup", keyListener, false);

                    })

                    var title = document.getElementById("title");

                    rendition.on("rendered", function(section){
                        var current = book.navigation && book.navigation.get(section.href);

                        if (current) {
                            var $select = document.getElementById("toc");
                            var $selected = $select.querySelector("option[selected]");
                            if ($selected) {
                                $selected.removeAttribute("selected");
                            }

                            var $options = $select.querySelectorAll("option");
                            for (var i = 0; i < $options.length; ++i) {
                                let selected = $options[i].getAttribute("ref") === current.href;
                                if (selected) {
                                    $options[i].setAttribute("selected", "");
                                }
                            }
                        }

                    });

                    rendition.on("relocated", function(location){
                        console.log(location);

                        var next = book.package.metadata.direction === "rtl" ?  document.getElementById("prev") : document.getElementById("next");
                        var prev = book.package.metadata.direction === "rtl" ?  document.getElementById("next") : document.getElementById("prev");

                        if (location.atEnd) {
                            next.style.visibility = "hidden";
                        } else {
                            next.style.visibility = "visible";
                        }

                        if (location.atStart) {
                            prev.style.visibility = "hidden";
                        } else {
                            prev.style.visibility = "visible";
                        }

                    });

                    rendition.on("layout", function(layout) {
                        let viewer = document.getElementById("viewer");

                        if (layout.spread) {
                            viewer.classList.remove('single');
                        } else {
                            viewer.classList.add('single');
                        }
                    });

                    window.addEventListener("unload", function () {
                        console.log("unloading");
                        this.book.destroy();
                    });

                    book.loaded.navigation.then(function(toc){
                        var $select = document.getElementById("toc"),
                            docfrag = document.createDocumentFragment();

                        toc.forEach(function(chapter) {
                            var option = document.createElement("option");
                            option.textContent = chapter.label;
                            option.setAttribute("ref", chapter.href);

                            docfrag.appendChild(option);
                        });

                        $select.appendChild(docfrag);

                        $select.onchange = function(){
                            var index = $select.selectedIndex,
                                url = $select.options[index].getAttribute("ref");
                            rendition.display(url);
                            return false;
                        };

                    });

                </script>
@endprepend