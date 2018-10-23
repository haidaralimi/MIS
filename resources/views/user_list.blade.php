@extends('master')
@section('content')
    <div class="wrapper wrapper-content animated fadeInLeft">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>لیست استفاده کننده ها</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-2">
                            <a href="create_user">
                                <button class="btn btn-primary">
                                    <li class="fa fa-plus"></li>&nbsp;<b>ایجاد استفاده کننده جدید</b>
                                </button>
                            </a>
                        </div>
                    </div>
                    <br>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ای دی</th>
                            <th>نام</th>
                            <th>تخلص</th>
                            <th>نام مکمل</th>
                            <th>جنسیت</th>
                            <th>مقام</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                            <th>جزییات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>احمد</td>
                            <td>احمدی</td>
                            <td>احمد احمدی</td>
                            <td>مرد</td>
                            <td>آمر</td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i
                                            class="fa fa-edit"></i>&nbsp;ویرایش
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#details"><i
                                            class="fa fa-info"></i>&nbsp;جزییات
                                </button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--start of edit modal window--}}
    <div class="modal inmodal" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-edit modal-icon"></i>
                    <h6 class="modal-title">ویرایش محتوا</h6>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal">
                                <div class="form-group"><label class="col-lg-2 control-label">نام</label>

                                    <div class="col-lg-10"><input type="text" placeholder="نام را وارد کنید" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">تخلص</label>

                                    <div class="col-lg-10"><input type="text" placeholder="تخلص" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">نام مکمل</label>

                                    <div class="col-lg-10"><input type="text" placeholder="نام مکمل" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">جنسیت</label>

                                    <div class="col-lg-10">
                                        <select name="" id="" class="form-control">
                                            <option value="">جنسیت را انتخاب کنید</option>
                                            <option value="">مرد</option>
                                            <option value="">زن</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">مقام</label>

                                    <div class="col-lg-10">
                                        <select name="" id="" class="form-control">
                                            <option value="">مقام را انتخاب کنید</option>
                                            <option value="">ریس</option>
                                            <option value="">آمر</option>
                                            <option value="">معاون</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">رمز</label>

                                    <div class="col-lg-10"><input type="password" placeholder="رمز تان را وارد کنید"
                                                                  class="form-control"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary " style="float: right">ذخیره کردن</button>
                    <button type="button" class="btn btn-white " style="float: right" data-dismiss="modal">بستن</button>

                </div>
            </div>
        </div>
    </div>
    {{--end of edit modal window--}}

    {{--start of details  modal window--}}
    <div class="modal inmodal" id="details" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-clock-o modal-icon"></i>
                    <h4 class="modal-title">جزییات پوهنتون</h4>
                </div>
                <div class="modal-body">

                    <tr>
                        <td>ای دی</td>
                        <td>۱۰</td>
                    </tr>
                    <tr>
                        <td>نام</td>
                        <td>پوهنتون هرات</td>
                    </tr>
                    <tr>
                        <td>نام مسول</td>
                        <td>بارکزی</td>
                    </tr>
                    <tr>
                        <td>نمبر اساس</td>
                        <td>۲۳۹۳</td>
                    </tr>
                    <tr>
                        <td>سال ایجاد</td>
                        <td>۱۳۹۷/۳/۲</td>
                    </tr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button type="button" class="btn btn-primary">ذخیره کردن</button>
                </div>
            </div>
        </div>
    </div>
    {{--end of details modal window--}}

@endsection
@section('script')
    <!-- script -->

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script> $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function () {
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });

            $('.demo3').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });

            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });


        });
    </script>



    <!-- Data Tables -->
    <script src="dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>


@endsection