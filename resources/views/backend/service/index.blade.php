@extends('backend.layouts.master')
@section('title', "Service List")
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/custom_css/datatable_style.css')}}">
    <link href="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <style>


    </style>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Services</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Service List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <h4 class="card-title mb-0">Service List</h4>

                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div>
                                            <a href="{{route('services.create')}}" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i>New Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row" >

                                <div class="table-responsive  mt-3 mb-1">
                                    <table id="service-index" class="table align-middle table-nowrap table-striped">
                                        <thead class="table-light">
                                        <tr>
                                            <th width="30px">#</th>
                                            <th>Banner Image</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="service-list">
                                        @if(!empty($services))
                                            @foreach($services as  $service)
                                                <tr id="service-individual-{{@$service->id}}" class="row1" data-id="{{ $service->id }}">
                                                    <td class="pl-3"><i class=" ri-drag-move-2-fill"></i></td>
                                                    <td>
                                                        <img src="{{asset('/images/service/'.@$service->banner_image)}}" alt="{{@$blog->title}}" class="figure-img rounded avatar-lg">
                                                    </td>
                                                    <td>
                                                        {{ ucwords(@$service->title) }}
                                                    </td><td >
                                                        {{ @$service->slug}}
                                                    </td>
                                                    <td >
                                                        <div class="row">

                                                            <div class="col text-center dropdown">
                                                                <a href="javascript:void(0);" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill fs-17"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2">
                                                                    <li><a class="dropdown-item" href="{{route('services.edit',$service->id)}}"><i class="ri-pencil-fill me-2 align-middle"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item cs-service-remove" cs-delete-route="{{route('services.destroy',$service->id)}}"><i class="ri-delete-bin-6-line me-2 align-middle"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end row-->
                            <form action="#" method="post" id="deleted-form">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>


@endsection

@section('js')
    <script src="{{asset('assets/backend/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/pages/form-validation.init.js')}}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/jquery-ui.min.js')}}"></script>

    <script src="{{asset('assets/backend/custom_js/service.js')}}"></script>

    <script>
        $( "#service-index" ).sortable({
            items: "tr",
            cursor: 'move',
            opacity: 0.6,
            update: function() {
                sendOrderToServer();
            }
        });

        function sendOrderToServer() {
            var order = [];
            var token = $('meta[name="csrf-token"]').attr('content');
            $('tr.row1').each(function(index,element) {
                order.push({
                    id: $(this).attr('data-id'),
                    position: index+1
                });
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('services.order') }}",
                data: {
                    order: order,
                    _token: token
                },
                success: function(response) {
                    if (response.status == "200") {
                        Swal.fire({
                            imageHeight: 60,
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
                    } else {
                        Swal.fire({
                            imageHeight: 60,
                            html: '<div class="mt-2">' +
                                '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
                                ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
                                'style="width:120px;height:120px"></lord-icon>' +
                                '<div class="mt-4 pt-2 fs-15">' +
                                '<h4>Oops...! </h4>' +
                                '<p class="text-muted mx-4 mb-0">' + response +'</p>' +
                                '</div>' +
                                '</div>',
                            timerProgressBar: !0,
                            timer: 3000,
                            showConfirmButton: !1
                        });

                    }
                }
            });
        }

    </script>



@endsection
