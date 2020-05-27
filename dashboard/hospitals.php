<?php include('../functions.php'); ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "تعديل المستشفيات";
?>

<?php 
include('sidebar.php'); 
?>

<?php if(!admin()) {
    header('location: /dashboard');
}
?>

<div class="hospital-container">
    <div class="hospital-add user-box">
        <h3>إضافة مستشفي جديد</h3>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="input-elements">
                <div class="input-element">
                    <input type="text" name="name" placeholder="اسم المستشفي">
                </div>
                <div class="input-element">
                    <select name="class">
                        <option value="Private Hospital">Private Hospital</option>
                        <option value="MOH Hospital">MOH Hospital</option>
                        <option value="Other Governmental Hospital">Other Governmental Hospital</option>
                    </select>
                </div>
                <div class="input-element">
                    <button type="submit" name="add_hospital">أضف</button>
                </div>
            </div>
        </form>
    </div>
    <div class="hospital-table user-box">
        <h3>المستشفيات المسجلة</h3>
        <div class="table">
            <table>
                <tr>
                    <th>اسم المستشفي</th>
                    <th>تصنيف المستشفي</th>
                    <th>الإجراء</th>
                </tr>
                <?php getHospitalsTable(); ?>
            </table>
        </div>
    </div>
</div>




</div>
</div>


<?php include('../footer.php'); ?>