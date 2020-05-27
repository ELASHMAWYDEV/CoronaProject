<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "اعدادات الحساب";
?>

<?php 
include('sidebar.php'); 
?>


<div class="user-settings-box user-box">
    <h3>تعديل بياناتك</h3>
    <h4>المركز : <?php getUserType($_SESSION['user_type']); ?></h4>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="input-elements">
            <div class="input-element">
                <label>البريد الالكتروني</label>
                <input type="text" placeholder="البريد الالكتروني" name="email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <div class="input-element">
                <label>اسم المستخدم</label>
                <input type="text" placeholder="اسم المستخدم" name="username" value="<?php echo $_SESSION['username']; ?>">
            </div>
            <div class="input-element">
                <label>كود الكمبيوتر</label>
                <input type="text" placeholder="كود الكمبيوتر" name="computer_code" value="<?php echo $_SESSION['computer_code']; ?>">
            </div>
            <div class="input-element">
                <label>الاسم الأول</label>
                <input type="text" placeholder="الاسم الأول" name="first_name" value="<?php echo $_SESSION['first_name']; ?>">
            </div>
            <div class="input-element">
                <label>الاسم الأخير</label>
                <input type="text" placeholder="الاسم الأخير" name="last_name" value="<?php echo $_SESSION['last_name']; ?>">
            </div>
            <div class="input-element">
                <label>كلمة المرور الجديدة</label>
                <input type="password" placeholder="كلمة المرور الجديدة" name="password_1">
            </div>
            <div class="input-element">
                <label>تأكيد كلمة المرور</label>
                <input type="password" placeholder="تأكيد كلمة المرور" name="password_2">
            </div>
            <div class="input-element">
                <button type="submit" name="edit_settings">تعديل البيانات</button>
            </div>    
        </div>
    </form>
</div>





</div>
</div>





<?php include('../footer.php'); ?>