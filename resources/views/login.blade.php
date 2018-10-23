{{--start--}}

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>سیستم مدیریت اطلاعات</title>

    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">

</head>
<body style=" background-color:#3d9970; " dir="rtl">

<div class="container  animated fadeInDown">

    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <h3 style="text-align:center; font-size:40px; color:white; margin-top:50px;"></h3>
        <div class="jumbotron danger" style="background-color:white; margin-top:30px;">
            <center>
                <p>
                <table>
                    <td width="320" align="center">
                        <img src="dashboard/img/logo large.JPG" width="109" height="108" class="img-circle "/><br/>
                        <h3> به صفحه ورودی
                            <small> خوش امدید</small>
                        </h3>

                    </td>
                </table>
                <form role="form" action="/dash">
                    {{csrf_field()}}

                    <p>
                    <table>
                        <td width="400">
                            <div class="form-group">
                            <label for="txt_username">اسم عبور :</label>

                            <input type="text" name="txt_username" id="txt_username" class="form-control small" required=""/>
                            </div>
                            <br/>
                            <div class="form-group">
                            <label for="txt_password">رمز عبور : </label>

                            <input type="password" name="txt_password" id="txt_password" class="form-control" required=""/>
                            </div>
                            <br/>
                            <span class="tick"> </span>
                            <input type="submit" name="submit" id="LogIn" class="btn btn-defualt"
                                   style=" margin-right:71px; font-size:15px; background-color:#3d9970; color:white;"
                                   value="  ورد به سیستم  "/>
                        </td>
                    </table>
                    </p>

                </form>


                    <div style="position:fixed;top:540px;background-color:white; width:350px; height:70px;  border-radius:8px; margin-right:-60px; margin-top:10px; color:black;">
                        <br>
                        <a style="color:black;" href="http://www.paypol.af"><img
                                    src="dashboard/img/Logo.png" style="height:40px; width:100px;"/> </a>
                    </div>



                <!-- Mainly scripts -->
                <script src="/dashboard/js/jquery-2.1.1.js"></script>
                <script src="/dashboard/js/bootstrap.min.js"></script>

</body>
</html>





