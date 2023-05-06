<div class="sidebar">
    <div class="sidebar__single sidebar__post">
        @if(count($slider_lists)>0)
            <h3 class="sidebar__title">Related List</h3>
            <ul class="sidebar__post-list list-unstyled">
                @foreach($slider_lists as $index => $latest)
                    <li>
                        <div class="sidebar__post-image">
                            <img src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$latest->list_image) }}" alt="">
                        </div>
                        <div class="sidebar__post-content">
                            <h3>
                             <span class="sidebar__post-content-meta">
                                 <i class="far fa-calendar-alt"></i> {{date('j M, Y',strtotime(@$latest->created_at))}}</span>
                                <a href="{{url('/slider-list/'.$latest->subheading)}}">   {{{ucwords(@$latest->list_header)}}}</a>
                            </h3>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

