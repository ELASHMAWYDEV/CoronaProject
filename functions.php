<?php
session_start();

//connect to database

$db = new mysqli('localhost','root','','corona');
$db->set_charset('utf8');
// global variables
$user = $username = $email = $first_name = $last_name = $computerCode = $days = "";
$errors = array();
$success = array();

$daysTable = '<table id="days">
<tr>
    <th>الاعراض</th>
    <th>Day1</th>
    <th>Day2</th>
    <th>Day3</th>
    <th>Day4</th>
    <th>Day5</th>
    <th>Day6</th>
    <th>Day7</th>
    <th>Day8</th>
    <th>Day9</th>
    <th>Day10</th>
    <th>Day11</th>
    <th>Day12</th>
    <th>Day13</th>
    <th>Day14</th>
</tr>
<tr>
    <td>No Symptom</td>
    
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    
</tr>
<tr>
    <td>Fever</td>
    
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    
</tr>
<tr>
    <td>Shortness of Breathe</td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>

</tr>
<tr>
    <td>Sore Throat</td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
</tr>
<tr>
    <td>cough</td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
</tr>
<tr>
    <td>Headache</td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
</tr>
<tr>
    <td>Diarrhea</td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
</tr>
<tr>
    <td>Vomiting/nausea</td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
</tr>
<tr>
    <td>Runny nose</td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
    <td>
        <select>
            <option value="" selected></option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>
    </td>
</tr>
</table>';

//patient variables

$patientId = $followUpOfficer = $fortNum = $nationalId = $nameAr = $nameEn = $age = $nationality = $sex
= $contactNum = $f125 = $f126 = $contactsCon = $contactsNum = $pst = $notes = $addressWritten = $addressLink
= $contactsHome = $profession = $jobPlace = $jobManager = $jobDate = $otherPlaces = $workSyndrome = $travelDate
= $contactIs = $contactNameCity = $confirmRel = $hospitalName = $fortStatus = $morningRec = $takenProMo
= $nightRec = $takenProNi = $fortNumOther = $comeOut = $symptom = $fever = $shortBreathe = $sore = $cough = $headache
= $muscle = $diarrhea = $vomiting = $runnyNose = $blood = $chronic = $smoker = $contactSeq = $diagnoseDate = $district = $notesAssist = "";

//mix variables

$patientIdM = $idM = $nameArM = $nameEnM = $nationalityM = $ageM = $contactNumM = $sexM = $relM = $nationalIdM = $symptomM = $notesM = 
$sampleDateM = $screeningM = $confirmatoryM = $otherNotesM = $regionM = $followUpTeamM = $lastExistM = $followUpResM = $followUpNotesM = $modesM = $interestM = "";

//edit days

if(isset($_POST['mix_days_id'])) {
    showDays(test($_POST['mix_days_id']));
}
if(isset($_POST['edit_mix_days'])) {
    editDays($_POST['days'],test($_POST['id']));
}
//reset password

if(isset($_POST['reset_btn'])) {
    resetPass(test($_POST['email']));
}
if(isset($_POST['reseted_btn'])) {
    resetPassword(test($_POST['password_1']),test($_POST['password_2']),$_SESSION['reset_token']);
}

//mix add & edit

if(isset($_POST['mix_edit'])) {
    mix();
} 
if(isset($_POST['mix_add'])) {
    mix();
}
if(!empty($_POST['idM'])) {
    getMixSetting(test($_POST['idM']));
}
else if(isset($_GET['mix_id']))  {
    getMixSetting(test($_GET['mix_id']));
}
if(isset($_GET['delete_mix'])) {
    deleteMix($_GET['delete_mix']);
}

// patient add & edit

if(isset($_POST['patient_edit'])) {
    patient();
} 
if(isset($_POST['patient_add'])) {
    patient();
}
if(!empty($_POST['id'])) {
    getPatientSetting(test($_POST['id']));
}
if(isset($_GET['patient_id']))  {
    getPatientSetting(test($_GET['patient_id']));
}
// else if(isset($_POST['patientId'])) {
    // getPatientSetting(test($_POST['patientId']));
// }

if(isset($_GET['delete_patient'])) {
    deletePatient($_GET['delete_patient']);
}
//on registration

if(isset($_POST['register_btn'])) {
    register();
}

//dashboard register

if(isset($_POST['register_new'])) {
    register_new();
}

// on login

if(isset($_POST['login_btn'])) {
    login();
}

//add hospital

if(isset($_POST['add_hospital'])) {
    addHospital(test($_POST['name']),test($_POST['class']));
}

//remove hospital

if(isset($_GET['remove_hospital'])) {
    removeHospital($_GET['remove_hospital']);
}

//add district

if(isset($_POST['add_district'])) {
    addDistrict(test($_POST['name']));
}

//remove district

if(isset($_GET['remove_district'])) {
    removeDistrict($_GET['remove_district']);
}

//add nationality

if(isset($_POST['add_nationality'])) {
    addNationality(test($_POST['name']));
}

//remove nationality

if(isset($_GET['remove_nationality'])) {
    removeNationality($_GET['remove_nationality']);
}

//edit settings

if(isset($_POST['edit_settings'])) {
    editSettings();
}

//remove user

if(isset($_GET['remove_user'])) {
    deleteUser(test($_GET['remove_user']));
}

//view team

if(isset($_GET['team_id'])) {
    getTeamMembers(test($_GET['team_id']));
}





// all functions
function login() {
    global $user,$password,$errors,$success,$db;
    $user = test($_POST['user']);
    $password = test($_POST['password']);

    //check for input errors
    if(empty($user)) {
        array_push($errors,'اسم المستخدم أو البريد الالكتروني مطلوب');
    }
    else {
        if(empty($password)) {
            array_push($errors,'كلمة المرور مطلوبة');
        }
    }


    $userQuery = "SELECT * FROM users WHERE username = '$user' OR email = '$user' LIMIT 1;";
    $result = $db->query($userQuery);
    if($result->num_rows == 0) {
        array_push($errors,'اسم المستخدم أو البريد الالكتروني غير صحيح');
    }
    else {
        $row = $result->fetch_assoc();
        $password = md5($password);
        if(!$row['password'] == $password) {
            
        }
    }
    
    //input validation

    if(count($errors) == 0) {
        $sessionQuery = "SELECT * FROM users WHERE (username = '$user' OR email = '$user') AND `password` = '$password' LIMIT 1;";
        $result = $db->query($sessionQuery);
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            getUserInfo($row);
            //last login
            $time = date('Y/m/d h:ia');
            $lastLogin = "UPDATE users SET last_login = '$time' WHERE username = '$user' LIMIT 1";
            if($db->query($lastLogin)) {
                header('location: /dashboard/transfered.php');
            }
            else {
                die($db->error);
            }
        }
        else {
            array_push($errors,'كلمة المرور غير صحيحة');
        }
    }
}

function register() {
    global $db,$errors,$username,$first_name,$last_name,$success,$registerToken,$computerCode;

    // $email = test($_POST['email']);
    if(isset($_SESSION['register_token'])) {
        $registerToken = $_SESSION['register_token'];
    }
    $computerCode = test($_POST['computer_code']);
    $username = test($_POST['username']);
    $first_name = test($_POST['first_name']);
    $last_name = test($_POST['last_name']);
    $password_1 = test($_POST['password_1']);
    $password_2 = test($_POST['password_2']);

    //check for input errors

    

    //check the register token

        
    if(!isset($_SESSION['register_token'])) {
        array_push($errors,'يجب الضغط علي الرابط المرسل في البريد الالكتروني لتسجيل بيانتك');
    }
    else {
        $regCheck = "SELECT * FROM users WHERE registered = 'YES' AND register_token = '$registerToken' LIMIT 1";
        if($tokenResult = $db->query($regCheck)) {
            if($tokenResult->num_rows != 0) {
                array_push($errors,'لقد قمت بتسجيل بياناتك بالفعل ، لتعديلها اذهب الي اعدادات الحساب');
            }
            else{
                $usernameCheck = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
                $userResult = $db->query($usernameCheck);
                if($userResult->num_rows != 0) {
                    array_push($errors,"اسم المستخدم $username الذي أدخلته مسجل لدينا بالفعل من فضلك أدخل اسم مختلف");
                }
                if(empty($username)) {
                    array_push($errors,'اسم المستخدم مطلوب');
                }
                if(empty($first_name)) {
                    array_push($errors,'الاسم الأول مطلوب');
                }
                if(empty($last_name)) {
                    array_push($errors,'الاسم الأخير مطلوب');
                }
                if(empty($password_1)) {
                    array_push($errors,'كلمة المرور مطلوبة');
                }
                if(empty($password_2)) {
                    array_push($errors,'تأكيد كلمة المرور مطلوب');
                }
                if(empty($computerCode)) {
                    array_push($errors,'  كود الكمبيوتر مطلوب');
                }
                //password validation
            
                if(strlen($password_1) < 6) {
                    array_push($errors,'حجم كلمة المرور يجب أن يكون أكبر من 5 أحرف');
                }
                if($password_1 != $password_2) {
                    array_push($errors,'كلمتي المرور غير متطابقتين');
                }
            }
        }
        
        
    }


    //pass all if no errors

    if(count($errors) == 0) {
        $newRegisterToken = uniqid();
        $password_1 = md5($password_1);
        $regQuery = "UPDATE users
                     SET
                     computer_code = '$computerCode', 
                     username = '$username',
                     `password` = '$password_1',
                     first_name = '$first_name',
                     last_name = '$last_name',
                     registered = 'YES' WHERE register_token = '$registerToken' LIMIT 1";
        if($db->query($regQuery)) {
            $getUserQuery = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
            $result = $db->query($getUserQuery);
            if($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                getUserInfo($row);
                if($db->query("UPDATE users SET register_token = '$newRegisterToken' WHERE username = '$username'")) {
                    array_push($success,"لقد تم تسجيل البيانات بنجاح");
                    //last login
                    $time = date('Y/m/d h:ia');
                    $lastLogin = "UPDATE users SET last_login = '$time' WHERE username = '$username' LIMIT 1";
                    if($db->query($lastLogin)) {
                        header('location: /dashboard');
                    }
                    else {
                        die($db->error);
                    }
                    header("location: ../dashboard");
                }
                
                
            }
            
        }
        else {
            die("هناك خطأ في قاعدة البيانات" . $db->error);
        }
    }
    
    
}

function register_new() {
    global $db,$email,$errors,$success,$userType;
    $email = test($_POST['email']);
    $userType = test($_POST['user_type']);

    if(empty($email)) {
        array_push($errors,'البريد الالكتروني مطلوب');
    }
    if(empty($userType)) {
        array_push($errors,'رتبة المستخدم مطلوبة');
    }
    //email validation

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        array_push($errors,'البريد الالكتروني الذي أدخلته غير صالح');
    }
    
    //check if email already exists

    $emailCheck = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $db->query($emailCheck);
    if($result->num_rows != 0) {
        array_push($errors,'البريد الالكتروني الذي أدخلته مسجل بالفعل');
    }

    //if all good => register the new email

    if(count($errors) == 0) {
        $registerToken = uniqid();
        $resetToken = uniqid();
        $regNewQuery = "INSERT INTO users (email,register_token,reset_token,user_type) VALUES ('$email','$registerToken','$resetToken','$userType')";
        if($db->query($regNewQuery)) {
            array_push($success,"لقد تم التسجيل بنجاح");

            //sending mail to the user with the register token

            $to = $email;
            $subject = "تفعيل حسابك في الموقع";
            $secured = "";
            if($_SERVER['HTTPS'] != "off") {
                $secured = "https://";
            }
            else {
                $secured = "http://";
            }
            $domain = $secured . $_SERVER['HTTP_HOST'];
            $body = "
            <html lang='ar' dir='rtl'>
            <head>
            
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@600;700&display=swap');
                    .container {
                        text-align:center;
                        font-family: 'Cairo', sans-serif !important;
                        max-width:100%;
                        margin: auto;
                    }
                    p {
                        color:#7f8c8d;
                        margin: 50px auto;
                        font-size: 20px;
                    }
                    a {
                       padding: 20px 30px;
                       font-size:24px;
                       font-weight:500;
                       background-color:#2ecc71;
                       border-radius: 8px;
                       text-decoration: none;
                       color: #ecf0f1 !important;
                       transition: 0.3s ease;
                    }
                    a:visited {
                        color: #ecf0f1 !important;
                    }
                    a:hover {
                        color: #2c3e50 !important;
                        background-color: #2ecc71;
                    }
                </style>
            </head>
            <body>
                <div class='contianer'>
                    <p>من فضلك اضغط علي الرابط أدناه لتفعيل حسابك</p>
                    <a href='$domain/account/register.php?register_token=$registerToken'>تفعيل</a>
                </div>
            </body>
            </html>
            
            ";
            $headers =
                'From: no-reply@'. $_SERVER['HTTP_HOST'] . "\r\n" .
                'Reply-To: info@'. $_SERVER['HTTP_HOST'] . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html;charset=UTF-8';

            $mail = mail($to,$subject,$body,$headers);
            if($mail) {
                array_push($success,"لقد تم ارسال البريد بنجاح");
            }
            else {
                array_push($errors,'لم يتم ارسال البريد الالكتروني');
            }
        }
        else {
            die("خطأ في قاعدة البيانات".$db->error);
        }

    }

}

function getUserInfo($row) {
    $_SESSION['computer_code'] = $row['computer_code'];
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['last_login'] = $row['last_login'];
    $_SESSION['user_type'] = $row['user_type'];
    $_SESSION['username'] = $row['username'];
}

function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function loggedin() {
    global $errors;
    if(!isset($_SESSION['user_id'])) {
        array_push($errors,'من فضلك قم بتسجيل الدخول أولا');
        header('location: /account/login.php');
    }
}
function loggeinRedirect() {
    global $success;
    if(isset($_SESSION['user_id'])) {
        array_push($success,'لقد قمت بتسجيل الدخول بالفعل');
        header('location: /dashboard/index.php');
    }
}

function alarm() {
    global $errors,$success;
    if(count($errors == 0)){

    }
    if(count($success == 0)){

    }
}

function adminOnly() {
    if($_SESSION['user_type'] == 1) {
        return true;
    }
    else {
        return false;
    }
}

function getUserType($userType) {
    switch($userType) {
        case '1':
            echo "مشرف";
            break;
        case '2':
            echo "مساعد";
            break;
        case '3':
            echo "القيادة والتحكم";
            break;
        case '4':
            echo "الأمراض المعدية";
            break;
        case '5':
            echo "رئيس فريق";
            break;
        case '6':
            echo "عضو فريق";
            break;
        default:
            echo "حدث خطأ ما";
    }
}

function addHospital($name,$class) {
    global $success,$errors,$db;
    if(empty($name)) {
        array_push($errors,'اسم المستشفي مطلوب');
    }
    if(empty($class)) {
        array_push($errors,'تصنيف المستشفي مطلوب');
    }
    if(count($errors) == 0) {
        $addHospitalQuery = "INSERT INTO hospitals (`name`,class) VALUES ('$name','$class')";
        if($db->query($addHospitalQuery)) {
            array_push($success,'تمت إضافة المستشفي بنجاح');
        }
        else {
            die($db->error);
        }

    }
}

function getHospitalsTable() {
    global $db,$errors;
    $getHospitalQuery = "SELECT * FROM hospitals";
    if($result = $db->query($getHospitalQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['class'] . "</td><td><a onclick='return confirm('هل أنت متأكد أنك تريد الحذف ؟')' href='?remove_hospital=" . $row['id'] . "'>حذف</a></td></tr>";
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض المستشفيات المسجلة');
    }
}

function getHospitalsSelect($hospital) {
    global $db,$errors;
    $getHospitalQuery = "SELECT * FROM hospitals";
    echo "<option value=''";
    if($hospital == "") {
        echo "selected";
    } 
    echo ">اختر</option><option value='عزل منزلي'";
    if($hospital == "عزل منزلي") {
        echo "selected";
    }
    echo ">عزل منزلي</option>";
    if($result = $db->query($getHospitalQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['name'];
            if($hospital == $row['name']) {
                echo "' selected>";
            } 
            else {
                echo "'>";
            }
            echo $row['name'] . "</option>";
            
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض المستشفيات المسجلة');

    }
}
function removeHospital($id) {
    global $db,$success,$errors;
    $removeQuery = "DELETE FROM hospitals WHERE id = '$id'";
    if($db->query($removeQuery)) {
        array_push($success,'تم حذف المستشفي');
    }
    else {
        array_push($errors,'لقد تم حذف المستشفي بالفعل');
    }
}

function editSettings() {
    global $db,$errors,$success;
    $computerCode = test($_POST['computer_code']);
    $id = $_SESSION['user_id'];
    $email = test($_POST['email']);
    $username = test($_POST['username']);
    $first_name = test($_POST['first_name']);
    $last_name = test($_POST['last_name']);
    $password_1 = test($_POST['password_1']);
    $password_2 = test($_POST['password_2']);
    $changePassword = false;

    if(empty($username)) {
        array_push($errors,'البريد الالكتروني مطلوب');
    }
    if(empty($username)) {
        array_push($errors,'اسم المستخدم مطلوب');
    }
    if(empty($computerCode)) {
        array_push($errors,'كود الكمبيوتر مطلوب');
    }
    if(empty($first_name)) {
        array_push($errors,'الاسم الأول مطلوب');
    }
    if(empty($last_name)) {
        array_push($errors,'الاسم الأخير مطلوب');
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        array_push($errors,'البريد الالكتروني الذي أدخلته غير صالح');
    }
    if(!empty($password_1)) {
        if(empty($password_2)) {
            array_push($errors,'يجب كتابة كلمة المرور مرة أخري للتأكيد');
        }
        else {
            if(strlen($password_1) < 6) {
                array_push($errors,'حجم كلمة المرور يجب أن يكون أكبر من 5 أحرف');
            }
            if($password_1 != $password_2) {
                array_push($errors,'كلمتي المرور غير متطابقتين');
            }
        }
        
    }
    else {
        $changePassword = true;
    }
    //check if email already exists

    $emailCheck = "SELECT * FROM users WHERE email = '$email'AND id != '$id' LIMIT 1";
    if($result = $db->query($emailCheck)){

        if($result->num_rows != 0) {
            array_push($errors,'البريد الالكتروني الذي أدخلته مسجل بالفعل');
        }
    }
    else{
        die($db->error);
    }

    //check if username already exists

    $usernameCheck = "SELECT * FROM users WHERE username = '$username' AND id != '$id' LIMIT 1";
    $result = $db->query($usernameCheck);
    if($result->num_rows != 0) {
        array_push($errors,' اسم المستخدم الذي أدخلته مسجل بالفعل');
    }

    if(count($errors) == 0) {
            $_SESSION['username'] = $username;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['email'] = $email;
            $_SESSION['computer_code'] = $computerCode;
        if($changePassword) {
            $editQuery = "UPDATE users
                     SET 
                     computer_code = '$computerCode',
                     email = '$email',
                     username = '$username',
                     first_name = '$first_name',
                     last_name = '$last_name'
                     WHERE id = '$id' LIMIT 1";
            if($db->query($editQuery)) {
                array_push($success,"تم تعديل بيانات الحساب بنجاح");
            }
            else {
                die($db->error);
            }
        }
        else {
            $password = md5($password_1);
            $editQuery = "UPDATE users
                     SET 
                     computer_code = '$computerCode',
                     email = '$email',
                     username = '$username',
                     first_name = '$first_name',
                     last_name = '$last_name',
                     `password` = '$password'
                     WHERE id = '$id' LIMIT 1";
            if($db->query($editQuery)) {
                array_push($success,"تم تعديل بيانات الحساب بنجاح");
            }
            else {
                die($db->error);
            }
        }
        
        
    }
}


function getDistrictTable() {
    global $db,$errors;
    $getDistrictQuery = "SELECT * FROM districts";
    if($result = $db->query($getDistrictQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['name'] . "</td><td><a href='?remove_district=" . $row['id'] . "'>حذف</a></td></tr>";
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض الأحياء المسجلة');
    }
}

function addDistrict($name) {
    global $success,$errors,$db;
    if(empty($name)) {
        array_push($errors,'اسم الحي مطلوب');
    }
    if(count($errors) == 0) {
        $addHospitalQuery = "INSERT INTO districts (`name`) VALUES ('$name')";
        if($db->query($addHospitalQuery)) {
            array_push($success,'تمت إضافة الحي بنجاح');
        }
        else {
            die($db->error);
        }

    }

}

function removeDistrict($id) {
    global $db,$success,$errors;
    $removeQuery = "DELETE FROM districts WHERE id = '$id'";
    if($db->query($removeQuery)) {
        // $_SESSION['success'] = 'تم حذف الحي بنجاح';
        // header('location: /dashboard/districts.php');
        array_push($success,'تم حذف الحي بنجاح');
    }
    else {
        array_push($errors,'لقد تم حذف الحي بالفعل');
    }
}

function getUsersTable() {
    global $db,$errors;
    $getUsersQuery = "SELECT * FROM users";
    if($result = $db->query($getUsersQuery)) {
        while($row = $result->fetch_assoc()) {
            if($row['registered'] == 'YES') {
                $active = 'مفعل';
            }
            else {
                $active = 'غير مفعل';
            }
            echo "<tr><td>" 
            . $row['id']
            . "</td><td>"
            . $row['username'] 
            . "</td><td>";
            echo getUserType($row['user_type']);
            echo "</td><td>" . $row['first_name'] . " " . $row['last_name']
            . "</td><td>" . $row['computer_code']
            . "</td><td>" .  $row['email']
            . "</td><td>" .  $row['last_login']
            . "</td><td>" . $active
            . "</td><td><a href='?remove_user=" 
            . $row['id'] . "'>حذف</a></td></tr>";
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض المستخدمين المسجلين');
    }

}

function patient() {
    global $db,$errors,$success,$patientId,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$notesAssist,$member,$team,$diagnoseDate,$region;

    patientDetailsTest();


    if(isset($_POST['patient_add'])) {
        $addPatientQuery = "INSERT INTO patients (follow_up_officer,fort_num,national_id,name_ar,name_en,age,
        nationality,sex,contact_num,f125,f126,contacts_con,contacts_num,pst,address_written,address_link,contacts_home,
        profession,job_place,job_manager,job_date,other_places,work_syndrome,travel_date,contact_is,contact_name_city,confirm_rel,
        hospital_name,fort_status,morning_rec,taken_pro_mo,night_rec,taken_pro_ni,fort_num_other,come_out,symptom,fever,short_breathe,sore,
        cough,headache,muscle,diarrhea,vomiting,runny_nose,blood,chronic,smoker,contact_seq,notes,notes_assist,team,member,diagnose_date,region) VALUES ('$followUpOfficer','$fortNum','$nationalId',
        '$nameAr','$nameEn','$age','$nationality','$sex','$contactNum','$f125','$f126','$contactsCon','$contactsNum',
        '$pst','$addressWritten','$addressLink','$contactsHome','$profession','$jobPlace','$jobManager','$jobDate',
        '$otherPlaces','$workSyndrome','$travelDate','$contactIs','$contactNameCity','$confirmRel','$hospitalName','$fortStatus',
        '$morningRec','$takenProMo','$nightRec','$takenProNi','$fortNumOther','$comeOut','$symptom','$fever','$shortBreathe','$sore',
        '$cough','$headache','$muscle','$diarrhea','$vomiting','$runnyNose','$blood','$chronic','$smoker','$contactSeq','$notes','$notesAssist','$team','$member','$diagnoseDate','$region')";
        if($db->query($addPatientQuery)) {
            $id = $_GET['patient_id'] = $db->insert_id;
            array_push($success,"تم إضافة الحالة رقم $id بنجاح");
        }
        else {
            array_push($errors,$db->error);
        }

    }
    else if(isset($_POST['patient_edit'])) {
        $patientId = test($_POST['id']);
        patientDetailsTest();
        $editPatientQuery = "UPDATE patients
                            SET
                            follow_up_officer = '$followUpOfficer',
                            fort_num = '$fortNum',
                            national_id = '$nationalId',
                            name_ar = '$nameAr',
                            name_en = '$nameEn',
                            age = '$age',
                            nationality = '$nationality',
                            sex = '$sex',
                            contact_num = '$contactNum',
                            f125 = '$f125',
                            f126 = '$f126',
                            contacts_con = '$contactsCon',
                            contacts_num = '$contactsNum',
                            pst = '$pst',
                            address_written = '$addressWritten',
                            address_link = '$addressLink',
                            contacts_home = '$contactsHome',
                            profession = '$profession',
                            job_place = '$jobPlace',
                            job_manager = '$jobManager',
                            job_date = '$jobDate',
                            other_places = '$otherPlaces',
                            work_syndrome = '$workSyndrome',
                            travel_date = '$travelDate',
                            contact_is = '$contactIs',
                            contact_name_city = '$contactNameCity',
                            confirm_rel = '$confirmRel',
                            hospital_name = '$hospitalName',
                            fort_status = '$fortStatus',
                            morning_rec = '$morningRec',
                            taken_pro_mo = '$takenProMo',
                            night_rec = '$nightRec',
                            taken_pro_ni = '$takenProNi',
                            fort_num_other = '$fortNumOther',
                            come_out = '$comeOut',
                            symptom = '$symptom',
                            fever = '$fever',
                            short_breathe = '$shortBreathe',
                            sore = '$sore',
                            cough = '$cough',
                            headache = '$headache',
                            muscle = '$muscle',
                            diarrhea = '$diarrhea',
                            vomiting = '$vomiting',
                            runny_nose = '$runnyNose',
                            blood = '$blood',
                            chronic = '$chronic',
                            smoker = '$smoker',
                            contact_seq = '$contactSeq',
                            notes = '$notes',
                            notes_assist = '$notesAssist',
                            team = '$team',
                            member = '$member',
                            diagnose_date = '$diagnoseDate',
                            region = '$region'
                            WHERE id = '$patientId' LIMIT 1";
        if($db->query($editPatientQuery)) {
            array_push($success,"تم تعديل بيانات المريض بنجاح");
        }
        else {
            die($db->error);
        }

    }

    else {
        die('حدث خطأ ما ، يرجي الرجوع الي المطور');
    }

}


function getPatientSetting($patientId) {
    global $db,$errors,$success,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$createDate,$notesAssist,$team,$member,$patientExist,$diagnoseDate,$region;


    $getSettingQuery = "SELECT * FROM patients WHERE id = '$patientId' LIMIT 1";
    
    if($result = $db->query($getSettingQuery)) {
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            patientDetails($row);
            $patientExist = true;
            
        }
        else {
            array_push($errors,"لا يوجد مريض بهذا الرقم".$db->error);
            $patientExist = false;
        }
    }
    else {
        die($db->error);
    }
    $_POST['id'] = $patientId;
    
}

function patientDetails($row) {
    global $id,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$createDate,$notesAssist,$team,$member,$diagnoseDate,$region;


    $id = $row['id'];
    $nameAr = $row['name_ar'];
    $nameEn = $row['name_en'];
    $fortNum = $row['fort_num'];
    $followUpOfficer = $row['follow_up_officer'];
    $nationalId = $row['national_id'];
    $age = $row['age'];
    $nationality = $row['nationality'];
    $sex = $row['sex'];
    $contactNum = $row['contact_num'];
    $f125 = $row['f125'];
    $f126 = $row['f126'];
    $contactsCon = $row['contacts_con'];
    $contactsNum = $row['contacts_num'];
    $pst = $row['pst'];
    $notes = $row['notes'];
    $addressWritten = $row['address_written'];
    $addressLink = $row['address_link'];
    $contactsHome = $row['contacts_home'];
    $profession = $row['profession'];
    $jobPlace = $row['job_place'];
    $jobManager = $row['job_manager'];
    $jobDate = $row['job_date'];
    $otherPlaces = $row['other_places'];
    $workSyndrome = $row['work_syndrome'];
    $travelDate = $row['travel_date'];
    $contactIs = $row['contact_is'];
    $contactNameCity = $row['contact_name_city'];
    $confirmRel = $row['confirm_rel'];
    $hospitalName = $row['hospital_name'];
    $fortStatus = $row['fort_status'];
    $morningRec = $row['morning_rec'];
    $takenProMo = $row['taken_pro_mo'];
    $nightRec = $row['night_rec'];
    $takenProNi = $row['taken_pro_ni'];
    $fortNumOther = $row['fort_num_other'];
    $comeOut = $row['come_out'];
    $symptom = $row['symptom'];
    $fever = $row['fever'];
    $shortBreathe = $row['short_breathe'];
    $sore = $row['sore'];
    $cough = $row['cough'];
    $headache = $row['headache'];
    $muscle = $row['muscle'];
    $diarrhea = $row['diarrhea'];
    $vomiting = $row['vomiting'];
    $runnyNose = $row['runny_nose'];
    $blood = $row['blood'];
    $chronic = $row['chronic'];
    $smoker = $row['smoker'];
    $contactSeq = $row['contact_seq'];
    $createDate = $row['create_date'];
    $notesAssist = $row['notes_assist'];
    $team = $row['team'];
    $member = $row['member'];
    $diagnoseDate = $row['diagnose_date'];
    $region = $row['region'];
}
function patientDetailsTest() {
    global $nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$notesAssist,$team,$member,$diagnoseDate,$region;


    $followUpOfficer = test($_POST['followUpOfficer']);
    $fortNum = test($_POST['fortNum']);
    $nationalId = test($_POST['nationalId']);
    $nameAr = test($_POST['nameAr']);
    $nameEn = test($_POST['nameEn']);
    $age = test($_POST['age']);
    $nationality = test($_POST['nationality']);
    $sex = test($_POST['sex']);
    $contactNum = test($_POST['contactNum']);
    $f125 = test($_POST['f125']);
    $f126 = test($_POST['f126']);
    $contactsCon = test($_POST['contactsCon']);
    $contactsNum = test($_POST['contactsNum']);
    $pst = test($_POST['pst']);
    $notes = test($_POST['notes']);
    $addressWritten = test($_POST['addressWritten']);
    $addressLink = test($_POST['addressLink']);
    $contactsHome = test($_POST['contactsHome']);
    $profession = test($_POST['profession']);
    $jobPlace = test($_POST['jobPlace']);
    $jobManager = test($_POST['jobManager']);
    $jobDate = test($_POST['jobDate']);
    $otherPlaces = test($_POST['otherPlaces']);
    $workSyndrome = test($_POST['workSyndrome']);
    $travelDate = test($_POST['travelDate']);
    $contactIs = test($_POST['contactIs']);
    $contactNameCity = test($_POST['contactNameCity']);
    $confirmRel = test($_POST['confirmRel']);
    $hospitalName = test($_POST['hospitalName']);
    $fortStatus = test($_POST['fortStatus']);
    $morningRec = test($_POST['morningRec']);
    $takenProMo = test($_POST['takenProMo']);
    $nightRec = test($_POST['nightRec']);
    $takenProNi = test($_POST['takenProNi']);
    $fortNumOther = test($_POST['fortNumOther']);
    $comeOut = test($_POST['comeOut']);
    $symptom = test($_POST['symptom']);
    $fever = test($_POST['fever']);
    $shortBreathe = test($_POST['shortBreathe']);
    $sore = test($_POST['sore']);
    $cough = test($_POST['cough']);
    $headache = test($_POST['headache']);
    $muscle = test($_POST['muscle']);
    $diarrhea = test($_POST['diarrhea']);
    $vomiting = test($_POST['vomiting']);
    $runnyNose = test($_POST['runnyNose']);
    $blood = test($_POST['blood']);
    $chronic = test($_POST['chronic']);
    $smoker = test($_POST['smoker']);
    $contactSeq = test($_POST['contactSeq']);
    $notesAssist = test($_POST['notesAssist']);
    $team = test($_POST['team']);
    $member = test($_POST['member']);
    $diagnoseDate = test($_POST['diagnoseDate']);
    $region = test($_POST['region']);
}

function deleteUser($id) {
    global $db,$success;
    $deleteQuery = "DELETE FROM users WHERE id = '$id'";
    if($db->query($deleteQuery)) {
        array_push($success,'تم حذف المستخدم بنجاح');
    }
    else {
        die($db->error);
    }
}

function deletePatient($id) {
    global $db,$success,$errors;
    $deleteQuery = "DELETE FROM patients WHERE id = '$id'";
    if($db->query($deleteQuery)) {
        array_push($success,'تم حذف المريض بنجاح');
    }
    else {
        die($db->error);
    }
}



function radioCheck($var,$name) {
    if(empty($var)) {
        echo "
        <input type='radio' value='نعم' class='radio' name='$name'>نعم
        <input type='radio' value='لا' class='radio' name='$name'>لا
        <input type='radio' value='' class='radio' name='$name' checked>عدم تحديد
        ";
    }
    else {
        if($var == "نعم") {
            echo "
            <input type='radio' value='نعم' class='radio' name='$name' checked>نعم
            <input type='radio' value='لا' class='radio' name='$name'>لا
            <input type='radio' value='' class='radio' name='$name'>عدم تحديد
            ";
        }
        else if($var == "لا") {
            echo "
            <input type='radio' value='نعم' class='radio' name='$name'>نعم
            <input type='radio' value='لا' class='radio' name='$name' checked>لا
            <input type='radio' value='' class='radio' name='$name'>عدم تحديد
            ";
        }
        
    }
}

function select($var,$z) {
    if($var == $z) {
        echo "selected";
    }
}

function getNationalityTable() {
    global $db,$errors;
    $getnationalitiesQuery = "SELECT * FROM nationalities";
    if($result = $db->query($getnationalitiesQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['name'] . "</td><td><a href='?remove_nationality=" . $row['id'] . "'>حذف</a></td></tr>";
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض الجنسيات المسجلة');
    }
}


function addNationality($name) {
    global $success,$errors,$db;
    if(empty($name)) {
        array_push($errors,'اسم الجنسية مطلوب');
    }
    if(count($errors) == 0) {
        $addNationalityQuery = "INSERT INTO nationalities (`name`) VALUES ('$name')";
        if($db->query($addNationalityQuery)) {
            array_push($success,'تمت إضافة الجنسية بنجاح');
        }
        else {
            die($db->error);
        }

    }
}

function removeNationality($id) {
    global $db,$success;
    $removeQuery = "DELETE FROM nationalities WHERE id = '$id'";
    if($db->query($removeQuery)) {
        array_push($success,'تم حذف الجنسية بنجاح');
    }
    else {
        die($db->error);
    }
}

function getNationalitiesSelect($nationality) {
    global $db,$errors;
    $getNationalityQuery = "SELECT * FROM nationalities";
    echo "<option value=''";
    if($nationality == "") {
        echo "selected>اختر</option>";
    } 
    else {
        echo ">اختر</option>";
    }

    if($result = $db->query($getNationalityQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['name'];
            if($nationality == $row['name']) {
                echo "' selected>";
            } 
            else {
                echo "'>";
            }
            echo $row['name'] . "</option>";
            
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض الجنسيات المسجلة');

    }
}


function getNewPatientsTable() {
    global $db,$errors,$id,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$createDate,$notesAssist,$team,$member,$diagnoseDate,$region;
    $query = "SELECT * FROM patients WHERE new_condition = 'YES' ORDER BY id DESC";
    if($result = $db->query($query)) {
        while($row = $result->fetch_assoc()) {
            patientDetails($row);
            $teamId = $row['team'];
            $memberId = $row['member'];
            $date = date('d/m/Y h:ma',strtotime($createDate));
            if(empty($team) && !teamHead() && !teamMember()){
                echo 
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
}

function getTransferedPatientsTable() {
    global $db,$errors,$id,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$createDate,$notesAssist,$team,$member,$diagnoseDate,$region;
    $query = "SELECT * FROM patients WHERE new_condition = 'YES' ORDER BY id DESC";
    if($result = $db->query($query)) {
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
}


function admin() {
    switch ($_SESSION['user_type']) {
        case '1':
            return true;
            break;
        default:
            return false;
            break;
    }

}
function assistant() {
    switch ($_SESSION['user_type']) {
        case '2':
            return true;
            break;
        default:
            return false;
            break;
    }
}
function control() {
    switch ($_SESSION['user_type']) {
        case '3':
            return true;
            break;
        default:
            return false;
            break;
    }
}

function infection() {
    switch ($_SESSION['user_type']) {
        case '4':
            return true;
            break;
        default:
            return false;
            break;
    }
}

function teamHead() {
    switch ($_SESSION['user_type']) {
        case '5':
            return true;
            break;
        default:
            return false;
            break;
    }
}

function teamMember() {
    switch ($_SESSION['user_type']) {
        case '6':
            return true;
            break;
        default:
            return false;
            break;
    }
}

function getTeamsSelect($team) {
    global $db,$errors;
    $getTeamQuery = "SELECT * FROM users WHERE user_type = '5'";
    echo "<option value=''";
    if($team == "" || empty($team)) {
        echo "selected>اختر</option>";
    }
    else {
        echo ">اختر</option>";
    }

    if($result = $db->query($getTeamQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'];
            if($team == $row['id']) {
                echo "' selected>";
            } 
            else {
                echo "'>";
            }
            if(!empty($row['first_name']) && !empty($row['last_name'])) {
                echo $row['first_name'] . " " . $row['last_name'] . "</option>";
            }
            else {
                echo $row['email'] . " " . "<span style='color:red;'>غير مفعل بعد</span>";
            }
                
        }     

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض الفرق المسجلة');

    }
}

function getMemberSelect($member) {
    global $db,$errors;
    $getMemberQuery = "SELECT * FROM users WHERE user_type = '6'";
    echo "<option value=''";
    if($member == "" || empty($member)) {
        echo "selected>اختر</option>";
    }
    else {
        echo ">اختر</option>";
    }

    if($result = $db->query($getMemberQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'];
            if($member == $row['id']) {
                echo "' selected>";
            } 
            else {
                echo "'>";
            }
            if(!empty($row['first_name']) && !empty($row['last_name'])) {
                echo $row['first_name'] . " " . $row['last_name'] . "</option>";
            }
            else {
                echo $row['email'] . " " . "<span style='color:red;'>غير مفعل بعد</span>";
            }
            
                
        }     

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض الأعضاء المسجلين');

    }
}

function getTeamTable() {
    global $db,$errors;
    $getTeamQuery = "SELECT * FROM users WHERE user_type = '5'";
    $getMemberQuery = "SELECT * FROM users WHERE user_type = '6'";
    $getPatientQuery = "SELECT * FROM patients";
    if($teamResult = $db->query($getTeamQuery)) {
        while($teamRow = $teamResult->fetch_assoc()) {
            $numOfMembers = $numOfPatients = 0;
            if($memberResult = $db->query($getMemberQuery)) {
                while($memberRow = $memberResult->fetch_assoc()) {
                    if($memberRow['team_id'] == $teamRow['id']) {
                        $numOfMembers++;
                    }
                }
            }
            if($patientResult = $db->query($getPatientQuery)) {
                while($patientRow = $patientResult->fetch_assoc()) {
                    if($patientRow['team'] == $teamRow['id']) {
                        $numOfPatients++;
                    }
                }
            }
            
            echo "<tr><td>" 
            . $teamRow['id']
            . "</td><td>"
            . $teamRow['first_name'] . " " . $teamRow['last_name']
            . "</td><td>" . $numOfMembers
            . "</td><td>" . $numOfPatients
            . "</td><td><a href='viewTeam?team_id=" 
            . $teamRow['id'] . "'>عرض</a></td></tr>";
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض الفرق المسجلة');
    }
}

function getTeamMembers($id) {
    global $db;
    $getTeamQuery = "SELECT * FROM users WHERE id = '$id'";
    $getMemberQuery = "SELECT * FROM users WHERE user_type = '6'";
    if($teamResult = $db->query($getTeamQuery)) {
        if($teamResult->num_rows == 1) {
            $teamRow = $teamResult->fetch_assoc();
        
            $numOfMembers = 0;
            if($memberResult = $db->query($getMemberQuery)) {
                while($memberRow = $memberResult->fetch_assoc()) {
                    if($memberRow['team_id'] == $teamRow['id']) {
                        $numOfMembers++;
                        echo "<li>" . $memberRow['first_name'] . " " . $memberRow['last_name'] . "</li>";
                        
                    }
                }
            }
        }
        else {
            header('location: /dashboard/teams.php');
        }

    }
    if($numOfMembers == 0) {
        echo "لا يوجد أعضاء";
    }
    
    
}

function getTeamInfo($id) {
    global $db,$teamRow,$numOfMembers;
    $getTeamQuery = "SELECT * FROM users WHERE id = '$id'";
    $getMemberQuery = "SELECT * FROM users WHERE user_type = '6'";
    $getPatientQuery = "SELECT * FROM patients WHERE team = '$id'";
    if($teamResult = $db->query($getTeamQuery)) {
        if($teamResult = $db->query($getTeamQuery)) {
            if($teamResult->num_rows == 1) {
                $teamRow = $teamResult->fetch_assoc();
                $numOfMembers = 0;
                $numOfPatients = 0;
                if($memberResult = $db->query($getMemberQuery)) {
                    while($memberRow = $memberResult->fetch_assoc()) {
                        if($memberRow['team_id'] == $teamRow['id']) {
                            $numOfMembers++;
                        }
                    }
                }
                if($patientResult = $db->query($getPatientQuery)) {
                    while($patientRow = $patientResult->fetch_assoc()) {
                        if($patientRow['team'] == $teamRow['id']) {
                            $numOfPatients++;
                        }
                    }
                }
            }
            else {
                header('location: teams.php');
            }
        }
    }
}

function mixDetails($row) {
    global $db,$patientIdM,$idM,$nameArM,$nameEnM,$nationalityM,$ageM,$contactNumM,$sexM,$relM,$nationalIdM,$symptomM,$notesM,
    $sampleDateM,$screeningM,$confirmatoryM,$otherNotesM,$regionM,$followUpTeamM,$lastExistM,$followUpResM,$followUpNotesM,$modesM,$interestM,
    $day1,$day2,$day3,$day4,$day5,$day6,$day7,$day8,$day9,$day10,$day11,$day12,$day13,$day14;

    $patientIdM = $row['patient_id'];
    $idM = $row['id'];
    $nameArM = $row['name_ar'];
    $nameEnM = $row['name_en'];
    $nationalityM = $row['nationality'];
    $ageM = $row['age'];
    $contactNumM = $row['contact_num'];
    $sexM = $row['sex'];
    $relM = $row['rel'];
    $nationalIdM = $row['national_id'];
    $symptomM = $row['symptom'];
    $notesM = $row['notes'];
    $sampleDateM = $row['sample_date'];
    $screeningM = $row['screening'];
    $confirmatoryM = $row['confirmatory'];
    $otherNotesM = $row['other_notes'];
    $regionM = $row['region'];
    $followUpTeamM = $row['follow_up_team'];
    $lastExistM = $row['last_exist'];
    $followUpResM = $row['follow_up_res'];
    $followUpNotesM = $row['follow_up_notes'];
    $modesM = $row['modes'];
    $interestM = $row['interest'];
    $days = $row['days'];

}
function deleteMix($id) {
    global $db,$success,$errors;
    $deleteQuery = "DELETE FROM mixs WHERE id = '$id'";
    if($db->query($deleteQuery)) {
        array_push($success,'تم حذف المخالط بنجاح');
    }
    else {
        die($db->error);
    }
}
function mixDetailsTest() {
    global $db,$idM,$patientIdM,$nameArM,$nameEnM,$nationalityM,$ageM,$contactNumM,$sexM,$relM,$nationalIdM,$symptomM,$notesM,
    $sampleDateM,$screeningM,$confirmatoryM,$otherNotesM,$regionM,$followUpTeamM,$lastExistM,$followUpResM,
    $followUpNotesM,$modesM,$interestM;


    $patientIdM = test($_POST['patientIdM']);
    if(isset($_POST['idM'])){
        $idM = test($_POST['idM']);
    }
    $nameArM = test($_POST['nameArM']);
    $nameEnM = test($_POST['nameEnM']);
    $nationalityM = test($_POST['nationalityM']);
    $ageM = test($_POST['ageM']);
    $contactNumM = test($_POST['contactNumM']);
    $sexM = test($_POST['sexM']);
    $relM = test($_POST['relM']);
    $nationalIdM = test($_POST['nationalIdM']);
    $symptomM = test($_POST['symptomM']);
    $notesM = test($_POST['notesM']);
    $sampleDateM =test( $_POST['sampleDateM']);
    $screeningM = test($_POST['screeningM']);
    $confirmatoryM = test($_POST['confirmatoryM']);
    $otherNotesM = test($_POST['otherNotesM']);
    $regionM = test($_POST['regionM']);
    $followUpTeamM = test($_POST['followUpTeamM']);
    $lastExistM = test($_POST['lastExistM']);
    $followUpResM = test($_POST['followUpResM']);
    $followUpNotesM = test($_POST['followUpNotesM']);
    $modesM = test($_POST['modesM']);
    $interestM = test($_POST['interestM']);
}
function getMixsTable() {
    global $mixsExist,$db,$errors,$patientIdM,$idM,$nameArM,$nameEnM,$nationalityM,$ageM,$contactNumM,$sexM,$relM,$nationalIdM,$symptomM,$notesM,
    $sampleDateM,$screeningM,$confirmatoryM,$otherNotesM,$regionM,$followUpTeamM,$lastExistM,$followUpResM,$followUpNotesM,$modesM,$interestM,
    $days;


    $query = "SELECT * FROM mixs ORDER BY id DESC";
    if($result = $db->query($query)) {
        if($result->num_rows != 0) {
            
            $mixsExist = true;
            
            while($row = $result->fetch_assoc()) {
                mixDetails($row);
                
                $confirmPatientQuery = "SELECT * FROM patients WHERE id = '$patientIdM'";
                if($patientResult = $db->query($confirmPatientQuery)) {
                    
                    if($patientResult->num_rows != 0) {
                        while($patientRow = $patientResult->fetch_assoc()) {
                            
                            $patientName = $patientRow['name_ar'];
                            $memberId = $patientRow['member'];
                            $teamId = $patientRow['team']; 
                            $contactsNum = $patientRow['contacts_num'];
                            $fortNum = $patientRow['fort_num'];
                            if(!teamMember() && !teamHead()) {
                                echo "<tr>
                                <td>$idM</td>
                                <td>$patientName</td>
                                <td>$patientIdM</td>
                                <td>$fortNum</td>
                                <td>$contactsNum</td>
                                <td>$nameArM</td>
                                <td>$nameEnM</td>
                                <td>$nationalityM</td>
                                <td>$ageM</td>
                                <td>$contactNumM</td>
                                <td>$sexM</td>
                                <td>$relM</td>
                                <td>$nationalIdM</td>
                                <td>$symptomM</td>
                                <td>$notesM</td>
                                <td>$sampleDateM</td>
                                <td>$screeningM</td>
                                <td>$confirmatoryM</td>
                                <td>$otherNotesM</td>
                                <td>$regionM</td>
                                <td>$followUpTeamM</td>
                                <td>$lastExistM</td>
                                <td>$followUpResM</td>
                                <td>$followUpNotesM</td>
                                <td>$modesM</td>
                                <td>$interestM</td>
                                <td><a href='days.php?mix_days_id=$idM'>عرض</a></td>
                                ";
                                if(!assistant()) {
                                    echo "<td><a href='mix.php?mix_id=$idM'>تعديل</a></td></tr>";
                                }
                                else {
                                    echo "</tr>";
                                }
                                
                            }
                        }
                        if(teamMember() || teamHead()) {
                            if($_SESSION['user_id'] == $memberId || $_SESSION['user_id'] == $teamId ) {
                                echo "<tr>
                                    <td>$idM</td>
                                    <td>$patientName</td>
                                    <td>$patientIdM</td>
                                    <td>$fortNum</td>
                                    <td>$contactsNum</td>
                                    <td>$nameArM</td>
                                    <td>$nameEnM</td>
                                    <td>$nationalityM</td>
                                    <td>$ageM</td>
                                    <td>$contactNumM</td>
                                    <td>$sexM</td>
                                    <td>$relM</td>
                                    <td>$nationalIdM</td>
                                    <td>$symptomM</td>
                                    <td>$notesM</td>
                                    <td>$sampleDateM</td>
                                    <td>$screeningM</td>
                                    <td>$confirmatoryM</td>
                                    <td>$otherNotesM</td>
                                    <td>$regionM</td>
                                    <td>$followUpTeamM</td>
                                    <td>$lastExistM</td>
                                    <td>$followUpResM</td>
                                    <td>$followUpNotesM</td>
                                    <td>$modesM</td>
                                    <td>$interestM</td>
                                    <td><a href='#'>عرض</a></td>
                                    <td><a href='mix.php?mix_id=$idM'>تعديل</a></td>                
                                    </tr>";
                            }
                        }
                    }
                }
                    
                
            }
        }
    }
    else {
        array_push($errors,"حدث خطأ أثناء عرض المخالطين");
    }
}

function mix() {
    global $db,$errors,$success,$patientIdM,$idM,$nameArM,$nameEnM,$nationalityM,$ageM,$contactNumM,$sexM,$relM,$nationalIdM,$symptomM,$notesM,
    $sampleDateM,$screeningM,$confirmatoryM,$otherNotesM,$regionM,$followUpTeamM,$lastExistM,$followUpResM,$followUpNotesM,$modesM,$interestM,$daysTable;
    mixDetailsTest();
    if(isset($_POST['mix_add'])) {
        if(!empty($patientIdM)) {
            $addMixQuery = "INSERT INTO mixs (patient_id,name_ar,name_en,nationality,age,contact_num,sex,rel,national_id,symptom,
            notes,sample_date,screening,confirmatory,other_notes,region,follow_up_team,last_exist,follow_up_res,follow_up_notes,modes,interest,`days`)
            VALUES ('$patientIdM','$nameArM','$nameEnM','$nationalityM','$ageM','$contactNumM','$sexM','$relM','$nationalIdM','$symptomM','$notesM',
            '$sampleDateM','$screeningM','$confirmatoryM','$otherNotesM','$regionM','$followUpTeamM','$lastExistM','$followUpResM',
            '$followUpNotesM','$modesM','$interestM','$daysTable')";
            if($db->query($addMixQuery)) {
                $id = $_GET['mix_id'] = $db->insert_id;
                array_push($success,"تم إضافة المخالط رقم $id بنجاح");
            }
            else {
                array_push($errors,$db->error);
            }
        }
        else {
            array_push($errors,"يجب اختيار رقم الحالة المؤكدة لإضافة مخالط جديد");  
        }
        

    }
    else if(isset($_POST['mix_edit'])) {
        $idM = test($_POST['idM']);
        $editMixQuery = "UPDATE mixs
                            SET
                            patient_id = '$patientIdM',
                            name_ar = '$nameArM',
                            name_en = '$nameEnM',
                            nationality = '$nationalityM',
                            age = '$ageM',
                            contact_num = '$contactNumM',
                            sex = '$sexM',
                            rel = '$relM',
                            national_id = '$nationalIdM',
                            symptom = '$symptomM',
                            notes = '$notesM',
                            sample_date = '$sampleDateM',
                            screening = '$screeningM',
                            confirmatory = '$confirmatoryM',
                            other_notes = '$otherNotesM',
                            region = '$regionM',
                            follow_up_team = '$followUpTeamM',
                            last_exist = '$lastExistM',
                            follow_up_res = '$followUpResM',
                            follow_up_notes = '$followUpNotesM',
                            modes = '$modesM',
                            interest = '$interestM'
                            WHERE id = '$idM' LIMIT 1";
        if($db->query($editMixQuery)) {
            array_push($success,"تم تعديل بيانات المخالط بنجاح");
        }
        else {
            die($db->error);
        }

    }

    else {
        die('حدث خطأ ما ، يرجي الرجوع الي المطور');
    }
}



function getMixSetting($idM) {
    global $db,$errors,$patientIdM,$nameArM,$nameEnM,$nationalityM,$ageM,$contactNumM,$sexM,$relM,$nationalIdM,$symptomM,$notesM,
    $sampleDateM,$screeningM,$confirmatoryM,$otherNotesM,$regionM,$followUpTeamM,$lastExistM,$followUpResM,$followUpNotesM,$modesM,$interestM,$mixExist;


    $getSettingQuery = "SELECT * FROM mixs WHERE id = '$idM' LIMIT 1";
    
    if($result = $db->query($getSettingQuery)) {
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            mixDetails($row);
            $mixExist = true;





        }
        else {
            array_push($errors,"لا يوجد مخالط بهذا الرقم");
            $mixExist = false;
        }
    }
    else {
        die($db->error);
    }
    $_POST['idM'] = $idM;
    
}

function getPatientSelect($patientIdM) {
    global $db,$errors;
    $getPatientQuery = "SELECT * FROM patients WHERE contacts_num != '' AND contacts_num != '0'";
    echo "<option value=''";
    if($patientIdM == "") {
        echo "selected>اختر</option>";
    } 
    else {
        echo ">اختر</option>";
    }

    if($result = $db->query($getPatientQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'];
            if($patientIdM == $row['id']) {
                echo "' selected>";
            } 
            else {
                echo "'>";
            }
            echo $row['id'] . "</option>";
            
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض المرضي المسجلين');

    }
}

function resetPass($email) {
    global $db,$errors,$success;
    if(empty($email)) {
        array_push($errors,"يرجي وضع البريد الالكتروني الخاص بك");
        return;
    }
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $db->query($checkEmailQuery);
    if($result->num_rows == 0) {
        array_push($errors,"هذا البريد الالكتروني غير مسجل لدينا");
    }
    else {
        $row = $result->fetch_assoc();
        $token = $row['reset_token'];
        $reseted = "UPDATE users SET reseted = 'NO' WHERE email = '$email'";
        $db->query($reseted) or die($db->error);

        //sending email
        $to = $email;
        $subject = "استعادة كلمة المرور";
        $secured = "";
        if($_SERVER['HTTPS'] != "off") {
            $secured = "https://";
        }
        else {
            $secured = "http://";
        }
        $domain = $secured . $_SERVER['HTTP_HOST'];
        $body = "<a href='$domain/account/resetPassword.php?reset_token=$token'>انشاء كلمة مرور جديدة</a>";
        $headers =
            'From: no-reply@'. $_SERVER['HTTP_HOST'] . "\r\n" .
            'Reply-To: info@'. $_SERVER['HTTP_HOST'] . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html;charset=UTF-8';

        $mail = mail($to,$subject,$body,$headers);
        if($mail) {
            array_push($success,"لقد تم ارسال البريد بنجاح");
        }
        else {
            array_push($errors,'لم يتم ارسال البريد الالكتروني');
        }
    }
}

function resetPassword($pass1,$pass2,$token) {
    global $db,$errors,$success;
    if(empty($pass1)) {
        array_push($errors,"يجب كتابة كلمة المرور");
    }
    if(empty($pass2)) {
        array_push($errors,"يجب تأكيد كلمة المرور");
    }
    if(strlen($pass1) < 6) {
        array_push($errors,'حجم كلمة المرور يجب أن يكون أكبر من 5 أحرف');
    }
    if($pass1 != $pass2) {
        array_push($errors,'كلمتي المرور غير متطابقتين');
    }
    
    //check if reseted
    $checkReseted = "SELECT * FROM users WHERE reset_token = '$token'";
    $result = $db->query($checkReseted) or die($db->error);
    if($result->num_rows != 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        if($row['reseted'] == "YES"){
            array_push($errors,"تم استعادة كلمة المرور بالفعل");
        }
    }
    else {
        array_push($errors,"يرجي الضغط علي استعادة كلمة المرور وارسال البريد مرة أخري");
    }
    if(count($errors) == 0) {
        $newToken = uniqid();
        $pass1 = md5($pass1);
        $updateQuery = "UPDATE users SET reseted = 'YES', `password` = '$pass1', reset_token = '$newToken' WHERE id = '$id';";
        if($db->query($updateQuery)) {
            array_push($success,"تم تحديث كلمة المرور بنجاح ، يمكنك تسجيل الدخول الأن");
        }
        else {
            array_push($errors,"حدث خطأ ما".$db->error);
        }
    }
}

function getAssistantTable() {
    global $db,$errors,$id,$nameAr,$nameEn,$fortNum,$followUpOfficer,$nationalId,$age,$nationality,$sex
    ,$contactNum,$f125,$f126,$contactsCon,$contactsNum,$pst,$notes,$addressWritten,$addressLink
    ,$contactsHome,$profession,$jobPlace,$jobManager,$jobDate,$otherPlaces,$workSyndrome,$travelDate
    ,$contactIs,$contactNameCity,$confirmRel,$hospitalName,$fortStatus,$morningRec,$takenProMo
    ,$nightRec,$takenProNi,$fortNumOther,$comeOut,$symptom,$fever,$shortBreathe,$sore,$cough,$headache
    ,$muscle,$diarrhea,$vomiting,$runnyNose,$blood,$chronic,$smoker,$contactSeq,$createDate,$notesAssist,$team,$member,$diagnoseDate,$region;
    $query = "SELECT * FROM patients WHERE new_condition = 'YES' ORDER BY id DESC";
    if($result = $db->query($query)) {
        while($row = $result->fetch_assoc()) {
            patientDetails($row);
            $teamId = $row['team'];
            $date = date('d/m/Y h:ma',strtotime($createDate));
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
            if(empty($teamName) || empty($fortNum) || empty($nameAr) || empty($nameEn)
            || empty($nationalId) || empty($nationality) || empty($region) || empty($addressWritten)
            || empty($contactsCon) || empty($profession) || empty($jobPlace) || empty($jobManager)
            || empty($contactsNum) || empty($otherPlaces)) {
                echo 
                "<tr><td>$id</td>
                <td>$teamName</td>
                <td>$date</td>
                <td>$fortNum</td>
                <td>$nameAr</td>
                <td>$nameEn</td>
                <td>$nationalId</td>
                <td>$nationality</td>
                <td>$region</td>
                <td>$addressWritten</td>
                <td>$contactsCon</td>
                <td>$profession</td>
                <td>$jobPlace</td>
                <td>$jobManager</td>
                <td>$contactsNum</td>
                <td>$otherPlaces</td>
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
}

function getDistrictSelect($region) {
    global $db,$errors;
    $getDistrictQuery = "SELECT * FROM districts";
    echo "<option value=''";
    if($region == "") {
        echo "selected>اختر</option>";
    } 
    else {
        echo ">اختر</option>";
    }

    if($result = $db->query($getDistrictQuery)) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['name'];
            if($region == $row['name']) {
                echo "' selected>";
            } 
            else {
                echo "'>";
            }
            echo $row['name'] . "</option>";
            
        }

    }
    else {
        array_push($errors,'حدثت مشكلة أثناء عرض الأحياء/ المناطق المسجلة');

    }
}

function showDays($mixDaysId) {
    global $db,$daysTable;
    $getDaysQuery = "SELECT `days` FROM mixs WHERE id = '$mixDaysId'";
    $result = $db->query($getDaysQuery);
    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $daysTable = $row['days'];
        echo $daysTable;
    }
}

function editDays($table,$id) {
    global $db,$success;
    $editQuery = "UPDATE mixs SET `days` = '$table' WHERE id = '$id'";
    $db->query($editQuery) or die($db->error);
}

//search functions




?>

