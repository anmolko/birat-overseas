<div class="tab-pane fade" id="image-and-description" role="tabpanel">
    {!! Form::open(['url'=>route('homepage.image_description', @$homesettings->id),'id'=>'homesettings-simple-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}
        <div class="row  mb-4">
        <div class="col-lg-8">
            <figure class="figure">
                <img src="{{asset('images/welcome.png')}}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Output Sample.</figcaption>
            </figure>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="welcome-heading-input">Heading <span class="text-muted text-danger">*</span></label>
                        <input type="text" class="form-control" id="welcome-heading-input" name="what_heading1" value="{{@$homesettings->what_heading1}}"
                               placeholder="Enter  heading" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="welcome-subheading-input">Sub Heading </label>
                        <input type="text" class="form-control" id="welcome-subheading-input" name="what_heading2" value="{{@$homesettings->what_heading2}}"
                               placeholder="Enter  subheading">
                    </div>
                    <div class="position-relative mb-3">
                        <label> Description <span class="text-muted text-danger">*</span></label>
                        <textarea class="form-control" maxlength="1215" name="what_heading3" placeholder="Enter welcome description" rows="8" required>{{@$homesettings->what_heading3}}</textarea>
                        <div class="invalid-tooltip">
                            Please enter the  description.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Button Text </label>
                        <input type="text" maxlength="20" class="form-control" value="{{@$homesettings->what_heading4}}" name="what_heading4">
                        <div class="invalid-feedback">
                            Please enter the button text.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Button Link </label>
                        <input type="text" class="form-control" value="{{@$homesettings->what_heading5}}" name="what_heading5">
                        <div class="invalid-feedback">
                            Please enter the button link.
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mb-3">
                <button type="submit" class="btn btn-success w-sm">{{($homesettings->what_heading1 !== null) ? "Update":"Save"}}</button>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="sticky-side-div">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Other Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="welcome-video-input">Main Image</label>
                            <img  id="current-what_image2"  src="{{ (@$homesettings->what_image2 !== null) ? asset('images/home/welcome/'.@$homesettings->what_image2) :  asset('images/default-image.jpg') }}" class="position-relative img-fluid img-thumbnail welcome-feature-image" >
                            <input  type="file" accept="image/png, image/jpeg" hidden
                                    id="profile-foreground-img-file2-input" onchange="loadbasicFile('profile-foreground-img-file2-input','current-what_image2',event)" name="what_image2" {{ (@$homesettings->what_image2 !== null) ? '' :  'required' }}
                                    class="profile-foreground-img-file2-input" >

                            <figcaption class="figure-caption">*use image minimum of 500 x 510px </figcaption>
                            <div class="invalid-feedback" >
                                Please select a image.
                            </div>
                            <label for="profile-foreground-img-file2-input" class="profile-photo-edit btn btn-light feature-image-button">
                                <i class="ri-image-edit-line align-bottom me-1"></i> Add  Image
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
