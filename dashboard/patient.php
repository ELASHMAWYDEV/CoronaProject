
<?php $patientExist = false; ?>
<?php include '../functions.php'; ?>

<?php loggedin(); ?>

<?php
    function getPatientId() {
        if(isset($_GET['patient_id'])) {
            echo $_GET['patient_id'];
        }
        else if(!empty($_POST['id'])) {
            echo $_POST['id'];      
        }
        else {
            echo "";
        }
    }
?>

<?php 
$title = "لوحة التحكم";    
include('../head.php');
$headerTitle = "اضافة حالة جديدة";
?>

<?php 
include('sidebar.php'); 
?>


<div class="add-patient-container">

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="input-items">
            <div <?php if(assistant()){echo "style='display:none'";}?>> <!--Assistant-->
            <div class="input-item">
                <label>الإسم بالعربي:</label>
                <input type="text" value="<?php echo $nameAr; ?>" placeholder="الإسم بالعربي" name="nameAr">
        
            </div>
            <div class="input-item">
                <label>الإسم بالإنجليزي:</label>
                <input type="text" value="<?php echo $nameEn; ?>" placeholder="الإسم بالإنجليزي" name="nameEn">
        
            </div>
            <div class="input-item">
                <label>رقم التقصي في حصن:</label>
                <input type="number" value="<?php echo $fortNum; ?>" placeholder="رقم التقصي في حصن" name="fortNum">
        
            </div>
            <div class="input-item">
                <label>مسؤول متابعة المخالطين:</label>
                <input type="text" value="<?php echo $followUpOfficer; ?>" placeholder="مسؤول متابعة المخالطين" name="followUpOfficer">
        
            </div>
            <div class="input-item">
                <label>تاريخ التشخيص:</label>
                <input type="text" value="<?php echo $diagnoseDate; ?>" placeholder="تاريخ التشخيص" name = "diagnoseDate" id="datepicker" readonly>
        
            </div>
            <div class="input-item">
                <label>رقم الهوية أو الإقامة:</label>
                <input type="number" value="<?php echo $nationalId; ?>" placeholder="رقم الهوية أو الإقامة" name="nationalId">
        
            </div>

            <div class="input-item">
                <label>العمر:</label>
                <input type="number" value="<?php echo $age; ?>" placeholder="العمر" name = "age">
        
            </div>
            <div class="input-item">
                <label>الجنسية:</label>
                <select name="nationality">
                    <?php getNationalitiesSelect($nationality); ?>
                </select>
        
            </div>
            <div class="input-item">
                <label>الجنس:</label>
                <?php
                    if(empty($sex)) {
                        echo "
                        <input class='radio' type='radio' value='ذكر' name='sex'>ذكر
                        <input class='radio' type='radio' value='أنثي' name='sex'>أنثي
                        <input type='hidden' value='' name='sex'>
                        ";
                    }
                    else {
                        if($sex == "ذكر") {
                            echo "
                            <input class='radio' type='radio' value='ذكر' name='sex' checked>ذكر
                            <input class='radio' type='radio' value='أنثي' name='sex'>أنثي
                            ";
                        }
                        else if($sex == "أنثي") {
                            echo "
                            <input class='radio' type='radio' value='ذكر' name='sex'>ذكر
                            <input class='radio' type='radio' value='أنثي' name='sex' checked>أنثي
                            ";
                        }
                        
                    }
                ?>
        
            </div>
            <div class="input-item">
                <label>رقم التواصل:</label>
                <input type="text" value="<?php echo $contactNum; ?>" placeholder="رقم التواصل" name = "contactNum">
        
            </div>
            <div class="input-item">
                <label>المخالطين F125:</label>
                <?php radioCheck($f125,"f125"); ?>
        
            </div>
            <div class="input-item">
                <label>البلاغ F126:</label>
                <?php radioCheck($f126,"f126"); ?>
        
            </div>
            <div class="input-item">
                <label>التواصل مع المخالطين:</label>
                <?php radioCheck($contactsCon,"contactsCon"); ?>
        
            </div>
            <div class="input-item">
                <label>عدد المخالطين المباشرين:</label>
                <input type="number" value="<?php echo $contactsNum; ?>" placeholder="عدد المخالطين المباشرين" name = "contactsNum">
        
            </div>
            <div class="input-item">
                <label>P/S/T:</label>
                <select name="pst">
                    <option value="" <?php select($pst,''); ?>>اختر</option>
                    <option value="P" <?php select($pst,'P'); ?>>P</option>
                    <option value="S" <?php select($pst,'S'); ?>>S</option>
                    <option value="T" <?php select($pst,'T'); ?>>T</option>
                </select>
        
            </div>
            <div class="input-item">
                <label>الحي / المنطقة:</label>
                <select name="region">
                    <?php getDistrictSelect($region); ?>
                </select>
            </div>
            <div class="input-item">
                <label>موقع السكن كتابةً:</label>
                <input type="text" value="<?php echo $addressWritten; ?>" placeholder="موقع السكن كتابةً" name = "addressWritten">
        
            </div>
            <div class="input-item">
                <label>موقع السكن، رابط جوجل:</label>
                <input type="text" value="<?php echo $addressLink; ?>" placeholder="موقع السكن، رابط جوجل" name = "addressLink">
        
            </div>
            <div class="input-item">
                <label>مخالطين السكن:</label>
                <?php radioCheck($contactsHome,"contactsHome"); ?>
        
            </div>
            <div class="input-item">
                <label>المهنة/القسم:</label>
                <input type="text" value="<?php echo $profession; ?>" placeholder="المهنة/القسم" name = "profession">
        
            </div>
            <div class="input-item">
                <label>مقر العمل:</label>
                <input type="text" value="<?php echo $jobPlace; ?>" placeholder="مقر العمل" name = "jobPlace">
        
            </div>
            <div class="input-item">
                <label>رقم مدير العمل:</label>
                <input type="text" value="<?php echo $jobManager; ?>" placeholder="رقم مدير العمل" name = "jobManager">
        
            </div>
            <div class="input-item">
                <label>تاريخ أخر تواجد في العمل:</label>
                <input type="text" value="<?php echo $jobDate; ?>" placeholder="تاريخ أخر تواجد في العمل" name = "jobDate" id="datepicker" readonly>
        
            </div>
            <div class="input-item">
                <label>التواجد في أي منشأة حكومية أو صحية:</label>
                <input type="text" value="<?php echo $otherPlaces; ?>" placeholder="التواجد في أي منشأة حكومية أو صحية" name = "otherPlaces">
        
            </div>
            <div class="input-item">
                <label>هل كان لديه أعراض وهو يعمل:</label>
                <?php radioCheck($workSyndrome,"workSyndrome"); ?>
        
            </div>
            <div class="input-item">
                <label>تاريخ السفر و وجهة القدوم:</label>
                <input type="text" value="<?php echo $travelDate; ?>" placeholder="تاريخ السفر و وجهة القدوم" name = "travelDate" id="datepicker" readonly>
        
            </div>
            <div class="input-item">
                <label>هل مخالط لحالة مخالطة:</label>
                <?php radioCheck($contactIs,"contactIs"); ?>
            </div>
            
            <div class="input-item">
                <label>من هو المخالط ومدينته:</label>
                <input type="text" value="<?php echo $contactNameCity; ?>" placeholder="هل مخالط لحالة مخالطة من هو المخالط ومدينته" name = "contactNameCity">
        
            </div>

            <div class="input-item">
                <label>علاقته بالحالة المؤكدة:</label>
                <input type="text" value="<?php echo $confirmRel; ?>" placeholder="علاقته بالحالة المؤكدة" name = "confirmRel">
        
            </div>
            <div class="input-item">
                <label>اسم المستشفي/عزل منزلي:</label>
                <select name="hospitalName">
                <?php getHospitalsSelect($hospitalName); ?>
                </select>
        
            </div>
            <div class="input-item">
                <label>وضع الحالة في الحصن:</label>
                <input type="text" value="<?php echo $fortStatus; ?>" placeholder="وضع الحالة في الحصن" name = "fortStatus">
        
            </div>
            <div class="input-item">
                <label>توصيات الصباح:</label>
                <input type="text" value="<?php echo $morningRec; ?>" placeholder="توصيات الصباح" name = "morningRec">
        
            </div>
            <div class="input-item">
                <label>الإجراء المتخذ في الصباح:</label>
                <input type="text" value="<?php echo $takenProMo; ?>" placeholder="الإجراء المتخذ في الصباح" name = "takenProMo">
        
            </div>
            <div class="input-item">
                <label>توصيات المساء:</label>
                <input type="text" value="<?php echo $nightRec; ?>" placeholder="توصيات المساء" name = "nightRec">
        
            </div>
            <div class="input-item">
                <label>الإجراء المتخذ في المساء:</label>
                <input type="text" value="<?php echo $takenProNi; ?>" placeholder="الإجراء المتخذ في المساء" name = "takenProNi">
        
            </div>
            <div class="input-item">
                <label>رقم حصن أخر:</label>
                <input type="text" value="<?php echo $fortNumOther; ?>" placeholder="رقم حصن أخر" name = "fortNumOther">
        
            </div>
            <div class="input-item">
                <label>Come Out:</label>
                <select name="comeOut">
                    <option value="" <?php select($comeOut,""); ?>>اختر</option>
                    <option value="لا يزال مريض" <?php select($comeOut,"لا يزال مريض"); ?>>لا يزال مريض</option>
                    <option value="تعافي" <?php select($comeOut,"تعافي"); ?>>تعافي</option>
                    <option value="وفاة" <?php select($comeOut,"وفاة"); ?>>وفاة</option>
                </select>
        
            </div>
            <div class="input-item">
                <label>No. Symptom:</label>
                <?php radioCheck($symptom,"symptom"); ?>
        
            </div>
            <div class="input-item">
                <label>Fever:</label>
                <?php radioCheck($fever,"fever"); ?>
        
            </div>
            <div class="input-item">
                <label>Shortness of breathe:</label>
                <?php radioCheck($shortBreathe,"shortBreathe"); ?>
        
            </div>
            <div class="input-item">
                <label>Sore throat:</label>
                <?php radioCheck($sore,"sore"); ?>
        
            </div>
            <div class="input-item">
                <label>Cough:</label>
                <?php radioCheck($cough,"cough"); ?>
            </div>
            <div class="input-item">
                <label>Headache:</label>
                <?php radioCheck($headache,"headache"); ?>
        
            </div>
            <div class="input-item">
                <label>Muscle/Joint pain:</label>
                <?php radioCheck($muscle,"muscle"); ?>
        
            </div>
            <div class="input-item">
                <label>Diarrhea:</label>
                <?php radioCheck($diarrhea,"diarrhea"); ?>
        
            </div>
            <div class="input-item">
                <label>Vomiting/nausea:</label>
                <?php radioCheck($vomiting,"vomiting"); ?>
        
            </div>
            <div class="input-item">
                <label>Runny nose:</label>
                <?php radioCheck($runnyNose,"runnyNose"); ?>
        
            </div>
            <div class="input-item">
                <label>فصيلة الدم:</label>
                <select name="blood">
                    <option value="" <?php select($blood,""); ?>>اختر فصيلة الدم</option>
                    <option value="+A" <?php select($blood,"+A"); ?>>+A</option>
                    <option value="-A" <?php select($blood,"-A"); ?>>-A</option>
                    <option value="+B" <?php select($blood,"+B"); ?>>+B</option>
                    <option value="-B" <?php select($blood,"-B"); ?>>-B</option>
                    <option value="+AB" <?php select($blood,"+AB"); ?>>+AB</option>
                    <option value="-AB" <?php select($blood,"-AB"); ?>>-AB</option>
                    <option value="+O" <?php select($blood,"+O"); ?>>+O</option>
                    <option value="-O" <?php select($blood,"-O"); ?>>-O</option>
                </select>
        
            </div>
            <div class="input-item">
                <label>أمراض مزمنة:</label>
                <select name="chronic">
                    <option value="" <?php select($chronic,""); ?>>اختر المرض</option>
                    <option value="سكر" <?php select($chronic,"سكر"); ?>>سكر</option>
                    <option value="ضغط" <?php select($chronic,"ضغط"); ?>>ضغط</option>
                    <option value="سكر وضغط" <?php select($chronic,"سكر وضغط"); ?>>سكر وضغط</option>
                    <option value="ربو" <?php select($chronic,"ربو"); ?>>ربو</option>
                </select>
        
            </div>
            <div class="input-item">
                <label>مدخن:</label>
                <?php if(empty($smoker)) {
                    echo "
                    <input type='radio' value='نعم' class='radio' name='smoker'>نعم
                    <input type='radio' value='لا' class='radio' name='smoker'>لا
                    <input type='radio' value='لا' class='radio' name='smoker'>كان يدخن
                    <input type='radio' value='' class='radio' name='smoker' checked>عدم تحديد
                    ";
                    }
                    else {
                        if($smoker == "نعم") {
                            echo "
                            <input type='radio' value='نعم' class='radio' name='smoker' checked>نعم
                            <input type='radio' value='لا' class='radio' name='smoker'>لا
                            <input type='radio' value='لا' class='radio' name='smoker'>كان يدخن
                            <input type='radio' value='' class='radio' name='smoker'>عدم تحديد
                            ";
                        }
                        else if($smoker == "كان يدخن") {
                            echo "
                            <input type='radio' value='نعم' class='radio' name='smoker'>نعم
                            <input type='radio' value='لا' class='radio' name='smoker'>لا
                            <input type='radio' value='لا' class='radio' name='smoker' checked>كان يدخن
                            <input type='radio' value='' class='radio' name='smoker'>عدم تحديد
                            ";
                        }
                        else if($smoker == "لا") {
                            echo "
                            <input type='radio' value='نعم' class='radio' name='smoker'>نعم
                            <input type='radio' value='لا' class='radio' name='smoker' checked>لا
                            <input type='radio' value='' class='radio' name='smoker'>عدم تحديد
                            ";
                        }
                        
                    }
                ?>
        
            </div>
            <div class="input-item">
                <label>تسلسل رقم المخالطة:</label>
                <input type="text" value="<?php echo $contactSeq; ?>" placeholder="تسلسل رقم المخالطة" name = "contactSeq">
        
            </div>
            <div class="input-item">
                <label>ملاحظات:</label>
                <input type="text" value="<?php echo $notes; ?>" placeholder="ملاحظات" name = "notes">
        
            </div>
            
            <div class="input-item" <?php if(teamHead() || teamMember() || assistant()){echo "style='display:none;'";}?>>
                <label>رئيس الفريق المحول اليه:</label>
                <select name="team">
                <?php getTeamsSelect($team); ?>
                </select>
        
            </div>
            
            <div class="input-item"<?php if(!teamHead()){echo "style='display:none;'";}?>>
                <label>عضو الفريق المحول اليه:</label>
                <select name="member">
                    <?php getMemberSelect($member); ?>
                </select>
        
            </div>
            </div> <!--Assistant-->
            <div <?php if(!assistant()){echo "style='display:none'";}?>> <!--Assistant-->
            <div class="input-item">
                <label>ملاحظات المساعد:</label>
                <input type="text" value="<?php echo $notesAssist; ?>" placeholder="ملاحظات المساعد" name = "notesAssist">
        
            </div>
            </div> <!--Assistant-->
            <?php if(!empty($_GET['patient_id']) && $patientExist || !empty($_POST['id'])): ?>
                <input type="hidden" value="<?php getPatientId(); ?>" name="id">
                <div class="input-item input-item-btn">
                    <button type="submit" name="patient_edit">تعديل</button>
                </div>
                <div class="input-item input-item-btn">
                    <a href="?delete_patient=<?php getPatientId(); ?>">حذف</a>
                </div>          
            <?php else: ?>
                <div class="input-item input-item-btn">
                    <button type="submit" name="patient_add">إضافة</button>
                </div>
                
            <?php endif; ?>
        </div>
    
    </form>



</div>









</div>
</div>





<?php include('../footer.php'); ?>