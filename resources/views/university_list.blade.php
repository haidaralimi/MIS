@extends('master')
@section('content')
<div class="wrapper wrapper-content animated fadeInLeft">
<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>لیست پوهنتون ها</h5>
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
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                <tr>
                                    <td>۲</td>
                                    <td>پولیتخنیک</td>
                                    <td>سعید محمد کاکر</td>
                                    <td>کابل</td>
                                    <td>۳۲۹۲۹</td>
                                    <td>۱۳۹۷/۲/۳</td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                <tr>
                                    <td>۳</td>
                                   <td>شهید ربانی</td>
                                   <td>بارکزی</td>
                                   <td>کابل</td>
                                   <td>۴۳۸۷۷۳</td>
                                   <td>۱۳۹۷/۲/۴</td>
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                 <tr>
                                    <td>۵</td>
                                   <td>پوهنتون طبعی</td>
                                   <td>کریمی</td>
                                   <td>کابل</td>
                                   <td>۴۳۳۸</td>
                                   <td>۱۳۹۷/۴/۳</td>
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                <tr>
                                    <td>۶</td>
                                    <td>بلخ</td>
                                    <td>کریمی</td>
                                    <td>بلخ</td>
                                    <td>۴۳۳۸</td>
                                    <td>۱۳۹۷/۴/۳</td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                <tr>
                                    <td>۷</td>
                                    <td>البیرونی</td>
                                    <td>احمدی</td>
                                    <td>کاپیسا</td>
                                    <td>۴۳۳۸</td>
                                    <td>۱۳۹۷/۴/۳</td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                <tr>
                                    <td>۸</td>
                                    <td>پوهنتون پروان</td>
                                    <td>کریمی</td>
                                    <td>پروان</td>
                                    <td>۴۳۳۸</td>
                                    <td>۱۳۹۷/۴/۳</td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                <tr>
                                    <td>۹</td>
                                    <td>پوهنتون قندهار</td>
                                    <td>هاشمی</td>
                                    <td>قندهار</td>
                                    <td>۴۳۳۸</td>
                                    <td>۱۳۹۷/۴/۳</td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                    <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                 <tr>
                                    <td>۱۰</td>
                                   <td>پوهنتون هرات</td>
                                   <td>الکوزی</td>
                                   <td>هرات</td>
                                   <td>۳۸۳۸</td>
                                   <td>۱۳۹۷/۲/۴</td>
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;ویرایش</button></td>
                                    <td><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i>&nbsp;حذف</button></td>
                                     <td><button class="btn btn-primary btn-xs"><i class="fa fa-info"></i>&nbsp;جزییات</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection