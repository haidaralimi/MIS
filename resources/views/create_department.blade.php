@extends('master')
@section('content')
<div class="wrapper wrapper-content animated fadeInLeft">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>ایجاد دیپارتمنت</h5>
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
                                <label class="col-sm-2 control-label">نام دیپارتمنت :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="نام دیپارتمنت" style="width:50%"
                                           required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">پوهنحی :</label>
                               <div class="col-sm-10">

                           			<select class="form-control" style="width:50%" >
	                                 			<option>پوهنحی را انتخاب کنید</option>
	                                            <option>تعلیم تربیه</option>
	                                            <option>اقتصاد</option>
	                                            <option>زراعت</option>
	                                            <option>هنرهای زیبا</option>
	                                            <option>ژورنالیزم</option>
                                            <option>اداره و عامه</option>
                                        </select>

                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">پوهنتون :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" style="width:50%">
                                        <option>پوهنتون را انتخاب کنید</option>
                                        <option>کابل</option>
                                        <option>پولیتخنیک</option>
                                        <option>شهید ربانی</option>
                                        <option>بلخ</option>
                                        <option>البیرونی</option>

                                    </select>

                                </div>
                            </div>


                             <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">نمبر اساس :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" placeholder="نمبر اساس"
                                           style="width:50%" required>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">تاریخ ایجاد :</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="amount" placeholder="تاریخ"
                                           style="width:50%" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-1 control-label"></label>
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