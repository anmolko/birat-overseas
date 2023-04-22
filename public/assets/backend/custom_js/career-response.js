$(document).ready(function () {
    var table = $('#response-index').DataTable({
        paging: true,
        searching: true,
        ordering:  true,
        lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
    });
    if(response !== ''){
        table.columns( 0 )
            .search(response)
            .draw();
    }
});

$(document).on('click','.cs-response-remove', function (e) {
    e.preventDefault();
    var form = $('#deleted-form');
    var action = $(this).attr('cs-delete-route');
    form.attr('action',action);
    var url = form.attr('action');
    var form_data = form.serialize();
    Swal.fire({
        imageUrl: "/assets/backend/images/canosoft-logo.png",
        imageHeight: 90,
        html: '<div class="mt-2">' +
            '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
            ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
            'style="width:120px;height:120px"></lord-icon>' +
            '<div class="mt-4 pt-2 fs-15">' +
            '<h4>Are your sure? </h4>' +
            '<p class="text-muted mx-4 mb-0">' +
            'You want to Remove this Record ?</p>' +
            '</div>' +
            '</div>',
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        cancelButtonClass: "btn btn-danger w-xs mt-2",
        confirmButtonText: "Yes!",
        buttonsStyling: !1,
        showCloseButton: !0
    }).then(function(t)
    {
        t.value
            ?
            $.post( url, form_data)
                .done(function(response) {
                    if(response.status == "success") {
                        Swal.fire({
                            imageUrl: "/assets/backend/images/canosoft-logo.png",
                            imageHeight: 90,
                            html: '<div class="mt-2">' +
                                '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json"' +
                                'trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px">' +
                                '</lord-icon>' +
                                '<div class="mt-4 pt-2 fs-15">' +
                                '<h4>Success !</h4>' +
                                '<p class="text-muted mx-4 mb-0">' + response.message +'</p>' +
                                '</div>' +
                                '</div>',
                            timerProgressBar: !0,
                            timer: 2e3,
                            showConfirmButton: !1
                        });

                        setTimeout(function() {
                            location.reload();
                        }, 3800);
                    }else{
                        Swal.fire({
                            imageUrl: "/assets/backend/images/canosoft-logo.png",
                            imageHeight: 90,
                            html: '<div class="mt-2">' +
                                '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
                                ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
                                'style="width:120px;height:120px"></lord-icon>' +
                                '<div class="mt-4 pt-2 fs-15">' +
                                '<h4>Oops...! </h4>' +
                                '<p class="text-muted mx-4 mb-0">' + response.message +'</p>' +
                                '</div>' +
                                '</div>',
                            timerProgressBar: !0,
                            timer: 3000,
                            showConfirmButton: !1
                        });
                    }
                })
                .fail(function(response){
                    console.log(response)
                })

            :
            t.dismiss === Swal.DismissReason.cancel &&
            Swal.fire({
                title: "Cancelled",
                text: "Customer package response was not removed.",
                icon: "error",
                confirmButtonClass: "btn btn-primary mt-2",
                buttonsStyling: !1
            });
    });
});

$(document).on('click','.cs-career-view', function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $.ajax({
        url: $(this).attr('cs-edit-route'),
        type: "GET",
        cache: false,
        dataType: 'json',
        success: function(dataResult){
            $('#career-name').text(dataResult.edit.name);
            $('#career-slug').text(dataResult.edit.slug);
            $('#career-position').text(dataResult.edit.position);
            var type = dataResult.edit.type;
            $('#career-type').text(type.replace(/_/g," "));
            $('#career-end-date').text(dataResult.date);
            var career = (dataResult.edit.salary !== null) ? dataResult.edit.salary:"Not Assigned";
            $('#career-salary').text(career);
            $('#career-status').text(dataResult.edit.status);
            var myContent = dataResult.edit.description;
            if(dataResult.edit.feature_image !== null){
                $('#career-image').attr("src",'/images/career/'+dataResult.edit.feature_image );
            }
            $('#career-description').text( myContent.replace(/(<([^>]+)>)/ig,""));
            $( "#career_"+id).click();
        },
        error: function(error){
            console.log(error)
        }
    });
});

$(document).on('click','.change-status', function (e) {
    e.preventDefault();
    var status = $(this).attr('cs-status-value');
    var url = $(this).attr('cs-update-route');
    statusupdate(url,status);
});

function statusupdate(url,status){
    $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        },
        url: url,
        type: "PATCH",
        cache: false,
        data:{
            status: status,
        },
        success: function(response){
            console.log(response);
            if(response.status == "success"){
                var oldstatus         = response.old_status;
                var status_url        = "/auth/career-response/"+response.id+"/status/";
                var replacementblock  = '#status-button-'+response.id;
                var replacement = '<button class="btn btn-light dropdown-toggle" style="width: 10em;" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> '
                    +
                    response.new_status
                    +
                    '</button><ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside" style="">' +
                    '<li>' +
                    '<a class="dropdown-item change-status" cs-update-route="'+status_url+'" href="#" cs-status-value="'+response.value+'">'+oldstatus+'</a>' +
                    '</li></ul>';

                Swal.fire({
                    imageUrl: "/assets/backend/images/canosoft-logo.png",
                    imageHeight: 90,
                    html: '<div class="mt-2">' +
                        '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json"' +
                        'trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px">' +
                        '</lord-icon>' +
                        '<div class="mt-4 pt-2 fs-15">' +
                        '<h4>Success !</h4>' +
                        '<p class="text-muted mx-4 mb-0">' +
                        'Career Response Status has been updated .</p>' +
                        '</div>' +
                        '</div>',
                    timerProgressBar: !0,
                    timer: 2e3,
                    showConfirmButton: !1
                });
                $(replacementblock).html('');
                $(replacementblock).html(replacement);
            }else{

                Swal.fire({
                    imageUrl: "/assets/backend/images/canosoft-logo.png",
                    imageHeight: 90,
                    html: '<div class="mt-2">' +
                        '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
                        ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
                        'style="width:120px;height:120px"></lord-icon>' +
                        '<div class="mt-4 pt-2 fs-15">' +
                        '<h4>Oops...! </h4>' +
                        '<p class="text-muted mx-4 mb-0">' +
                        'Career Response status could not be changed at the moment .</p>' +
                        '</div>' +
                        '</div>',
                    timerProgressBar: !0,
                    timer: 3000,
                    showConfirmButton: !1
                });
            }
        },
        error: function() {
            Swal.fire({
                imageUrl: "/assets/backend/images/canosoft-logo.png",
                imageHeight: 90,
                html: '<div class="mt-2">' +
                    '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
                    ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
                    'style="width:120px;height:120px"></lord-icon>' +
                    '<div class="mt-4 pt-2 fs-15">' +
                    '<h4>Warning...! </h4>' +
                    '<p class="text-muted mx-4 mb-0">' +
                    'Could not confirm the status of the Career Response.</p>' +
                    '</div>' +
                    '</div>',
                timerProgressBar: !0,
                timer: 3000,
                showConfirmButton: !1
            });
        }
    });
}
