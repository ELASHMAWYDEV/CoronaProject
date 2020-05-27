<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "متابعة المخالطين";
?>

<?php 
include('sidebar.php'); 
?>


<div class="mixs-container view-patients-container">
    <!-- <div class="search-box" id="searchMixs">
        <h4>البحث المتقدم</h4>
        <div>
            <div class="input-search">
                <input type="text" placeholder="رقم الحالة" name="search_transfered_id">
            </div>
            <div class="input-search">
                <input type="text" placeholder="رقم الهوية أو الإقامة" name="search_transfered_national_id">
            </div>
            <div class="input-search">
                <input type="text" placeholder="رقم الحصن" name="search_transfered_fort_num">
            </div>
        </div>
    </div> -->
    <div class="hospital-table user-box new-patients-table mixs-table">
        <h3>قائمة المخالطين</h3>
        <div class="table">
            <table>
                <tr>
                    <th>رقم المخالط</th>
                    <th>اسم الحالة المؤكدة</th>
                    <th>رقم الحالة المؤكدة</th>
                    <th>رقم الحالة المؤكدة في حصن</th>
                    <th>عدد المخالطين</th>
                    <th>اسم المخالط بالعربي</th>
                    <th>اسم المخالط بالانجليزي</th>
                    <th>الجنسية</th>
                    <th>العمر</th>
                    <th>رقم الجوال</th>
                    <th>الجنس</th>
                    <th>صلة القرابة</th>
                    <th>رقم الهوية أو الإقامة</th>
                    <th>الأعراض</th>
                    <th>ملاحظات</th>
                    <th>تاريخ أخذ العينة</th>
                    <th>2019-nCoV Screening test</th>
                    <th>2019-nCoV Confirmatory test</th>
                    <th>ملاحظات أخري</th>
                    <th>المنطقة</th>
                    <th>فريق المتابعة</th>
                    <th>أخر يوم تواجد مع الحالة</th>
                    <th>نتيجة المتابعة</th>
                    <th>ملاحظات المتابعة</th>
                    <th>Modes</th>
                    <th>Interest</th>
                    <th>عرض أيام المتابعة</th>
                    <?php if(!assistant()):?>
                    <th>الإجراء</th>
                    <?php endif;?>
                </tr>
                <?php getMixsTable(); ?>
            </table>
        </div>
    </div>

</div>





</div>
</div>






<?php include('../footer.php'); ?>