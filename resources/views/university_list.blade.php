@extends('master')
@section('content')
    <div class="wrapper wrapper-content animated fadeInLeft">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>لیست پوهنتون ها </h5>
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
                    <a href="create_university">
                        <button class="btn btn-primary">
                            <li class="fa fa-plus"></li>&nbsp;تدویر پوهنتون
                        </button>
                    </a>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group"><span class="input-group-btn">
                    <button type="button" disabled class="btn btn-white"><i class="fa fa-search"></i>
                    </button> </span>
                                <input type="text" id="search" onkeyup="filter_search()" name="search_patient"
                                       placeholder="نام پوهنتون را جستجو کنید"
                                       class=" form-control"></div>
                        </div>
                    </div>
                    <br>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ای دی</th>
                            <th>نام</th>
                            <th>نام مسول</th>
                            <th>نام ولایت</th>
                            <th>نمبر اساس</th>
                            <th>تاریخ ایجاد</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                            <th>جزییات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>۱</td>
                            <td>کابل</td>
                            <td>احمدی</td>
                            <td>کابل</td>
                            <td>۳۲۹۲۹</td>
                            <td>۱۳۹۷/۲/۳</td>
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
                            <td>۲</td>
                            <td>پولیتخنیک</td>
                            <td>سعید محمد کاکر</td>
                            <td>کابل</td>
                            <td>۳۲۹۲۹</td>
                            <td>۱۳۹۷/۲/۳</td>
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
                            <td>۳</td>
                            <td>شهید ربانی</td>
                            <td>بارکزی</td>
                            <td>کابل</td>
                            <td>۴۳۸۷۷۳</td>
                            <td>۱۳۹۷/۲/۴</td>
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
                            <td>۵</td>
                            <td>پوهنتون طبعی</td>
                            <td>کریمی</td>
                            <td>کابل</td>
                            <td>۴۳۳۸</td>
                            <td>۱۳۹۷/۴/۳</td>
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
                            <td>۶</td>
                            <td>بلخ</td>
                            <td>کریمی</td>
                            <td>بلخ</td>
                            <td>۴۳۳۸</td>
                            <td>۱۳۹۷/۴/۳</td>
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
                            <td>۷</td>
                            <td>البیرونی</td>
                            <td>احمدی</td>
                            <td>کاپیسا</td>
                            <td>۴۳۳۸</td>
                            <td>۱۳۹۷/۴/۳</td>
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
                            <td>۸</td>
                            <td>پوهنتون پروان</td>
                            <td>کریمی</td>
                            <td>پروان</td>
                            <td>۴۳۳۸</td>
                            <td>۱۳۹۷/۴/۳</td>
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

                                        <div class="col-lg-10"><input type="text" placeholder="نام را وارد کنید"
                                                                      class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">تخلص</label>

                                        <div class="col-lg-10"><input type="text" placeholder="تخلص"
                                                                      class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">نام مکمل</label>

                                        <div class="col-lg-10"><input type="text" placeholder="نام مکمل"
                                                                      class="form-control">
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
                        <button type="button" class="btn btn-white" style="float: right" data-dismiss="modal">بستن
                        </button>
                        <button type="button" class="btn btn-primary" style="float: right">ذخیره کردن</button>
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
                        <button type="button" class="btn btn-white" style="float: right" data-dismiss="modal">بستن
                        </button>
                        <button type="button" class="btn btn-primary" style="float: right">ذخیره کردن</button>
                    </div>
                </div>
            </div>
        </div>
        {{--end of details modal window--}}

        @endsection
        @section('script')
            {{-- filter search for patient name --}}
            <script>
                function filter_search() {
                    // Declare variables
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("search");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("table_patient");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>

@endsection