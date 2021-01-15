<!doctype html>

<?php
include "sys_config.class.php";
require_once "DateUtils.inc.php";
require_once "SharedClass.class.php";
require_once "UI.inc.php";

HTMLBegin();

$message = "";

if(isset($_REQUEST["UserEmail"]))
{
    $email = $_REQUEST["UserEmail"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "فرمت ایمیل نادرست است";
    }

    else{
        echo "<script>document.location='EmailAuthentication.php';</script>";
        die();
    }
}

?>

<body >
<form method=post>

    <div class="container-fluid">
        <? if($message!="") { ?>
        <div class="row">
            <div class="col-1" ></div>
            <div class="col-10" >
                <div class="alert alert-danger well" role="alert"><?php echo $message; ?></div>
            </div>
            <div class="col-1" ></div>
        </div>
    </div>
    <? } ?>
    <div class="row">
        <div class="col-3" ></div>
        <div class="col-6" >
            <br>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        چارچوب توسعه نرم افزار سدف
                    </div>
                    <div class="caption", style="float: left">
                        اعتبارسنجی ایمیل < ثبت نام
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table">
                        <tr>
                            <td>رمز عبور یکبارمصرف</td>
                            <td><input type=text name=UserOTP id=UserOTP class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan=2 align=center>
                                <button type="submit" class="btn btn-primary active">ثبت نام</button>
                            </td>

                            <td>
                                <a href="" onclick=<?php
                                //TODO
                                ?>>ارسال مجدد به ایمیل</a>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-3" ></div>
        </div>

</form>
</div>
</body>
