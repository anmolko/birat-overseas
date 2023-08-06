<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Related Images</h5>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <h5 class="fs-14 mb-1">Main Logo</h5>
            @if(!empty($settings->logo))
                <img src="{{asset('images/settings/'.@$settings->logo)}}" class="img-thumbnail" width="300" alt="One Slide">
            @endif
            <p class="text-muted">Add the logo (883 * 269 px) for frontend and backend display.</p>
            <input class="form-control" name="logo" id="main-logo-input" type="file" accept="image/png, image/jpeg">
        </div>
        <div class="mb-4">
            <h5 class="fs-14 mb-1">White Logo</h5>
            @if(!empty($settings->logo_white))
                <img src="{{asset('images/settings/'.@$settings->logo_white)}}" class="img-thumbnail" width="300" alt="Two Slide">
            @endif
            <p class="text-muted">Add the white logo (883 * 269 px) for frontend display.</p>

            <input class="form-control" name="logo_white" id="white-logo-input" type="file" accept="image/png, image/jpeg">
        </div>
        <div class="mb-4">
            <h5 class="fs-14 mb-1">Favicon</h5>
            @if(!empty($settings->favicon))
                <img src="{{asset('images/settings/'.@$settings->favicon)}}" class="img-thumbnail" width="50" alt="Three Slide">
            @endif
            <p class="text-muted">Add the favicon(32 * 32px).</p>

            <input class="form-control" name="favicon" id="favicon-logo-input" type="file" accept="image/png, image/jpeg">
        </div>
    </div>
</div>
<!-- end card -->
