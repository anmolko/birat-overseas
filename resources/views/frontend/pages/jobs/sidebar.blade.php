<div class="sidebar">
    <div class="sidebar__single sidebar__search">
        <form method="get" id="searchform" action="{{route('searchJob')}}" class="sidebar__search-form">
            <input
                type="text"
                id="s"
                name="s"
                placeholder="Search Jobs....."
                oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required
            />
            <button type="submit"><i class="icon-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="sidebar__single sidebar__post">
        @if(count($latestJobs)>0)
            <h3 class="sidebar__title">Latest Posts</h3>
            <ul class="sidebar__post-list list-unstyled">
                @foreach($latestJobs as $index => $latest)
                    <li>
                        <div class="sidebar__post-image">
                            <img src="{{ ($latest->image !== null) ? asset('/images/job/thumb/thumb_'.@$latest->image): asset('assets/frontend/images/birat_thumb.png')}}" alt="">
                        </div>
                        <div class="sidebar__post-content">
                            <h3>
                             <span class="sidebar__post-content-meta">
                                 <i class="far fa-calendar-alt"></i>
                                   @if(@$latest->end_date >= $today)
                                     Expires on - {{date('M j, Y',strtotime(@$latest->end_date))}}
                                 @else
                                     Expired
                                 @endif
                             </span>
                                <a href="{{route('job.single',@$latest->slug)}}">  {{ucwords(@$latest->name)}}</a>
                            </h3>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
