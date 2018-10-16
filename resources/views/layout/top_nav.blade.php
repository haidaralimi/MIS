<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="جستجو کردن ..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-calendar text-navy">&nbsp;</i><strong>امروز : چهارشنبه ۱۳۹۷/۷/۳</strong>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-language text-navy">&nbsp;</i><strong>زبان <img src="img/un.png" width="20px"/>&nbsp;&nbsp;|</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts" style="width: 150px;">
                        <a href="#" class="hvr-grow" style="width: 100%"><li><img src="{{asset('dashboard/img/afg.png')}}" width="20px;"/><strong>&nbsp;&nbsp;دری</strong></li></a>
                        <a href="#" class="hvr-grow" style="width:100%"><li><img src="dashboard/img/un.png" width="20px"/><strong>&nbsp;&nbsp;English</strong></li></a>
                    </ul>
                </li>

                {{-- current exchange --}}

                <li>
                    <a href="/login">
                        <i class="fa fa-sign-out text-warning"></i>خروج
                    </a>
                </li>
                {{-- current exchange --}}
            </ul>

        </nav>
    </div>