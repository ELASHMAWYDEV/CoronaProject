<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "متابعة الحالات الجديدة";
?>

<?php 
include('sidebar.php'); 
?>

<div class="view-patients-container">
    <div class="search-box" id="searchNewPatients">
        <h4>البحث المتقدم</h4>
        <div>
            <div class="input-search">
                <input type="text" placeholder="رقم الحالة" name="search_patient_id">
            </div>
            <div class="input-search">
                <input type="text" placeholder="رقم الهوية أو الإقامة" name="search_patient_national_id">
            </div>
            <div class="input-search">
                <input type="text" placeholder="رقم الحصن" name="search_patient_fort_num">
            </div>
        </div>
    </div>
    <div class="new-patients-table hospital-table user-box">
        <h3>الحالات الجديدة</h3>
        <div class="table">
            <table>
                <thead>
                <tr>
                    <th>رقم الحالة</th>
                    <th>تاريخ إضافة الحالة</th>
                    <th>مسؤول متابعة المخالطين</th>
                    <th>تاريخ التشخيص</th>
                    <th>رقم الحصن</th>
                    <th>رقم الإقامة او الهوية</th>
                    <th>الاسم بالعربي</th>
                    <th>الاسم بالانجليزي</th>
                    <th>العمر</th>
                    <th>الجنسية</th>
                    <th>الجنس</th>
                    <th>رقم التواصل</th>
                    <th>F125 المخالطين</th>
                    <th>F126 البلاغ</th>
                    <th>التواصل مع المخالطين</th>
                    <th>عدد المخالطين المباشرين</th>
                    <th>P/S/T</th>
                    <th>الحي / المنطقة</th>
                    <th>موقع السكن كتابةً</th>
                    <th>موقع السكن ، رابط جوجل</th>
                    <th>عدد مخالطين السكن</th>
                    <th>المهنة/القسم</th>
                    <th>مقر العمل</th>
                    <th>رقم مدير العمل</th>
                    <th>تاريخ أخر تواجد في العمل</th>
                    <th>التواجد في أي منشأة صحية أو حكومية أخري</th>
                    <th>هل كان لديه أعراض وهو يعمل</th>
                    <th>تاريخ السفر ووجهة القدوم</th>
                    <th>هل مخالط لحالة مخالطة</th>
                    <th>من هي الحالة المخالطة والمدينة</th>
                    <th>علاقته بالحالة المؤكدة</th>
                    <th>اسم المستشفي</th>
                    <th>وضع الحالة في الحصن</th>
                    <th>توصيات الصباح</th>
                    <th>الإجراء المتخذ صباحا</th>
                    <th>توصيات المساء</th>
                    <th>الإجراء المتخذ مساء</th>
                    <th>رقم حصن أخر</th>
                    <th>Come Out</th>
                    <th>No. Symptom</th>
                    <th>Fever</th>
                    <th>Shortness of breathe</th>
                    <th>Sore throat</th>
                    <th>Cough</th>
                    <th>Headache</th>
                    <th>Muscle</th>
                    <th>Diarrhea</th>
                    <th>Vomiting/nausea</th>
                    <th>Runny nose</th>
                    <th>فصيلة الدم</th>
                    <th>أمراض مزمنة</th>
                    <th>مدخن</th>
                    <th>تسلسل رقم المخالطة</th>
                    <th>ملاحظات</th>
                    <th>ملاحظات المساعد</th>
                    <th>الإجراء</th>
                </tr>
                </thead>
                <tbody id="newPatients">
                    <?php getNewPatientsTable(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>








</div>
</div>





<?php include('../footer.php'); ?>