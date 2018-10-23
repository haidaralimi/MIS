@extends('master')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>تبدیل رمز</h5>
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
                <br>
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal">

                            <div class="form-group"><label class="col-lg-2 control-label">رمز قبلی</label>

                                <div class="col-lg-8"><input type="password" placeholder="رمز قبلی را وارد کنید"
                                                              class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">رمز جدید</label>

                                <div class="col-lg-8"><input type="password" placeholder="رمز جدید وارد کنید"
                                                              class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label">تایید رمز جدید</label>

                                <div class="col-lg-8"><input type="password" placeholder="تایید رمز جدید"
                                                              class="form-control"></div>
                            </div>


                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-md btn-primary" type="submit">&nbsp;&nbsp;<b>تبدیل</b></button>
                                    <input class="btn btn-md btn-white" type="reset" value="منصرف شدن">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection