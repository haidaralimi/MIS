@extends('master')

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>ایجاد استفاده کننده جدید</h5>
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
                        <a href="user_list">
                            <button class="btn btn-primary">
                                <li class="fa fa-list"></li>&nbsp; <b>لیست استفاده کننده ها</b>
                            </button>
                        </a>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-lg-6">
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

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-sm btn-primary" type="submit"><b>ایجاد استفاده کننده</b></button>
                                    <input class="btn btn-sm btn-white" type="reset" value="منصرف شدن">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection