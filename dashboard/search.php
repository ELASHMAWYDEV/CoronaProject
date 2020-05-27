<?php
include('../functions.php');
//searching
if(isset($_GET['searchNewPatients'])) {
    searchNewPatients($_GET['patientId'],$_GET['nationalId'],$_GET['fortNum']);
}
if(isset($_GET['searchTransferedPatients'])) {
    searchTransferedPatients($_GET['patientId'],$_GET['nationalId'],$_GET['fortNum']);
}


function searchNewPatients($patientId = "",$nationalIdd = "",$fortNumm = "") {
    global $db,$errors,$id,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$createDate,$notesAssist,$team,$member,$diagnoseDate,$region;
    $output = "لا توجد نتائج";
    
        if($patientId != "" && $nationalIdd != "" && $fortNumm != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%' AND national_id LIKE '%$nationalIdd%' AND fort_num LIKE '%$fortNumm%'";
        }
        else if($patientId != "" && $nationalIdd != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%' AND national_id LIKE '%$nationalIdd%'";      
        }
        else if($patientId != "" && $fortNumm != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%' AND fort_num LIKE '%$fortNumm%'";        
        }
        else if($fortNumm != "" && $nationalIdd != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND fort_num LIKE '%$fortNumm%' AND national_id LIKE '%$nationalIdd%'"; 
        }
        else if($patientId != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%'"; 
        }
        else if($fortNumm != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND fort_num LIKE '%$fortNumm%'";   
        }
        else if($nationalIdd != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND national_id LIKE '%$nationalIdd%'";    
        }
        else {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' ORDER BY id DESC"; 
        }

       
       if($result = $db->query($searchQuery)) {
            if($result->num_rows != 0) {
                $output = "";
                while($row = $result->fetch_assoc()) {
                    patientDetails($row);
                    $teamId = $row['team'];
                    $memberId = $row['member'];
                    $date = date('d/m/Y h:ma',strtotime($createDate));
                    if(empty($team) && !teamHead() && !teamMember()){
                        $output .= 
                            "<tr><td>$id</td>
                            <td>$date</td>
                            <td>$followUpOfficer</td>
                            <td>$diagnoseDate</td>
                            <td>$fortNum</td>
                            <td>$nationalId</td>
                            <td>$nameAr</td>
                            <td>$nameEn</td>
                            <td>$age</td>
                            <td>$nationality</td>
                            <td>$sex</td>
                            <td>$contactNum</td>
                            <td>$f125</td>
                            <td>$f126</td>
                            <td>$contactsCon</td>
                            <td>$contactsNum</td>
                            <td>$pst</td>
                            <td>$region</td>
                            <td>$addressWritten</td>
                            <td>$addressLink</td>
                            <td>$contactsHome</td>
                            <td>$profession</td>
                            <td>$jobPlace</td>
                            <td>$jobManager</td>
                            <td>$jobDate</td>
                            <td>$otherPlaces</td>
                            <td>$workSyndrome</td>   
                            <td>$travelDate</td>     
                            <td>$contactIs</td>      
                            <td>$contactNameCity</td>
                            <td>$confirmRel</td>     
                            <td>$hospitalName</td>   
                            <td>$fortStatus</td>     
                            <td>$morningRec</td>     
                            <td>$takenProMo</td>     
                            <td>$nightRec</td>       
                            <td>$takenProNi</td>     
                            <td>$fortNumOther</td>
                            <td>$comeOut</td>
                            <td>$symptom</td>
                            <td>$fever</td>
                            <td>$shortBreathe</td>
                            <td>$sore</td>
                            <td>$cough</td>
                            <td>$headache</td>
                            <td>$muscle</td>
                            <td>$diarrhea</td>
                            <td>$vomiting</td>
                            <td>$runnyNose</td>
                            <td>$blood</td>
                            <td>$chronic</td>
                            <td>$smoker</td>
                            <td>$contactSeq</td>
                            <td>$notes</td>
                            <td>$notesAssist</td>
                            <td><a href='patient.php?patient_id=$id'>تعديل</a></td>
                            </tr>";
                    }
                    if(!empty($team) && $_SESSION['user_id'] == $teamId && empty($member)) {
                        $output .= 
                            "<tr><td>$id</td>
                            <td>$followUpOfficer</td>
                            <td>$date</td>
                            <td>$fortNum</td>
                            <td>$nationalId</td>
                            <td>$nameAr</td>
                            <td>$nameEn</td>
                            <td>$age</td>
                            <td>$nationality</td>
                            <td>$sex</td>
                            <td>$contactNum</td>
                            <td>$f125</td>
                            <td>$f126</td>
                            <td>$contactsCon</td>
                            <td>$contactsNum</td>
                            <td>$pst</td>
                            <td>$addressWritten</td>
                            <td>$addressLink</td>
                            <td>$contactsHome</td>
                            <td>$profession</td>
                            <td>$jobPlace</td>
                            <td>$jobManager</td>
                            <td>$jobDate</td>
                            <td>$otherPlaces</td>
                            <td>$workSyndrome</td>   
                            <td>$travelDate</td>     
                            <td>$contactIs</td>      
                            <td>$contactNameCity</td>
                            <td>$confirmRel</td>     
                            <td>$hospitalName</td>   
                            <td>$fortStatus</td>     
                            <td>$morningRec</td>     
                            <td>$takenProMo</td>     
                            <td>$nightRec</td>       
                            <td>$takenProNi</td>     
                            <td>$fortNumOther</td>
                            <td>$comeOut</td>
                            <td>$symptom</td>
                            <td>$fever</td>
                            <td>$shortBreathe</td>
                            <td>$sore</td>
                            <td>$cough</td>
                            <td>$headache</td>
                            <td>$muscle</td>
                            <td>$diarrhea</td>
                            <td>$vomiting</td>
                            <td>$runnyNose</td>
                            <td>$blood</td>
                            <td>$chronic</td>
                            <td>$smoker</td>
                            <td>$contactSeq</td>
                            <td>$notes</td>
                            <td>$notesAssist</td>
                            <td><a href='patient.php?patient_id=$id'>تعديل</a></td>
                            </tr>";
                    } 
        
                    
                }

            }
       }
       else {
           die($db->error);
       }
       
    echo $output;
}

function searchTransferedPatients($patientId = "",$nationalIdd = "",$fortNumm = "") {
    global $db,$errors,$id,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$createDate,$notesAssist,$team,$member,$diagnoseDate,$region;
    $output = "لا توجد نتائج";
    
        if($patientId != "" && $nationalIdd != "" && $fortNumm != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%' AND national_id LIKE '%$nationalIdd%' AND fort_num LIKE '%$fortNumm%'";
        }
        else if($patientId != "" && $nationalIdd != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%' AND national_id LIKE '%$nationalIdd%'";      
        }
        else if($patientId != "" && $fortNumm != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%' AND fort_num LIKE '%$fortNumm%'";        
        }
        else if($fortNumm != "" && $nationalIdd != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND fort_num LIKE '%$fortNumm%' AND national_id LIKE '%$nationalIdd%'"; 
        }
        else if($patientId != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND id LIKE '%$patientId%'"; 
        }
        else if($fortNumm != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND fort_num LIKE '%$fortNumm%'";   
        }
        else if($nationalIdd != "") {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' AND national_id LIKE '%$nationalIdd%'";    
        }
        else {
            $searchQuery = "SELECT * FROM patients WHERE new_condition = 'YES' ORDER BY id DESC"; 
        }

       
        if($result = $db->query($searchQuery)) {
            $output = "";
            while($row = $result->fetch_assoc()) {
                patientDetails($row);
                $date = date('h:ma d/m/Y',strtotime($createDate));
                if(!empty($team)) {
                    $teamQuery = "SELECT * FROM users WHERE id = '$team'";
                    $teamResult = $db->query($teamQuery); 
                    $teamRow = $teamResult->fetch_assoc();
                    $teamName = $teamRow['first_name'] . " " . $teamRow['last_name'];
                }
                else {
                    $teamName = "لا يوجد";
                }
                if(!empty($member)) {
                    $memberQuery = "SELECT * FROM users WHERE id = '$member'";
                    $memberResult = $db->query($memberQuery); 
                    $memberRow = $memberResult->fetch_assoc();
                    $memberName = $memberRow['first_name'] . " " . $memberRow['last_name'];
                }
                else {
                    $memberName = "لا يوجد";
                }
                if(!teamMember() && !teamHead()) {
                    if(!empty($team)){
                        echo 
                        "<tr><td>$id</td>
                        <td>$date</td>
                        <td>$teamName</td>
                        <td>$memberName</td>
                        <td>$followUpOfficer</td>
                        <td>$diagnoseDate</td>
                        <td>$fortNum</td>
                        <td>$nationalId</td>
                        <td>$nameAr</td>
                        <td>$nameEn</td>
                        <td>$age</td>
                        <td>$nationality</td>
                        <td>$sex</td>
                        <td>$contactNum</td>
                        <td>$f125</td>
                        <td>$f126</td>
                        <td>$contactsCon</td>
                        <td>$contactsNum</td>
                        <td>$pst</td>
                        <td>$region</td>
                        <td>$addressWritten</td>
                        <td>$addressLink</td>
                        <td>$contactsHome</td>
                        <td>$profession</td>
                        <td>$jobPlace</td>
                        <td>$jobManager</td>
                        <td>$jobDate</td>
                        <td>$otherPlaces</td>
                        <td>$workSyndrome</td>   
                        <td>$travelDate</td>     
                        <td>$contactIs</td>      
                        <td>$contactNameCity</td>
                        <td>$confirmRel</td>     
                        <td>$hospitalName</td>   
                        <td>$fortStatus</td>     
                        <td>$morningRec</td>     
                        <td>$takenProMo</td>     
                        <td>$nightRec</td>       
                        <td>$takenProNi</td>     
                        <td>$fortNumOther</td>
                        <td>$comeOut</td>
                        <td>$symptom</td>
                        <td>$fever</td>
                        <td>$shortBreathe</td>
                        <td>$sore</td>
                        <td>$cough</td>
                        <td>$headache</td>
                        <td>$muscle</td>
                        <td>$diarrhea</td>
                        <td>$vomiting</td>
                        <td>$runnyNose</td>
                        <td>$blood</td>
                        <td>$chronic</td>
                        <td>$smoker</td>
                        <td>$contactSeq</td>
                        <td>$notes</td>
                        <td>$notesAssist</td>
                        <td><a href='patient.php?patient_id=$id'>تعديل</a></td>
                        </tr>";
    
                    }
                }
                if(teamHead() && !empty($member)) {
                    if($_SESSION['user_id'] == $member || $_SESSION['user_id'] == $team) {
                        echo 
                        "<tr><td>$id</td>
                        <td>$memberName</td>
                        <td>$followUpOfficer</td>
                        <td>$date</td>
                        <td>$fortNum</td>
                        <td>$nationalId</td>
                        <td>$nameAr</td>
                        <td>$nameEn</td>
                        <td>$age</td>
                        <td>$nationality</td>
                        <td>$sex</td>
                        <td>$contactNum</td>
                        <td>$f125</td>
                        <td>$f126</td>
                        <td>$contactsCon</td>
                        <td>$contactsNum</td>
                        <td>$pst</td>
                        <td>$addressWritten</td>
                        <td>$addressLink</td>
                        <td>$contactsHome</td>
                        <td>$profession</td>
                        <td>$jobPlace</td>
                        <td>$jobManager</td>
                        <td>$jobDate</td>
                        <td>$otherPlaces</td>
                        <td>$workSyndrome</td>   
                        <td>$travelDate</td>     
                        <td>$contactIs</td>      
                        <td>$contactNameCity</td>
                        <td>$confirmRel</td>     
                        <td>$hospitalName</td>   
                        <td>$fortStatus</td>     
                        <td>$morningRec</td>     
                        <td>$takenProMo</td>     
                        <td>$nightRec</td>       
                        <td>$takenProNi</td>     
                        <td>$fortNumOther</td>
                        <td>$comeOut</td>
                        <td>$symptom</td>
                        <td>$fever</td>
                        <td>$shortBreathe</td>
                        <td>$sore</td>
                        <td>$cough</td>
                        <td>$headache</td>
                        <td>$muscle</td>
                        <td>$diarrhea</td>
                        <td>$vomiting</td>
                        <td>$runnyNose</td>
                        <td>$blood</td>
                        <td>$chronic</td>
                        <td>$smoker</td>
                        <td>$contactSeq</td>
                        <td>$notes</td>
                        <td>$notesAssist</td>
                        <td><a href='patient.php?patient_id=$id'>تعديل</a></td>
                        </tr>";
                    }
                }
                if(teamMember() && $_SESSION['user_id'] == $member) {
                    echo 
                    "<tr><td>$id</td>
                    <td>$followUpOfficer</td>
                    <td>$date</td>
                    <td>$fortNum</td>
                    <td>$nationalId</td>
                    <td>$nameAr</td>
                    <td>$nameEn</td>
                    <td>$age</td>
                    <td>$nationality</td>
                    <td>$sex</td>
                    <td>$contactNum</td>
                    <td>$f125</td>
                    <td>$f126</td>
                    <td>$contactsCon</td>
                    <td>$contactsNum</td>
                    <td>$pst</td>
                    <td>$addressWritten</td>
                    <td>$addressLink</td>
                    <td>$contactsHome</td>
                    <td>$profession</td>
                    <td>$jobPlace</td>
                    <td>$jobManager</td>
                    <td>$jobDate</td>
                    <td>$otherPlaces</td>
                    <td>$workSyndrome</td>   
                    <td>$travelDate</td>     
                    <td>$contactIs</td>      
                    <td>$contactNameCity</td>
                    <td>$confirmRel</td>     
                    <td>$hospitalName</td>   
                    <td>$fortStatus</td>     
                    <td>$morningRec</td>     
                    <td>$takenProMo</td>     
                    <td>$nightRec</td>       
                    <td>$takenProNi</td>     
                    <td>$fortNumOther</td>
                    <td>$comeOut</td>
                    <td>$symptom</td>
                    <td>$fever</td>
                    <td>$shortBreathe</td>
                    <td>$sore</td>
                    <td>$cough</td>
                    <td>$headache</td>
                    <td>$muscle</td>
                    <td>$diarrhea</td>
                    <td>$vomiting</td>
                    <td>$runnyNose</td>
                    <td>$blood</td>
                    <td>$chronic</td>
                    <td>$smoker</td>
                    <td>$contactSeq</td>
                    <td>$notes</td>
                    <td>$notesAssist</td>
                    <td><a href='patient.php?patient_id=$id'>تعديل</a></td>
                    </tr>"; 
                }
            }
        }
        else {
            array_push($errors,"حدث خطأ أثناء عرض بيانات المرضي");
        }
       
    echo $output;
}
?>
