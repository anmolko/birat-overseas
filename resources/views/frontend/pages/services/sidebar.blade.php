<div class="sidebar">
    <div class="sidebar__single sidebar__post">
        @if(count($latestServices)>0)
            <h3 class="sidebar__title">Latest Posts</h3>
            <ul class="sidebar__post-list list-unstyled">
                @foreach($latestServices as $index => $latest)
                    <li>
                        <div class="sidebar__post-image">
                            <img src="{{ ($latest->banner_image !== null) ? asset('/images/service/thumb/thumb_'.@$latest->banner_image):""}}" alt="">
                        </div>
                        <div class="sidebar__post-content">
                            <h3>
                             <span class="sidebar__post-content-meta">
                                 <i class="far fa-calendar-alt"></i> {{date('j M, Y',strtotime(@$latest->created_at))}}</span>
                                <a href="{{route('service.single',$latest->slug)}}">{{ucwords(@$latest->title)}}</a>
                            </h3>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

