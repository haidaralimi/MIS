@extends('master')
@section('content')
    <div class="row" style="margin-left:2px;margin-right: 20px;">
        <div class="col-sm-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px; width: 200px;" href="/university_list"><i class="fa fa-list pull-left"
                                                                                                                               style="color:#ffc000; font-size: 25px;"></i><b style="font-size: 15px">لیست پوهنتون ها</b></a></h2>
        </div>
        <div class="col-sm-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px; width: 200px;" href="/create_university_responsiable"><i class="fa fa-plus pull-left"
                                                                                                                               style="color:#ffc000; font-size: 25px;"></i><b style="font-size: 15px">تعین مسول پوهنتون</b></a></h2>
        </div>
        <div class="col-sm-3">
            <h2><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px; width: 200px;" href="/university_report"><i class="fa fa-file-pdf-o pull-left"
                                                                                                                               style="color:#ffc000; font-size: 25px;"></i><b style="font-size: 15px">گزارش پوهنتون ها</b></a></h2>
        </div>



    </div>
    <div class="wrapper wrapper-content animated fadeInLeft">
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>تدویر پوهنتون</h5>
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
                        <!-- form -->


                        <form method="post" class="form-horizontal" action="">
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> نام پوهنتون&nbsp;&nbsp; :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="نام پوهنتون " style="width:50%"
                                           required>
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
                                    <input type="reset" class="btn btn-white btn-md" value="منصرف">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection