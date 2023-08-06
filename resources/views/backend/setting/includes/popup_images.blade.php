<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Homepage Popup Images</h5>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <label>Popup image 1</label>
            <div style="margin: auto;width: 60%;">
                <img id="current-edit-heading"  src="{{ ($settings->intro_heading !== null) ? asset('images/settings/'.$settings->intro_heading) :  asset('images/default-image.jpg') }}" class="position-relative img-fluid img-thumbnail blog-feature-image" >
                <input  type="file" accept="image/png, image/jpeg" hidden
                        id="image-heading" onchange="loadbasicFile('image-heading','current-edit-heading',event)" name="intro_heading"
                        class="profile-foreground-img-file-input" >
                <div class="invalid-feedback" >
                    Please select a image.
                </div>
                <label for="image-heading" class="profile-photo-edit btn btn-light feature-image-button">
                    <i class="ri-image-edit-line align-bottom me-1"></i> Update Image
                </label>
            </div>
        </div>
        <div class="mb-4">
            <label>Popup image 1</label>
            <div style="margin: auto;width: 60%;">
                <img id="current-edit-subheading"  src="{{ ($settings->intro_subheading !== null) ? asset('images/settings/'.$settings->intro_subheading) :  asset('images/default-image.jpg') }}" class="position-relative img-fluid img-thumbnail blog-feature-image" >
                <input  type="file" accept="image/png, image/jpeg" hidden
                        id="image-subheading" onchange="loadbasicFile('image-subheading','current-edit-subheading',event)" name="intro_subheading"
                        class="profile-foreground-img-file-input" >
                <div class="invalid-feedback" >
                    Please select a image.
                </div>
                <label for="image-subheading" class="profile-photo-edit btn btn-light feature-image-button">
                    <i class="ri-image-edit-line align-bottom me-1"></i> Update Image
                </label>
            </div>
        </div>

    </div>
</div>
<!-- end card -->
