<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "الحالات غير المكتملة";
?>

<?php 
include('sidebar.php'); 
?>

<?php if(!assistant()) {
    header('location: /dashboard/index.php');
}
?>
<div class="view-patients-container">
    <div class="new-patients-table hospital-table user-box">
        <h3>الحالات غير المكتملة</h3>
        <div class="table">
            <table>
                <tr>
                    <th>رقم الحالة</th>
                    <th>رئيس الفريق المسؤول</th>
                    <th>تاريخ إضافة الحالة</th>
                    <th>رقم الحصن</th>
                    <th>الاسم بالعربي</th>
                    <th>الاسم بالانجليزي</th>
                    <th>رقم الإقامة او الهوية</th>
                    <th>الجنسية</th>
                    <th>الحي / المنطقة</th>
                    <th>عنوان السكن</th>
                    <th>عدد مخالطين السكن</th>
                    <th>المهنة/القسم</th>
                    <th>مقر العمل</th>
                    <th>رقم مدير العمل</th>
                    <th>عدد المخالطين المباشرين</th>
                    <th>تحركات المريض في الفترة الأخيرة</th>
                    <th>ملاحظات</th>
                    <th>ملاحظات المساعد</th>
                    <th>الإجراء</th>
                </tr>
                <?=getAssistantTable()?>
            </table>
        </div>
    </div>
</div>





</div>
</div>





<?php include('../footer.php'); ?>