<script type="text/javascript" src="<?php echo public_path('../../scripts/jquery/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo public_path('../../scripts/jquery/jquery-ui.min.js') ?>"></script>
<link href="<?php echo public_path('../../themes/orange/css/jquery/jquery-ui.css') ?>" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo public_path('../../scripts/jquery/jquery.validate.js') ?>"></script>
<link href="../../themes/orange/css/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo public_path('../../scripts/time.js') ?>"></script>
<script type="text/javascript" src="<?php echo public_path('../../scripts/jquery/jquery.simplemodal.js') ?>"></script>

<style>
    abc { color: #000; }
</style>
<?php $Halfday = "No" ?>

<div id="dialog" title="<?php echo __(" Applied Days "); ?>">
    <div id="test">


    </div>

</div>


<div class="formpage4col" >
    <div class="navigation">

    </div>
    <div id="status"></div>
    <div class="outerbox">
        <div class="mainHeading" ><h2 style="width: 550px;"><?php echo __("Apply Leave") ?></h2> </div>
        <div style="padding-left: 550px;"><a href="<?php echo url_for(public_path('../../symfony/web/index.php/Leave/Leave')."?eid=".$eNum) ?>"><?php echo __("My Leave Summary"); ?></a></div>
        <form name="frmSave" id="frmSave" method="post"  action="">
            <div class="leftCol">
                &nbsp;
            </div>
            <br class="clear"/>
            <div id="tabel2" style="float: right;padding-right:  40px; min-height: 200px; max-width: 350px;">
                <table class="data-table">
                    <thead>
                        <tr>
                            <td scope="col"><?php echo __("Leave Type"); ?></td>
                            <td scope="col"><?php echo __("Total Days"); ?></td>
                            <td scope="col"><?php echo __("Taken"); ?></td>
                            <td scope="col"><?php echo __("Pending"); ?></td>
                            <td scope="col"><?php echo __("Remaining"); ?></td>
                        </tr>
                    </thead>

                </table>

            </div>

            <div style="float: left;" >
                <div class="leftCol">
                    <label class="controlLabel" for="txtLocationCode"><?php echo __("Employee Name") ?></label>
                </div>
                <div class="centerCol" style="padding-top: 8px;">
                    <input type="text" name="txtEmployeeName" disabled="disabled" id="txtEmployee" value="<?php
if ($Culture == 'en') {
    $abcd = "getEmp_display_name";
} else {
    $abcd = "getEmp_display_name_" . $Culture;
}

if ($EData[0]->$abcd() == " ") {
    echo $EData[0]->getEmp_display_name();
} else {
    echo $EData[0]->$abcd();
} ?>" readonly="readonly"/>
                    <input type="hidden" name="txtEmpId" id="txtEmpId" value="<?php echo $eNum; ?>"/>&nbsp;
                </div>

                <br class="clear"/>

                <div class="leftCol" >
                    <label for="txtLocationCode"><?php echo __("Leave Year") ?><span class="required">*</span></label>
                </div>
                <div class="centerCol" style="padding-top: 8px;">

                    <select name="cmbYear" id="cmbYear"  style="width: 75px;" onchange="defaultdata();">
                        <option value=""><?php echo __("--Select--") ?></option>
                        <?php for ($i = 2010; $i < 2020; $i++) {
                        ?>
                               <option value="<?php echo $i ?>"><?php echo $i; ?></option>
                        <?php } ?>
                       </select>

                   </div>
                   <br class="clear"/>


                   <div class="leftCol" >
                       <label for="txtLocationCode" ><?php echo __("Designation") ?></label>
                   </div>
                   <div class="centerCol" style="padding-top: 8px;">
                       <input id="txtDesignation" type="text" name="txtDesignation" value="<?php
                           if ($Culture == 'en') {
                               $abc = "getName";
                           } else {
                               $abc = "getName_" . $Culture;
                           }

                           if ($EData[0]->jobTitle->$abc() == null) {
                               echo $EData[0]->jobTitle->getName();
                           } else {
                               echo $EData[0]->jobTitle->$abc();
                           }
                        ?>" >
                    <input type="hidden" name="txtDesignationId" id="txtDesignationId" value="<?php echo $EData[0]->getJob_title_code(); ?>"/>
                </div>
                <br class="clear"/>
                <div class="leftCol" >
                    <label for="txtLocationCode"><?php echo __("Department") ?></label>
                </div>
                <div class="centerCol" style="padding-top: 8px;">
                    <input id="txtDepartment" type="text" name="txtDepartment"  value="<?php
                           if ($Culture == 'en') {
                               $ab = "getTitle";
                           } else {
                               $ab = "getTitle_" . $Culture;
                           }

                           if ($EData[0]->subDivision->$ab() == null) {
                               echo $EData[0]->subDivision->getTitle();
                           } else {
                               echo $EData[0]->subDivision->$ab();
                           }
                        ?>" >
                    <input type="hidden" name="txtDepartmentId" id="txtDepartmentId" value="<?php echo $EData[0]->getWork_station(); ?>"/>
                </div>
                <br class="clear"/>
                <div class="leftCol" >
                    <label for="txtLocationCode"><?php echo __("Approving Person Name") ?></label>
                </div>
                <div class="centerCol" style="padding-top: 8px;">
                    <input id="txtActingPerson" type="text" name="txtActingPerson" value="<?php
                           //echo $Sup[0]['supervisorId'];
                           if ($Culture == 'en') {
                               $ad = "getEmp_display_name";
                           } else {
                               $ad = "getEmp_display_name_" . $Culture;
                           }

                           if ($ESupData[0]->$ad() == " ") {
                               echo $ESupData[0]->getEmp_display_name();
                           } else {
                               echo $ESupData[0]->$ad();
                           }
                        ?>" >
                    <input type="hidden" name="txtActingPersonId" id="txtActingPersonId" value="<?php echo $ESupData[0]->getEmp_number(); ?>"/>
                </div>
                <br class="clear"/>
                <div class="leftCol" >
                    <label class=""><?php echo __("Leave Type Name") ?><span class="required">*</span></label>
                </div>
                <div id="divcmblt" class="centerCol" style="padding-top: 8px;">

                    <select name="cmbbtype" id="cmbbtype"  style="width: 160px;" onchange="getbenfittype(this.value);">
                        <option value=""><?php echo __("--Select--") ?></option>
                        <?php foreach ($EntDisplay as $ED) {
                        ?>
                               <option value="<?php echo $ED['leave_type_id']; ?>" <?php if ($cmbbtId == $ED['leave_type_id']

                                   )echo "selected"; ?>>
                                    <?php foreach ($loadbtype as $btype) {
                                    ?>
                                    <?php
                                        if ($btype->getLeave_type_id() == $ED['leave_type_id']) {
                                            if ($Culture == 'en') {
                                                echo $btype->getLeave_type_name();
                                            } elseif ($Culture == 'si') {
                                                if (($btype->getLeave_type_name_si()) == null) {
                                                    echo $btype->getLeave_type_name();
                                                } else {
                                                    echo $btype->getLeave_type_name_si();
                                                }
                                            } elseif ($Culture == 'ta') {
                                                if (($btype->getLeave_type_name_ta()) == null) {
                                                    echo $btype->getLeave_type_name();
                                                } else {
                                                    echo $btype->getLeave_type_name_ta();
                                                }
                                            }
                                        }
                                    ?>  <?php } ?></option>
                        <?php } ?>
                            </select>
                        </div>
                        <br class="clear"/>
                        <div class="leftCol" >
                            <label for="txtLocationCode" ><?php echo __("Leave Start Date") ?><span class="required">*</span></label>
                        </div>
                        <div class="centerCol" style="padding-top: 8px;">
                            <input id="txtLeaveStartDate" type="text" name="txtLeaveStartDate" value="<?php //echo $extfdate;   ?>" onchange="txtenable(this.value);">
                        </div>
                        <br class="clear"/>
                        <div id="DIVEDAY" style=" width: 350px;">
                            <div class="leftCol" >
                                <label for="txtLocationCode"><?php echo __("Leave End Date") ?><span class="required">*</span></label>
                            </div>
                            <div class="centerCol" style="padding-top: 8px;">
                                <input id="txtLeaveEndDate" type="text" name="txtLeaveEndDate" value="<?php //echo $extfdate;   ?>" onchange="getday($('#txtLeaveStartDate').val(),this.value);">
                            </div>
                            <br class="clear"/>
                        </div>
                        <div class="leftCol" >
                            <label for="txtLocationCode"><?php echo __("Number of Days Applied") ?></label>
                        </div>
                        <div class="centerCol" style="padding-top: 8px;color: #000; width: 210px;">
                            <input id="txtnofodays" type="text" name="txtnofodays" value="<?php //echo $extfdate;   ?>" readonly="readonly">
                            <a style="padding-top: 10px;margin-left:5px;width: 20px;" href="#" onclick="jQuery('#dialog').dialog('open'); return false"><?php echo __("Details."); ?></a>
                        </div>
                        <br class="clear"/>
                        <div class="leftCol" >
                            <label for="txtLocationCode"><?php echo __("Leave Reason") ?><span class="required">*</span></label>
                        </div>
                        <div class="centerCol" style="padding-top: 8px;">

                            <select name="cmbLeaveReason" id="cmbLeaveReason"  style="width: 160px;">
                                <option value=""><?php echo __("--Select--") ?></option>
                                <option value="1"><?php echo __("Sick"); ?></option>
                                <option value="2"><?php echo __("Alms Giving"); ?></option>
                                <option value="3"><?php echo __("Funeral"); ?></option>
                                <option value="4"><?php echo __("Study"); ?></option>
                                <option value="5"><?php echo __("Personal"); ?></option>

                            </select>
                        </div>
                        <div id="DIVHD">
                            <br class="clear"/>
                            <div class="leftCol" >
                                <label for="txtLocationCode"><?php echo __("HalfDay Session") ?><span class="required">*</span></label>
                            </div>
                            <div class="centerCol" style="padding-top: 8px;">

                                <select name="cmbHalfDay" id="cmbHalfDay"  style="width: 160px;">
                                    <option value=""><?php echo __("--Select--") ?></option>
                                    <option value="1"><?php echo __("Morning"); ?></option>
                                    <option value="2"><?php echo __("Evening"); ?></option>
                                </select>
                            </div>
                        </div>

                        <br class="clear"/>
                        <div id="RDIV">
                            <div class="leftCol" id="lblACT">
                                <label class="controlLabel" for="txtLocationCode"><?php echo __("Acting Person") ?> <span class="required">*</span></label>
                            </div>
                            <div class="centerCol" style="padding-top: 8px;">
                                <input type="text" name="txtAppEmployee" disabled="disabled" id="txtAppEmployee" value="<?php echo $empfname; ?>" readonly="readonly"/>
                                <input type="hidden" name="txtAppEmpId" id="txtAppEmpId" value="<?php echo $etid; ?>"/>&nbsp;

                            </div>
                            <div class="centerCol" style="padding-top: 8px;width: 30px;">
                                <input class="button" type="button" value="..." id="empRepPopBtn" name="empRepPopBtn" <?php echo $disabled; ?> />
                            </div>
                            <br class="clear"/>
                        </div>
                        <input type="hidden" name="txtApproved" id="txtApproved" value="1"/>&nbsp;
                        <div class="leftCol" style="width: 150px;">
                            <label for="txtLocationCode"><?php echo __("Comments") ?> </label>
                        </div>
                        <div class="centerCol" style="margin-top: 5px;">
                            <textarea style="margin-left: 0px;margin-top: 5px;"  id="txtComments" name="txtComments" value=""></textarea>
                        </div>
                        <br class="clear"/>
                    </div>
                    <input type="hidden" value="" id="Hdate" name="Hdate" />
                    <input type="hidden" value="" id="datedetails" name="datedetails" />
                    <br class="clear"/>
                    <div class="formbuttons">
                        <input type="button" class="savebutton" id="editBtn"

                               value="<?php echo __("Save") ?>" tabindex="8" />
                        <input type="button" class="clearbutton"  id="resetBtn"
                               value="<?php echo __("Reset") ?>" tabindex="9" />
                        <input type="button" class="backbutton" id="btnBack"
                               value="<?php echo __("Back") ?>" tabindex="10" />
                    </div>

                </form>
            </div>
            <div class="requirednotice"><?php echo __("Fields marked with an asterisk") ?><span class="required"> * </span> <?php echo __("are required") ?></div>
            <br class="clear" />
        </div>

<?php
                                require_once '../../lib/common/LocaleUtil.php';
                                $sysConf = OrangeConfig::getInstance()->getSysConf();
                                $sysConf = new sysConf();
                                $inputDate = $sysConf->dateInputHint;
                                $format = LocaleUtil::convertToXpDateFormat($sysConf->getDateFormat());
?>

<script type="text/javascript">
    var StartDate;
    var valid=false;
    var halfday;
    var DisplayDate;
    var myArray= new Array();
    var sequre;
    var noofdays;

    function AjaxADateConvert(date){

        var day;
        $.ajax({
            type: "POST",
            async:false,
            url: "<?php echo url_for('Leave/AjaxADateConvert') ?>",
            data: { date: date },
            dataType: "json",
            success: function(data){day = data.date;}
        });
        return day;
    }

    function AjaxADateConvertSet(date){

        var day;
        $.ajax({
            type: "POST",
            async:false,
            url: "<?php echo url_for('Leave/AjaxADateConvertSet') ?>",
            data: { date: date },
            dataType: "json",
            success: function(data){day = data.date;}
        });
        return day;
    }



    function defaultdata(){
        if($('#txtEmpId').val()==""){
            alert("<?php echo __("Please select employee"); ?>");
            return false;
        }
        if($('#cmbYear').val()==""){
            alert("<?php echo __("Please select Year"); ?>");
            return false;
        }
        var eid = $('#txtEmpId').val();
        var year = $('#cmbYear').val();

        $.post(

        "<?php echo url_for('Leave/EmpData') ?>", //Ajax file

        { eid: eid, year: year},

        function(data){
            $('#txtDesignation').val(data.Designation);
            $('#txtDepartment').val(data.Department);
            $('#txtActingPerson').val(data.Supervisor);

        },
        "json"

    );





        $.post(

        "<?php echo url_for('Leave/DefaultLeavedetails') ?>", //Ajax file

        { eid: eid, year: year},

        function(data){
            if(data.entitle=="|"){
                alert("<?php echo __("Employee does not Entitled for Leave Year : "); ?>"+year);
                return false;
            }
            $('#tabel2').val("");
            $('#divcmblt').val("");
            var cmblt="<select name='cmbbtype' id='cmbbtype'  style='width: 160px;' onchange='getbenfittype(this.value);'>";
            cmblt+="<option value=''><?php echo __("--Select--") ?></option>";


            var tabel="<table class='data-table' >";
            tabel+="<thead><tr><td scope='co'><?php echo __("Leave Type"); ?></td>";
            tabel+="<td scope='col'><?php echo __("Total Days"); ?></td>";
            tabel+="<td scope='col'><?php echo __("Taken"); ?></td>";
            tabel+="<td scope='col'><?php echo __("Pending"); ?></td>";
            tabel+="<td scope='col'><?php echo __("Remaining"); ?></td>";
            tabel+="</tr></thead>";
            var row=0;
            var cssClass;
            $.each(data.entitle, function(key,value) {
                cssClass = (row % 2) ? 'even' : 'odd';
                row = row + 1;

                tabel+="<tr class="+cssClass+" >";
                $.each(value, function(key,value) {


                    if(key=='leave_type_id'){
                        tabel+="<td class='' style='width: 100px; '>";
                        "<?php foreach ($loadbtype as $btype) {
 ?>"

                            var btid="<?php echo $btype->getLeave_type_id(); ?>";
                            //alert(value);
                            if(value == btid){
                                var btname="<?php
        if ($Culture == 'en') {
            echo $btype->getLeave_type_name();
        }
?>";
                                var btnamesi="<?php
        if ($Culture == 'si') {
            if (($btype->getLeave_type_name_si()) == null) {
                echo $btype->getLeave_type_name();
            } else {
                echo $btype->getLeave_type_name_si();
            }
        }
?>";
                                var btnameta="<?php
        if ($Culture == 'ta') {
            if (($btype->getLeave_type_name_ta()) == null) {
                echo $btype->getLeave_type_name();
            } else {
                echo $btype->getLeave_type_name_ta();
            }
        }
?>";
                            } "<?php } ?>"
                        var cul="<?php echo $Culture; ?>";
                        if(cul=='en'){
                            tabel+=btname;
                            cmblt+="<option value="+value+">"+btname+"</option>";
                        }else if(cul=='si'){
                            tabel+=btnamesi;
                            cmblt+="<option value="+value+">"+btnamesi+"</option>";
                        }else{
                            tabel+=btnameta;
                            cmblt+="<option value="+value+">"+btnameta+"</option>";
                        }
                        tabel+="</td>";
                    }

                    if(key=='leave_ent_day'){
                        tabel+="<td class='' style='text-align: center'>"+value+"</td>";
                    }
                    if(key=='leave_ent_taken'){
                        tabel+="<td class='' style='text-align: center'>"+value+"</td>";
                    }
                    if(key=='leave_ent_sheduled'){
                        tabel+="<td class='' style='text-align: center'>"+value+"</td>";
                    }
                    if(key=='leave_ent_remain'){
                        tabel+="<td class='' style='text-align: center'>"+value+"</td>";
                    }



                });
                tabel+="</tr>";

            });
            cmblt+="</select>";
            tabel+="</table>";
            $('#tabel2').html(tabel);
            $('#divcmblt').html(cmblt);
            $('#tabel2').show();
            $('#tabel1').show();
            $('#divbtn').hide();
            $('#editBtn').show();
            buttonSecurityCommon(null,"editBtn",null,null);
        },
        "json"

    );
    }




    function calclick(id){
        var j;
        var tot=0;
        for(j=0; j<id; j++ ){
            if($('#sel'+j).val()=="1"){
                tot+=1;
            }
            if($('#sel'+j).val()=="2"){
                tot+=0.5;
            }
            if($('#sel'+j).val()=="3"){
                tot+=0.5;
            }
            myArray[j]=$('#lbl'+j).val()+"|"+$('#sel'+j).val();
        }

        $('#datedetails').val(myArray);

        var bConfirmed = confirm("<?php echo __("Applied leave amount : ") ?>"+tot);
        if (bConfirmed){
            $('#txtnofodays').val(tot);
            $('#dialog').dialog('close');


        }else{
            return false;
        }


    }

    function dateformat(date){

        var day;
        $.ajax({
            type: "POST",
            async:false,
            url: "<?php echo url_for('Leave/FormatDates') ?>",
            data: { date: date },
            dataType: "json",
            success: function(data){day = data;}
        });


        return day;
    }
    function toTimestamp(strDate){
        var datum = Date.parse(strDate);
        return datum/1000;
    }
    function getbenfittype(id){
        $('#txtnofodays').val("");
        $('#txtLeaveEndDate').hide(500);
        $.post(

        "<?php echo url_for('Leave/AjaxLeaveValidation') ?>", //Ajax file

        { id: id },

        function(data){
            halfday="no";
            $('#txtLeaveStartDate').val("");
            $('#txtLeaveEndDate').val("");
            if(data.Cemp == 1){
                $('#RDIV').show();
                $('#RDIV :input').removeAttr('disabled');
            }else{
                $('#RDIV :input').attr('disabled', true);
                $('#RDIV').hide();
            }
            noofdays=data.noofdays;
            if(data.Ahfd == 1){
    <?php $Halfday = "yes"; ?>
                halfday="yes";
            }else{

                $('#DIVHD :input').attr('disabled', true);
                $('#DIVHD').hide();
                $('#DIVEDAY :input').attr('disabled');
                $('#DIVEDAY').show();
            }

            if(data.Napp != 1){
                $('#txtApproved').val('2');
            }else{
                $('#txtApproved').val('1');
            }

            StartDate = data.NAB;


        },
        "json"

    );

    }


    function txtenable(id){
        var LType=$('#cmbbtype').val();
        if($('#cmbbtype').val()!= null){
            LType =$('#cmbbtype').val();
        }
        if($('#txtLeaveStartDate').val()!= null){
            $('#txtLeaveEndDate').show(500);
            $('#txtLeaveEndDate').val('');

        }

        $('#txtLeaveEndDate').removeAttr('disabled');

    }
    function getday(SDate,EDate){
        var LType=$('#cmbbtype').val();
        if($('#cmbbtype').val()!= null){
            LType =$('#cmbbtype').val();
        }
        if($('#txtLeaveStartDate').val()!=null &&  $('#txtLeaveEndDate').val()!=null){

            var d = Date.parse(AjaxADateConvert($('#txtLeaveStartDate').val()));
            var Da=new Date(d);
            var SDate= AjaxADateConvert($('#txtLeaveStartDate').val());
            var EDate= AjaxADateConvert($('#txtLeaveEndDate').val());
            var eD=new Date(EDate);
            var HD;
            var CHD;
            var LeaveDays=0;
            var eid = $("#txtEmpId").val();
            $.post(

            "<?php echo url_for('Leave/AjaxLeaveHolydayValidation') ?>", //Ajax file

            { SDate: SDate, EDate: EDate, LType : LType, Eid : eid },

            function(data){
                if(data.ENDDate != null){
                    $('#txtLeaveEndDate').val(AjaxADateConvertSet(data.ENDDate));
                }
                if(data.NDays == 0){
                    alert("<?php echo __("This is a Holiday"); ?>");
                    $('#txtLeaveStartDate').val('');
                    $('#txtLeaveEndDate').val('');
                    $('#txtnofodays').val('');
                    valid=false;
                }
                if(data.NDays == -1){
                    alert("<?php echo __("Invalid End Date"); ?>");
                    $('#txtLeaveStartDate').val('');
                    $('#txtLeaveEndDate').val('');
                    $('#txtnofodays').val('');
                    valid=false;

                }else if(((data.NDays==1) && (data.LDays == 1))||((data.NDays==1) && (data.LDays == 0.5))){
                    alert("<?php echo __("This is a Holiday"); ?>");
                    $('#txtLeaveStartDate').val('');
                    $('#txtLeaveEndDate').val('');
                    $('#txtnofodays').val('');
                    valid=false;

                }else if(data.Range=="invalid"){
                    alert("<?php echo __("Already applied for Leave"); ?>");
                    $('#txtLeaveStartDate').val('');
                    $('#txtLeaveEndDate').val('');
                    $('#txtnofodays').val('');
                    valid=false;

                }else if(data.LBal== "0"){
                    alert("<?php echo __("You Don't Have Enough Leave Balance"); ?>");
                    $('#txtLeaveStartDate').val('');
                    $('#txtLeaveEndDate').val('');
                    $('#txtnofodays').val('');
                    valid=false;

                }else if(data.LBal<data.NDays){
                    alert("<?php echo __("You Don't Have Enough Leave Balance"); ?>");
                    $('#txtLeaveStartDate').val('');
                    $('#txtLeaveEndDate').val('');
                    $('#txtnofodays').val('');
                    valid=false;
                }else{
                    $('#txtnofodays').val(data.NDays);
                    //----------------


                    var strdate = AjaxADateConvert($('#txtLeaveStartDate').val());
                    var enddate = AjaxADateConvert($('#txtLeaveEndDate').val());
                    $.post(

                    "<?php echo url_for('Leave/Dates') ?>", //Ajax file

                    { SDate: strdate, EDate: enddate},

                    function(data1){

                        strdate = data1.sdate;
                        enddate = data1.edate;

                        var dhtmlday="";
                        var i = 0;
                        var row = 0;
                        var cssClass;
                        dhtmlday+="<table class='data-table'><THEAD><tr><td scope='col'><?php echo __("Date"); ?></td><td scope='col'><?php echo __("Leave"); ?></td><tr/></THEAD>";
                        while(strdate <= enddate){
                            var tt=null;
                            cssClass = (row % 2) ? 'even' : 'odd';
                            row = row + 1;


                            $.each(data.LeaveDays, function(key,value) {

                                if((value-5000000000)>0){
                                    if(strdate == (value-5000000000)){
                                        tt=1;
                                        DisplayDate = dateformat(strdate);
                                        dhtmlday+="<tr style='background-color:#E8E687;'><td class='' width='200px;' hight='10px;'>"+DisplayDate+"<input type='hidden' name='lbl"+i+"' id='lbl"+i+"' value="+DisplayDate+"/></td><td class='' width='100px;'><select  id='sel"+i+"'><option value='2'><?php echo __("First Half"); ?></option></select></td></tr>";
                                    }
                                }
                                if((value-5100000000)>0){
                                    if(strdate == (value-5100000000)){
                                        tt=1;
                                        DisplayDate = dateformat(strdate);
                                        dhtmlday+="<tr style='background-color:#F59C5D;'><td class='' width='200px;' hight='10px;'>"+DisplayDate+"<input type='hidden' name='lbl"+i+"' id='lbl"+i+"' value="+DisplayDate+"/></td><td class='' width='100px;'><select  id='sel"+i+"'><option value='2'><?php echo __("First Half"); ?></option></select></td></tr>";
                                    }
                                }
                                if(strdate == value){
                                    tt=1;
                                    DisplayDate = dateformat(strdate);
                                    dhtmlday+="<tr style='background-color:#F59C5D;' ><td class='' colspan='2''>"+DisplayDate+" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo __("Holiday"); ?></td></tr>";

                                }

                            });

                            if(tt!=1){

                                DisplayDate = dateformat(strdate);
                                dhtmlday+="<tr class="+cssClass+"><td class='' width='200px;' hight='10px;'>"+DisplayDate+"<input type='hidden' name='lbl"+i+"' id='lbl"+i+"' value="+DisplayDate+"/></td><td class='' width='100px;'><select  id='sel"+i+"'><option value='1'><?php echo __("FullDay"); ?></option>";
                                if(halfday=="yes"){
                                    dhtmlday+="<option value='2'><?php echo __("First Half"); ?></option>";
                                    dhtmlday+="<option value='3'><?php echo __("Second Half"); ?></option>";
                                }
                                dhtmlday+="</select></td></tr>";
                            }


                            strdate=strdate+86400;
                            i+=1;
                        }
                        sequre=i;
                        dhtmlday+="</table> <br> <input type='button' class='backbutton' id='btncal'value='<?php echo __("OK") ?>' onclick='calclick("+i+")'>";
                        $('#test').html(dhtmlday);
                    },
                    "json"

                );
                    jQuery("#dialog").dialog({

                        bgiframe: true, autoOpen: false, position: 'top', minWidth:300, maxWidth:300, modal: true
                    });



                    //-------------
                }

            },
            "json"

        );
        }


    }


    function SelectEmployee(data){
        //alert(data);
        var Enum="<?php echo$EData[0]->getEmp_number(); ?>";

        myArr = data.split('|');
        if(myArr[0] == Enum){
            alert("<?php echo __("Invalid Acting Person") ?>")
        }else{


            var sdate = AjaxADateConvert($('#txtLeaveStartDate').val());
            var edate = AjaxADateConvert($('#txtLeaveEndDate').val());

            if(edate=="" && sdate==""){
                alert("<?php echo __("Please Select Leave Start Date & End Date") ?>");
                return false;
            }else{
                $.post(

                "<?php echo url_for('Leave/AjaxLeavecoveringEmployee') ?>", //Ajax file

                { eid: myArr[0], sdate: sdate, edate: edate },

                function(data){
                    if(data == "invalid"){
                        alert("<?php echo __("Acting Person is on Leave, Select Another Person") ?>");
                        $("#txtAppEmpId").val("");
                        $("#txtAppEmployee").val("");
                        return false;
                    }else{
                        $("#txtAppEmpId").val(myArr[0]);
                        $("#txtAppEmployee").val(myArr[1]);
                    }

                },
                "json"

            );
            }
        }
        // LoadCurrentDep();
    }
    $(document).ready(function() {
        buttonSecurityCommon(null,"editBtn",null,null);

        $('#dialog').hide();
        "<?php $cc = getdate(); ?>"
        var thisyear="<?php echo $cc['year']; ?>";
        $("#cmbYear").val(thisyear);
        defaultdata();

        $('#txtLeaveEndDate').hide(500);
        $('#txtLeaveEndDate').attr('disabled', true);
        //$('#RDIV').hide();
        $('#RDIV :input').attr('disabled', true);
        $('#RDIV').hide();
        $('#DIVHD :input').attr('disabled', true);
        $('#DIVHD').hide();
        $('#txtLeaveStartDate').focusout(function() {
            if($('#cmbbtype').val()==""){
                alert("<?php echo __("Please Select the Leave Type "); ?>");
                $('#cmbbtype').focus();
                $('#txtLeaveStartDate').val('');
                $("#txtLeaveStartDate").datepicker("hide");
                $('#txtLeaveEndDate').hide(500);
            }

        });
        $('#empRepPopBtn').click(function() {

            var popup=window.open('<?php echo public_path('../../symfony/web/index.php/pim/searchEmployee?type=single&method=SelectEmployee'); ?>','Locations','height=450,width=800,resizable=1,scrollbars=1');

            if(!popup.opener) popup.opener=self;
            popup.focus();
        });

        jQuery.validator.addMethod("orange_date",
        function(value, element, params) {

            //var hint = params[0];
            var format = params[0];

            // date is not required
            if (value == '') {

                return true;
            }
            var d = strToDate(value, "<?php echo $format ?>");


            return (d != false);

        }, ""
    );

        //Validate the form
        $("#frmSave").validate({

            rules: {

                txtEmpId: { required: true},
                cmbbtype: { required: true},
                txtAppEmpId: {required: true },
                cmbHalfDay: {required: true },
                txtLeaveStartDate: { required: true ,orange_date:true},
                txtLeaveEndDate: { required: true ,orange_date:true},
                txtEntitleDays: {required: true, number: true },
                txtEnTakenDays: {required: true, number: true },
                cmbLeaveReason: { required: true},
                txtnofodays: { number: true },
                txtComments:{noSpecialCharsOnly: true, maxlength:200 }
            },
            messages: {
                txtEmpId: "<?php echo __("This is required ") ?>",
                cmbLeaveReason: "<?php echo __("This is required ") ?>",
                txtAppEmpId: "<?php echo __("This is required ") ?>",
                cmbHalfDay: "<?php echo __("This is required ") ?>",
                cmbbtype: { required:"<?php echo __("Leave Type is required ") ?>"},
                txtLeaveStartDate: {required:"<?php echo __("Please Enter Date") ?>",orange_date: "<?php echo __("Please specify valid date") ?>"},
                txtLeaveEndDate: {required:"<?php echo __("Please Enter Date") ?>",orange_date: "<?php echo __("Please specify valid date") ?>"},
                txtnofodays: "<?php echo __("Date Range Wrong ") ?>",
                txtComments:{maxlength:"<?php echo __("Maximum 200 Characters") ?>",noSpecialCharsOnly:"<?php echo __("Special Characters are not allowed") ?>"}
            }
        });

        // When click edit button
        $("#editBtn").click(function() {

            if(($('#txtLeaveStartDate').val()!= "") && (StartDate !=="0")){//alert("dfd");
                if(StartDate > AjaxADateConvert($('#txtLeaveStartDate').val())){
                    //alert("<?php echo __("This Leave type is Need to Apply Before, Therefore Leave Start Date should be") ?>"+StartDate);
                    alert("<?php echo __("You need to apply for leave at least ") ?>"+noofdays+"<?php echo __(" Days prior to Leave start date.") ?>");
                    $('#txtnofodays').val("");
                    $('#txtLeaveEndDate').val("");
                    $('#txtLeaveStartDate').val("");
                    $('#txtLeaveEndDate').hide(500);

                }else{
                    var uval=calclick(sequre);
                    if(uval!=false){
                        $('#frmSave').submit();
                    }
                }
            }else{
                var uval=calclick(sequre);
                if(uval!=false){
                    $('#frmSave').submit();
                }
            }
        });

        //When click reset buton
        $("#resetBtn").click(function() {
            location.href = "<?php echo url_for(public_path('../../symfony/web/index.php/Leave/SaveLeave')) ?>";
        });

        //When Click back button
        $("#btnBack").click(function() {
            location.href = "<?php echo url_for(public_path('../../symfony/web/index.php/Leave/Leave')) ?>";
        });

        $("#txtLeaveStartDate").datepicker({ dateFormat:'<?php echo $inputDate; ?>' });
        $("#txtLeaveEndDate").datepicker({ dateFormat:'<?php echo $inputDate; ?>' });

    });
</script>
