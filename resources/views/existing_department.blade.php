@extends('master')
@section('content')

<div class="wrapper wrapper-content animated fadeInLeft">
<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>لیست دیپارتمنت ها</h5>
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
                                    <a href="create_department">
                                        <button class="btn btn-primary">
                                            <li class="fa fa-plus"></li>&nbsp; ایجاد دیپارتمنت جدید
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <br>

                            <table class="table table-hover text-center">
                                <thead>
                                <tr class="text-center">
                                    <th>ای دی</th>
                                    <th>نام دیپارتمنت</th>
                                    <th>نام پوهنحی</th>
                                    <th>نام پوهنتون</th>
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
                                   <td>دری</td>
                                   <td>ادبیات</td>
                                   <td>کابل</td>
                                   <td>۱۷۳۷</td>
                                   <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>۱</td>
                                    <td>دری</td>
                                    <td>ادبیات</td>
                                    <td>کابل</td>
                                    <td>۱۷۳۷</td>
                                    <td>۱۳۹۷/۳/۲</td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit">ویرایش&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-danger btn-xs">حذف&nbsp;<i class="fa fa-edit"></i></button></td>
                                    <td><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#details">جزییات&nbsp;<i class="fa fa-edit"></i></button></td>

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
                <i class="fa fa-clock-o modal-icon"></i>
                <h4 class="modal-title">ویرایش محتوا</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="id">ای دی</label>
                    <input type="text" class="form-control" value="1" name="id" disabled>
                </div>
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" class="form-control" value="کابل" name="name" >
                </div>
                <div class="form-group">
                    <label for="name">نام مسول</label>
                    <input type="text" class="form-control" value="بارکزی" name="responsiable" >
                </div>
                <div class="form-group">
                    <label for="name">نام ولایت</label>
                    <input type="text" class="form-control" value="کابل" name="responsiable" >
                </div>
                <div class="form-group">
                    <label for="name">نمبر اساس</label>
                    <input type="text" class="form-control" value="۲۹۲۸" name="responsiable" >
                </div>
                <div class="form-group">
                    <label for="name">تاریخ ایجاد</label>
                    <input type="text" class="form-control" value="۱۳۹۷/۲/۴" name="responsiable" >
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                <button type="button" class="btn btn-primary">ذخیره کردن</button>
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