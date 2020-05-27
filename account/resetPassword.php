<?php include('../functions.php'); ?>
<?php loggeinRedirect(); ?>

<?php
if(isset($_GET['reset_token'])) {
    $_SESSION['reset_token'] = $_GET['reset_token'];
    
}
else if(!isset($_SESSION['reset_token'])) {
    header('location: /account/login.php');
}

?>
<?php 
$title = "انشاء كلمة مرور جديدة";    
include('../head.php');
?>


    <div class="user-box">
        <h3>انشاء كلمة مرور جديدة</h3>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="input-elements">
            <div class="input-element">        
            <!-- <label><i class="fas fa-user"></i></label> -->
            <input type="password" placeholder="كلمة المرور الجديدة" name="password_1">
            </div>
            <div class="input-element">        
            <!-- <label><i class="fas fa-user"></i></label> -->
            <input type="password" placeholder="تأكيد كلمة المرور" name="password_2">
            </div>
            <br>
            <div class="input-element">
                <button type="submit" name="reseted_btn">تأكيد كلمة المرور الجديدة</button>
            </div>
            <div class="box-text">
                <a href="login.php">تسجيل الدخول</a>
            </div>
        </div>
        </form>
    </div>


    
</body>
</html>