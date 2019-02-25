@foreach($videos as $entry)
    <div class="col-lg-3 col-sm-6 col-md-4 col-xs-6 book">
        <div class="cover">
            <a data-v-6608d7ac="" data-v-2cccbc67="" href="{{ $entry->kind == 'topic' ? route('videos.topics.show', $entry->id) : route('videos.content.show', $entry->id)}}" class="card grid-item" style="position: relative;" title="{{ ucfirst($entry->kind)}}">
                <div data-v-4ad1c7b1="" data-v-6608d7ac="" class="card-thumbnail-wrapper thumbnail">
                    <span data-v-3e0c0f19="" data-v-4ad1c7b1="" class="type-icon">
                        <span data-v-3e0c0f19="" class="ui-icon material-icons"><!---->
                            <svg data-v-3e0c0f19="" role="presentation" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="color-undefined"><path data-v-3e0c0f19="" d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path></svg><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        </span><!---->
                    </span>
                    <div data-v-4ad1c7b1="" class="content-icon-wrapper">
                        @if($entry->kind == 'topic')
                        <svg data-v-4ad1c7b1="" height="64" width="64" viewBox="0 0 64 64" class="content-icon-bg" style="fill: rgb(38, 38, 38);"><polygon data-v-4ad1c7b1="" stroke-width="0" points="0,0 64,0 0,64"></polygon></svg>
                        <span data-v-3e0c0f19="" data-v-4ad1c7b1="" class="content-icon">
                                <span data-v-3e0c0f19="" class="ui-icon material-icons ui-tooltip--theme-default tooltip-target tooltip-abutted tooltip-abutted-top tooltip-element-attached-bottom tooltip-element-attached-middle tooltip-target-attached-top tooltip-target-attached-middle" aria-describedby="ui-tooltip-3ff0cfab"><!---->
                                <svg data-v-3e0c0f19="" role="presentation" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="color-undefined"><path data-v-3e0c0f19="" d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path></svg><!----><!----><!----><!----><!----><!----><!----><!----><!----></span>
                            </span>
                        @elseif($entry->kind == 'video')
                            <svg data-v-4ad1c7b1="" height="64" width="64" viewBox="0 0 64 64" class="content-icon-bg" style="fill: rgb(57, 56, 165);"><polygon data-v-4ad1c7b1="" stroke-width="0" points="0,0 64,0 0,64"></polygon></svg><span data-v-3e0c0f19="" data-v-4ad1c7b1="" class="content-icon"><span data-v-3e0c0f19="" class="ui-icon material-icons ui-tooltip--theme-default tooltip-target tooltip-element-attached-bottom tooltip-element-attached-middle tooltip-target-attached-top tooltip-target-attached-middle tooltip-abutted tooltip-abutted-top" aria-describedby="ui-tooltip-d5918fc2"><!----><!----><svg data-v-3e0c0f19="" role="presentation" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="color-undefined"><path data-v-3e0c0f19="" d="M21 3H3c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5a2 2 0 0 0-2-2zm0 14H3V5h18v12zm-5-6l-7 4V7z"></path></svg><!----><!----><!----><!----><!----><!----><!----><!----></span></span>
                        @elseif($entry->kind == 'exercise')
                            <svg data-v-4ad1c7b1="" height="64" width="64" viewBox="0 0 64 64" class="content-icon-bg" style="fill: rgb(14, 175, 175);"><polygon data-v-4ad1c7b1="" stroke-width="0" points="0,0 64,0 0,64"></polygon></svg><span data-v-3e0c0f19="" data-v-4ad1c7b1="" class="content-icon"><span data-v-3e0c0f19="" class="ui-icon material-icons ui-tooltip--theme-default tooltip-target tooltip-abutted tooltip-abutted-top tooltip-element-attached-bottom tooltip-element-attached-middle tooltip-target-attached-top tooltip-target-attached-middle" aria-describedby="ui-tooltip-a8806edd"><!----><!----><!----><!----><!----><svg data-v-3e0c0f19="" role="presentation" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="color-undefined"><path data-v-3e0c0f19="" d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"></path></svg><!----><!----><!----><!----><!----></span></span>
                        @endif
                    </div>


                </div>
                <div data-v-6608d7ac="" class="text">
                    <h3 data-v-6608d7ac="" dir="auto" class="title" style="font-size: 1em; margin-top: 10px ">
                        <div data-v-290b740e="" data-v-6608d7ac="" style="position: relative;">
                            <div data-v-290b740e="" >
                                {{strip_tags($entry->title)}}
                            </div><div data-v-290b740e="" class="show-more"><!----></div>
                            <div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></h3><!----><div data-v-6608d7ac="" class="footer"><!----><!----></div></div>
                <div dir="ltr" class="resize-sensor" style="position: absolute; left: -10px; top: -10px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div>
                    <div class="resize-sensor-shrink" style="position: absolute; left: -10px; top: -10px; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div>
                </div>
            </a>
        </div>
    </div>
@endforeach