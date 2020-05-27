<?php include('../functions.php'); ?>
<?php loggeinRedirect(); ?>


<?php 
$title = "استعادة كلمة المرور";    
include('../head.php');
?>


    <div class="user-box">
        <h3>سيتم ارسال رابط بالتفاصيل</h3>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="input-elements">
            <div class="input-element">        
            <label><i class="fas fa-user"></i></label>
            <input type="email" placeholder="البريد الالكتروني" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-element">
                <button type="submit" name="reset_btn">استعادة كلمة المرور</button>
            </div>
            <div class="box-text">
                <a href="login.php">تسجيل الدخول</a>
            </div>
        </div>
        </form>
    </div>


    
</body>
</html>