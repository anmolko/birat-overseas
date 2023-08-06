<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#google-info-tab"
                   role="tab">
                    Google Info
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#add-website-metadata"
                   role="tab">
                    Meta Data
                </a>
            </li>
        </ul>
    </div>
    <!-- end card header -->
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="google-info-tab" role="tabpanel">
                <div class="mb-3">
                    <label class="form-label" for="analytics-code-input">Analytics Code</label>
                    <input type="text" class="form-control" name="google_analytics" id="analytics-code-input"
                           value="{{@$settings->google_analytics}}"
                           placeholder="Enter google analytics code here">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="google-map-input">Map URL</label>
                            <textarea class="form-control" name="google_map" id="google-map-input" placeholder="Enter company map location" rows="3">{{@$settings->google_map}}</textarea>

                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="meta-pixel-inputmeta-pixel-input">Meta Pixel</label>
                            <textarea class="form-control" name="meta_pixel" id="meta-pixel-input" placeholder="Enter meta pixel" rows="3">{{@$settings->meta_pixel}}</textarea>

                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end tab-pane -->

            <div class="tab-pane" id="add-website-metadata" role="tabpanel">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label" for="meta-title-input">Meta title</label>
                            <input type="text" class="form-control" placeholder="Enter meta title" value="{{@$settings->meta_title}}" name="meta_title" id="meta-title-input">
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div>
                    <label class="form-label" for="meta-keywords-input">Meta Keywords</label>
                    <input class="form-control" data-choices data-choices-multiple-remove="true" placeholder="Enter website tags" type="text" name="meta_tags"
                           value="{{@$settings->meta_tags}}" />
                </div>
                <div>
                    <label class="form-label" for="meta-description-input">Meta Description</label>
                    <textarea class="form-control" id="meta-description-input" placeholder="Enter meta description" name="meta_description" rows="3">{{@$settings->meta_description}}</textarea>
                </div>
            </div>
            <!-- end tab pane -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end card body -->
</div>
