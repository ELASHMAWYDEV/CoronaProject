<?php include '../functions.php'; ?>

<?php 

loggedin();
?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "اضافة مستخدم جديد";
?>

<?php if(!admin()) {
    header('location: /dashboard');
}
?>









<?php 
include('sidebar.php'); 
?>
<div class="users-container">
    <div class="user-box user-add">
        <h3>تسجيل حساب جديد</h3>
        <div class="input-elements">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="input-element">
                    <!-- <label>البريد الالكتروني</label> -->
                    <input type="text" placeholder="البريد الالكتروني" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="input-element">
                    <label>المركز</label>
                    <select name="user_type">
                        <option value="1">مشرف</option>
                        <option value="2">مساعد</option>
                        <option value="3">القيادة والتحكم</option>
                        <option value="4">قسم الأمراض المعدية</option>
                        <option value="5">رئيس فريق</option>
                        <option value="6">عضو فريق</option>       
                    </select>
                </div>
                <div class="input-element">
                    <button type="submit" name="register_new">تسجيل مستخدم جديد</button>
                </div>
            </form>
        </div>
    </div>

    <div class="hospital-table user-box">
        <h3>المستخدمين المسجلين</h3>
        <div class="table">
            <table>
                <tr>
                    <th>الرقم</th>
                    <th>اسم المستخدم</th>
                    <th>المركز</th>
                    <th>الاسم الأول</th>
                    <th>رقم الكمبيوتر</th>
                    <th>البريد الالكتروني</th>
                    <th>أخر مرة تسجيل دخول</th>
                    <th>الحالة</th>
                    <th>الإجراء</th>
                </tr>
                <?php getUsersTable(); ?>
            </table>
        </div>
    </div>
</div>



</div>
</div>





<?php include('../footer.php'); ?>