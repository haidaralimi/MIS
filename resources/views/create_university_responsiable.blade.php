@extends('master')
@section('content')
    <div class="wrapper wrapper-content animated fadeInLeft">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>  تعین مسول به سطح پوهنتون</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="#">Config option 1</a>
                                </li>
                                <li>
                                    <a href="#">Config option 2</a>
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
                                <a href="university_responsiable_list">
                                    <button class="btn btn-primary">
                                        <li class="fa fa-list"></li>&nbsp;<b> لیست مسولین</b>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <!-- form -->
                        <form method="post" class="form-horizontal" action="">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">نام  :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="نام" style="width:50%"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">تخلص :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" placeholder="تخلص"
                                           style="width:50%" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">رتبه علمی :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" style="width:50%">
                                        <option>رتبه علمی را انتخاب کنید </option>
                                        <option>پوهاند</option>
                                        <option>پوهنمل</option>
                                        <option>پوهندوی</option>
                                        <option>پوهنیار</option>


                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">پوهنتون :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" style="width:50%">
                                        <option>پوهنتون را انتخاب کنید</option>
                                        <option>کابل</option>
                                        <option>پولیتخنیک</option>
                                        <option>شهید ربانی</option>
                                        <option>پوهنتون طبی کابل</option>
                                        <option>البیرونی</option>
                                        <option> پوهنتون کندز</option>
                                        <option>پوهنتون بلخ</option>


                                    </select>

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">نمبر حکم مقام وزارت&nbsp;&nbsp;:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" placeholder="نمبر حکم مقام وزارت"
                                           style="width:50%" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">نمبر صادره مکتوب&nbsp; :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="purpose" placeholder="نمبر صادره مکتوب"
                                           style="width:50%" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">تاریخ تدویر&nbsp;&nbsp;:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="purpose" placeholder="نام ولایت"
                                           style="width:50%" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">درج مکتوب&nbsp;&nbsp;:</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="purpose" placeholder="نام ولایت"
                                           style="width:50%" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-md" style="margin-left:10px;">ذخیره
                                        &nbsp;<i class="fa fa-save"></i></button>
                                    <input type="reset" class="btn btn-white btn-md" value="منصرف شدن">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection