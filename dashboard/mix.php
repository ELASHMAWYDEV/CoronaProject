
<?php $mixExist = false; ?>
<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php
    function getMixId() {
        if(isset($_GET['mix_id'])) {
            echo $_GET['mix_id'];
        }
        else if(!empty($_POST['idM'])) {
            echo $_POST['idM'];      
        }
        else {
            echo "";
        }
    }
?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "اضافة مخالط جديد";
?>

<?php 
include('sidebar.php'); 
?>

<?php
if(control() && assistant() && infection()) {
    header('location: /dashboard');
}
?>


<div class="add-patient-container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="input-items">
        <div class="input-item">
            <label>رقم الحالة المؤكدة</label>
            <select name="patientIdM">
                <?=getPatientSelect($patientIdM)?>
            </select>
        </div>
        <div class="input-item">
            <label>الاسم بالعربي:</label>
            <input type="text" name="nameArM" placeholder="الاسم بالعربي" value="<?=$nameArM?>">
        </div>
        <div class="input-item">
            <label>الاسم بالإنجليزي:</label>
            <input type="text" name="nameEnM" placeholder="الاسم بالإنجليزي" value="<?=$nameEnM?>">
        </div>
        <div class="input-item">
            <label>الجنسية:</label>
            <select name="nationalityM">
                <?php getNationalitiesSelect($nationalityM); ?>
            </select>
        </div>
        <div class="input-item">
            <label>العمر:</label>
            <input type="number" name="ageM" placeholder="العمر" value="<?=$ageM?>">
        </div>
        <div class="input-item">
            <label>رقم الجوال:</label>
            <input type="text" name="contactNumM" placeholder="رقم الجوال" value="<?=$contactNumM?>">
        </div>
        <div class="input-item">
            <label>الجنس:</label>
            <?php
                if(empty($sexM)) {
                    echo "
                    <input class='radio' type='radio' value='ذكر' name='sexM'>ذكر
                    <input class='radio' type='radio' value='أنثي' name='sexM'>أنثي
                    <input type='hidden' value='' name='sexM'>
                    ";
                }
                else {
                    if($sexM == "ذكر") {
                        echo "
                        <input class='radio' type='radio' value='ذكر' name='sexM' checked>ذكر
                        <input class='radio' type='radio' value='أنثي' name='sexM'>أنثي
                        ";
                    }
                    else if($sexM == "أنثي") {
                        echo "
                        <input class='radio' type='radio' value='ذكر' name='sexM'>ذكر
                        <input class='radio' type='radio' value='أنثي' name='sexM' checked>أنثي
                        ";
                    }
                    
                }
            ?>
        </div>
        <div class="input-item">
            <label>صلة القرابة:</label>
            <input type="text" name="relM" placeholder="صلة القرابة" value="<?=$relM?>">
        </div>
        <div class="input-item">
            <label>رقم الهوية أو الإقامة:</label>
            <input type="text" name="nationalIdM" placeholder="رقم الهوية أو الإقامة" value="<?=$nationalIdM?>">
        </div>
        <div class="input-item">
            <label>الأعراض:</label>
            <input type="text" name="symptomM" placeholder="الأعراض" value="<?=$symptomM?>">
        </div>
        <div class="input-item">
            <label>ملاحظات:</label>
            <input type="text" name="notesM" placeholder="ملاحظات" value="<?=$notesM?>">
        </div>
        <div class="input-item">
            <label>تاريخ أخذ العينة:</label>
            <input type="text" name="sampleDateM" placeholder="تاريخ أخذ العينة" value="<?=$sampleDateM?>" id="datepicker">
        </div>
        <div class="input-item">
            <label>2019-nCoV Screening test:</label>
            <input type="text" name="screeningM" placeholder="2019-nCoV Screening test" value="<?=$screeningM?>">
        </div>
        <div class="input-item">
            <label>2019-nCoV Confirmatory test:</label>
            <input type="text" name="confirmatoryM" placeholder="2019-nCoV Confirmatory test" value="<?=$confirmatoryM?>">
        </div>
        <div class="input-item">
            <label>ملاحظات أخري:</label>
            <input type="text" name="otherNotesM" placeholder="ملاحظات أخري" value="<?=$otherNotesM?>">
        </div>
        <div class="input-item">
            <label>المنطقة:</label>
            <input type="text" name="regionM" placeholder="المنطقة" value="<?=$regionM?>">
        </div>
        <div class="input-item">
            <label>فريق المتابعة:</label>
            <input type="text" name="followUpTeamM" placeholder="فريق المتابعة" value="<?=$followUpTeamM?>">
        </div>
        <div class="input-item">
            <label>أخر يوم تواجد مع الحالة:</label>
            <input type="text" name="lastExistM" placeholder="أخر يوم تواجد مع الحالة" value="<?=$lastExistM?>">
        </div>
        <div class="input-item">
            <label>نتيجة المتابعة:</label>
            <input type="text" name="followUpResM" placeholder="نتيجة المتابعة" value="<?=$followUpResM?>">
        </div>
        <div class="input-item">
            <label>ملاحظات المتابعة:</label>
            <input type="text" name="followUpNotesM" placeholder="ملاحظات المتابعة" value="<?=$followUpNotesM?>">
        </div>
        <div class="input-item">
            <label>Mode</label>
            <input type="text" name="modesM" placeholder="Mode" value="<?=$modesM?>">
        </div>
        <div class="input-item">
            <label>Interest</label>
            <input type="text" name="interestM" placeholder="Interest" value="<?=$interestM?>">
        </div>
        <?php if(!empty($_GET['mix_id']) && $mixExist || !empty($_POST['idM'])): ?>
            <input type="hidden" value="<?=getMixId()?>" name="idM">
            <div class="input-item input-item-btn">
                <button type="submit" name="mix_edit">تعديل</button>
            </div>
            <div class="input-item input-item-btn">
                <a href="?delete_mix=<?=getMixId()?>">حذف</a>
            </div>
            
        <?php else: ?>
            <div class="input-item input-item-btn">
                <button type="submit" name="mix_add">إضافة</button>
            </div>
            
        <?php endif; ?>
    </div>

    </form>
</div>









</div>
</div>





<?php include('../footer.php'); ?>