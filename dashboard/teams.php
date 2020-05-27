<?php include('../functions.php'); ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "الفرق المسجلة";
?>

<?php 
include('sidebar.php'); 
?>


<div class="teams-container">
    <div class="hospital-table user-box">
        <h3>الفرق المسجلة</h3>
        <div class="table">
            <table>
                <tr>
                    <th>رقم الفريق</th>
                    <th>اسم الفريق</th>
                    <th>عدد الأعضاء</th>
                    <th>عدد الحالات المستلمة</th>
                    <th>الإجراء</th>
                </tr>
                <?php getTeamTable(); ?>
            </table>
        </div>
    </div>
</div>






</div>
</div>


<?php include('../footer.php'); ?>