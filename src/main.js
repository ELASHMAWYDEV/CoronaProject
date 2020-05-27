$(document).ready(function () {
    //navbar
    console.log("Connected to Jquery");
    $('.burger-menu').click(function(){
        $('.sides').css({'right':'0'});
    });
    $('.closing-side').click(function() {
        $('.sides').css({'right':'-320px'});
    });


    //close alarms

    $('.closing-alarm').click(function(){
        $(this).parent().hide();
    });

    //confirm delete
    $('.del-confirm').click(function(){
        return confirm('هل أنت متأكد أنك تريد الحذف ؟');
    });

    //datepicker

    $('#datepicker').click(function(){
        $(this).datepicker({
            dateFormat: "dd/mm/yy"
        });
    });




    //days
    $('#days td select').on('change',function(){
        $(this).find('option').removeAttr('selected');
        $(this).find('option:selected').attr('selected','selected');
        var table = $('#table').html();
        var id = $('#mix_days_id').val();
        if($(this).val() == 'نعم') {
            $(this).css({'color':'#2ecc71'});
        }
        else if($(this).val() == 'لا') {
            $(this).css({'color':'#e74c3c'});
        }
        $.ajax({
            type: "POST",
            data: {edit_mix_days:'edit_mix_days',days:table,id:id},
            success: function () {
                console.log('تم الحفظ');
            }
        });
    
    });


    //search boxes
    $('#searchNewPatients input').on('keyup',function(){
        var nationalId = $("input[name='search_patient_national_id']").val();
        var patientId = $("input[name='search_patient_id']").val();
        var fortNum = $("input[name='search_patient_fort_num']").val();

        $.ajax({
            type: "GET",
            contentType: "html",
            url: 'search.php',
            data: {searchNewPatients:"searchNewPatients",nationalId:nationalId,patientId:patientId,fortNum:fortNum},
            success: function(output) {
                // output = $.parseHTML(output);
                console.log("Search Success" + output);
                $('#newPatients').html(output);
            }
        });
    });

    $('#searchTransferedPatients input').on('keyup',function(){
        var nationalId = $("input[name='search_transfered_national_id']").val();
        var patientId = $("input[name='search_transfered_id']").val();
        var fortNum = $("input[name='search_transfered_fort_num']").val();

        $.ajax({
            type: "GET",
            contentType: "html",
            url: 'search.php',
            data: {searchTransferedPatients:"searchTransferedPatients",nationalId:nationalId,patientId:patientId,fortNum:fortNum},
            success: function(output) {
                // output = $.parseHTML(output);
                console.log("Search Success" + output);
                $('#transferedPatients').html(output);
            }
        });
    });

   
    
    
    

});