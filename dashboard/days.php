<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "أيام المتابعة";
?>

<?php 
include('sidebar.php'); 
?>
<?php 

if(!isset($_GET['mix_days_id'])) {
    header('location: /dashboard');
}


?>
<input type="hidden" id="mix_days_id" value="<?=$_GET['mix_days_id']?>">
<div class="mixs-container view-patients-container">
    <div class="hospital-table user-box new-patients-table mixs-table">
        <h3>أيام المتابعة</h3>
        <div class="table" id="table">
        <?=showDays(test($_GET['mix_days_id']))?>
        </div>
    </div>
</div>