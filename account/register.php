<?php
//redirect if register token is not submitted
// if(!isset($_GET['register_token'])) {
//     array_push($errors,'يجب تسجيل البيانات من الرابط المرسل في البريد الالكتروني');
// }
function getRegisterToken() {
    if(isset($_GET['register_token'])) {
        $_SESSION['register_token'] = test($_GET['register_token']);
    }
    if(isset($_SESSION['register_token'])) {
        echo $_SESSION['register_token'];
    }
    else {
        echo "";
    }
}



?>
<?php include('../functions.php'); ?>


<?php
$title = "تسجيل حساب جديد";    
include('../head.php');
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="user-box register-box">
            <h3>تسجيل بيانات مستخدم جديد</h3>
            <div class="input-element">
                <!-- <label>اسم المستخدم</label> -->
                <input type="text" placeholder="اسم المستخدم" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-element">
                <input type="text" placeholder="رقم الكمبيوتر" name="computer_code" value="<?php echo $computerCode; ?>" required>
            </div>
            <div class="input-element">
                <!-- <label>الاسم الأول</label> -->
                <input type="text" placeholder="الاسم الأول" name="first_name" value="<?php echo $first_name; ?>" required>
            </div>
            <div class="input-element">
                <!-- <label>الاسم الأخير</label> -->
                <input type="text" placeholder="الاسم الأخير" name="last_name" value="<?php echo $last_name; ?>" required>
            </div>
            <div class="input-element">
                <!-- <label>كلمة المرور</label> -->
                <input type="password" placeholder="كلمة المرور" name="password_1" required>
            </div>
            <div class="input-element">
                <!-- <label>تأكيد كلمة المرور</label> -->
                <input type="password" placeholder="تأكيد كلمة المرور" name="password_2" required>
            </div>
            <div class="input-element">
                <input type="hidden" name="register_token" value="<?php getRegisterToken(); ?>">
                <button type="submit" name="register_btn">تسجيل البيانات</button>
            </div>

            <div class="box-text">
                <p>اذا كان لديك حساب بالفعل <a href="login.php">سجل الدخول</a></p>
            </div>
        </div>
    </form>
</body>
</html>