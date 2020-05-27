<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "تعديل الأحياء/المناطق";
?>

<?php 
include('sidebar.php'); 
?>


<?php if(!admin()) {
    header('location: /dashboard');
}
?>


<div class="district-container">
    <div class="hospital-add user-box">
        <h3>إضافة حي جديد</h3>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="input-elements">
                <div class="input-element">
                    <input type="text" name="name" placeholder="اسم الحي">
                </div>
                <div class="input-element">
                    <button type="submit" name="add_district">أضف</button>
                </div>
            </div>
        </form>
    </div>
    <div class="hospital-table user-box">
        <h3>الأحياء المسجلة</h3>
        <div class="table">
            <table>
                <tr>
                    <th>اسم الحي</th>
                    <th>الإجراء</th>
                </tr>
                <?php getDistrictTable(); ?>
            </table>
        </div>
    </div>
</div>




</div>
</div>





<?php include('../footer.php'); ?>