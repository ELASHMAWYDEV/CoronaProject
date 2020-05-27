<?php include('../functions.php'); ?>
<?php loggeinRedirect(); ?>


<?php 
$title = "تسجيل الدخول";    
include('../head.php');
?>


    <div class="user-box">
        <h3>تسجيل الدخول المستخدم</h3>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="input-elements">
            <div class="input-element">        
            <label><i class="fas fa-user"></i></label>
            <input type="text" placeholder="اسم المستخدم أو البريد الالكتروني" name="user" value="<?php echo $user; ?>">
            </div>
            <div class="input-element">        
            <label><i class="fas fa-lock"></i></label>
            <input type="password" placeholder="كلمة المرور" name="password">
            </div>
            <div class="input-element">
                <button type="submit" name="login_btn">تسجيل الدخول</button>
            </div>
            <div class="box-text">
                <a href="reset.php">استعادة كلمة المرور</a>
            </div>
        </div>
        </form>
    </div>


    
</body>
</html>