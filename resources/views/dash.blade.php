@extends('master')
@section('content')
<div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>پوهنتون ها</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">۱۹</h1>
                                <div class="stat-percent font-bold text-success">۱۹ <i class="fa fa-bolt"></i></div>
                                <small>مجموع پوهنتون ها</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>پوهنحی ها</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">۵۴</h1>
                                <div class="stat-percent font-bold text-info">۵۴ <i class="fa fa-level-up"></i></div>
                                <small>مجموع پوهنحی ها</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>دیپارتمنت ها</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">۱۴۹</h1>
                                <div class="stat-percent font-bold text-navy">۱۴۹</div>
                                <small>مجموع دیپارتمنت ها </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>ورود موفقانه صورت گرفت</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">خوش امدید</h1>
                                <div class="stat-percent font-bold text-danger"></div>
                                <small>حیدر حلیمی</small>
                            </div>
                        </div>
            </div>
        </div>

<div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>گزارشات</h5>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-xs btn-white active">امروز</button>
                                        <button type="button" class="btn btn-xs btn-white">هفته وار</button>
                                        <button type="button" class="btn btn-xs btn-white">ماهانه</button>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="stat-list">
                                        <li>
                                            <h2 class="no-margins">۷</h2>
                                            <small>تعداد ولایات که گزارشات داده اند</small>
                                            <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 48%;" class="		</div>progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="no-margins ">۲۵</h2>
                                            <small>تعداد ولایات که گزارشات نداده اند</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>

		</div>

    </div>

@endsection