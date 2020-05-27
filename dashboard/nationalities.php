<?php include('../functions.php'); ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "تعديل الجنسيات";
?>

<?php 
include('sidebar.php'); 
?>


<?php if(!admin()) {
    header('location: /dashboard');
}
?>

<div class="hospital-container">
    <div class="nation-add user-box">
        <h3>إضافة جنسية جديدة</h3>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="input-elements">
                <div class="input-element">
                    <input type="text" name="name" placeholder="الجنسية">
                </div>
                <div class="input-element">
                    <button type="submit" name="add_nationality">أضف</button>
                </div>
            </div>
        </form>
    </div>
    <div class="hospital-table nationality-table user-box">
        <h3>الجنسيات المسجلة</h3>
        <div class="table">
            <table>
                <tr>
                    <th>الجنسية</th>
                    <th>الإجراء</th>
                </tr>
                <?php getNationalityTable(); ?>
            </table>
        </div>
    </div>
</div>





</div>
</div>


<?php include('../footer.php'); ?>