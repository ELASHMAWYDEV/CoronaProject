<?php include('../functions.php'); ?>

<?php loggedin(); ?>

<?php
if(isset($_GET['team_id'])) {
    getTeamInfo(test($_GET['team_id'])); 

}
else {
    header('location: teams.php');
}
?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "فريق " . $teamRow['first_name'] . " " . $teamRow['last_name'];
?>

<?php 
include('sidebar.php'); 
?>




<div class="user-box hospital-add">
    <h3>بيانات الفريق</h3>
    <div class="items-view">
        <div class="item-view">
            <h5>اسم قائد الفريق:</h5><h4><?php $teamRow['first_name'] . " " . $teamRow['last_name'] ?></h4>
        </div>
        <div class="item-view">
            <h5>عدد الأعضاء:</h5><h4><?php echo $numOfMembers; ?></h4>
        </div>
        <div class="item-view">
            <h5>الأعضاء:</h5>
            <ul>
            <?php getTeamMembers(test($_GET['team_id'])); ?>
            </ul>
        </div>
        
        <div class="item-view"></div>
    </div>
</div>







</div>
</div>


<?php include('../footer.php'); ?>