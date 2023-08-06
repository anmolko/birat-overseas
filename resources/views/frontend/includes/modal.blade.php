<div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content" style="background-color: transparent;">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <img  class="w-100" src="{{$setting_data->intro_heading ? asset('/images/settings/'.@$setting_data->intro_heading):''}}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="secondmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="background-color: transparent;">
            <div class="modal-body">
                <img class="w-100" src="{{$setting_data->intro_subheading ? asset('/images/settings/'.@$setting_data->intro_subheading):''}}" alt="">
            </div>
        </div>
    </div>
</div>
