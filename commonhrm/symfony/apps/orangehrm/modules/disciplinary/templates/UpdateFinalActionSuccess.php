<?php
if ($lockMode == '1') {
    $editMode = false;
    $disabled = '';
} else {
    $editMode = true;
    $disabled = 'disabled="disabled"';
}
$encrypt = new EncryptionHandler();
?>
<script type="text/javascript" src="<?php echo public_path('../../scripts/jquery/jquery.validate.js') ?>"></script>
<div class="formpage4col">
    <div class="navigation">


    </div>
    <div id="status"></div>
    <div class="outerbox">
        <div class="mainHeading"><h2><?php echo __("Edit Final Action") ?></h2></div>
        <form name="frmSave" id="frmSave" method="post"  action="">
            <?php echo message() ?>
            <?php echo $form['_csrf_token']; ?>
            <div class="leftCol">
                &nbsp;
            </div>
            <div class="centerCol">
                <label class="languageBar"><?php echo __("English") ?></label>
            </div>
            <div class="centerCol">
                <label class="languageBar"><?php echo __("Sinhala") ?></label>
            </div>
            <div class="centerCol">
                <label class="languageBar"><?php echo __("Tamil") ?></label>
            </div>
            <br class="clear"/>
            <div class="leftCol">
                <label for="txtLocationCode"><?php echo __("Final Action Code") ?> <span class="required">*</span></label>
            </div>
            <div class="centerCol">
                <input style="margin-left: 10px; margin-top: 8px;" id="txtCode"  name="txtCode"  type="text" maxlength="10" value="<?php echo $FinalActionlist->dis_fna_usercode ?>"/>
            </div>
            <br class="clear"/>
            <div class="leftCol">
                <label for="txtLocationCode"><?php echo __("Description") ?> </label>
                <input name="txtbtid" type="hidden" value="<?php echo $FinalActionlist->dis_fna_code ?>"/>
            </div>
            <div class="centerCol">
                <textarea id="txtJobTitleDesc" class="formTextArea" tabindex="1" name="txtName" type="text"><?php echo $FinalActionlist->dis_fna_name ?></textarea>
            </div>
            <div class="centerCol">
                <textarea id="txtJobTitleDesc" class="formTextArea" tabindex="2" name="txtNamesi" type="text"><?php echo $FinalActionlist->dis_fna_name_si ?></textarea>
            </div>
            <div class="centerCol">
                <textarea id="txtJobTitleComments" class="formTextArea" tabindex="3" name="txtNameta" type="text"><?php echo $FinalActionlist->dis_fna_name_ta ?></textarea>
            </div>
                        <br class="clear"/>
                        <div class="leftCol" >
                            <label for="txtLocationCode"><?php echo __("Type") ?><span class="required">*</span></label>
                        </div>
                        <div class="centerCol" style="padding-top: 8px; margin-left: 10px;">

                            <select name="cmbType" id="cmbType"  style="width: 160px;">
                                <option value=""><?php echo __("--Select--") ?></option>
                                <option value="1" <?php if($FinalActionlist->dis_fna_type== 1 ) echo "selected"; ?>><?php echo __("Major"); ?></option>
                                <option value="0" <?php if($FinalActionlist->dis_fna_type== 0 ) echo "selected"; ?>><?php echo __("Minor"); ?></option>
                            </select>
                        </div>
            <br class="clear"/>

        </form>



        <div class="formbuttons">
            <input type="button" class="<?php echo $editMode ? 'editbutton' : 'savebutton'; ?>" name="EditMain" id="editBtn"
                   value="<?php echo $editMode ? __("Edit") : __("Save"); ?>"
                   title="<?php echo $editMode ? __("Edit") : __("Save"); ?>"
                   onmouseover="moverButton(this);" onmouseout="moutButton(this);"/>
            <input type="reset" class="clearbutton" id="btnClear" tabindex="5"
                   onmouseover="moverButton(this);" onmouseout="moutButton(this);"	<?php echo $disabled; ?>
                   value="<?php echo __("Reset"); ?>" />
            <input type="button" class="backbutton" id="btnBack"
                   value="<?php echo __("Back") ?>" tabindex="18"  onclick="goBack();"/>
        </div>

    </div>
    <div class="requirednotice"><?php echo __("Fields marked with an asterisk") ?><span class="required"> * </span> <?php echo __("are required") ?></div>
    <br class="clear" />
</div>

<script type="text/javascript">

    $(document).ready(function() {
        buttonSecurityCommon("null","null","editBtn","null");


<?php if ($editMode == true) { ?>
                              $('#frmSave :input').attr('disabled', true);
                              $('#editBtn').removeAttr('disabled');
                              $('#btnBack').removeAttr('disabled');
<?php } ?>

                       //Validate the form
                       $("#frmSave").validate({

            rules: {
                txtCode: { required: true },
                cmbType: { required: true },
                txtName: { required: true,noSpecialCharsOnly: true, maxlength:100 },
                txtNamesi: {noSpecialCharsOnly: true, maxlength:100 },
                txtNameta: {noSpecialCharsOnly: true, maxlength:100 }
            },
            messages: {
                txtCode: { required:"<?php echo __("This field is required") ?>" },
                cmbType: { required:"<?php echo __("This field is required") ?>"},
                txtName: {required:"<?php echo __("This field is required") ?>",maxlength:"<?php echo __("Maximum 100 Characters") ?>",noSpecialCharsOnly:"<?php echo __("Special Characters are not allowed") ?>"},
                txtNamesi:{maxlength:"<?php echo __("Maximum 100 Characters") ?>",noSpecialCharsOnly:"<?php echo __("Special Characters are not allowed") ?>"},
                txtNameta:{maxlength:"<?php echo __("Maximum 100 Characters") ?>",noSpecialCharsOnly:"<?php echo __("Special Characters are not allowed") ?>"}

            },
                 submitHandler: function(form) {
                 $('#editBtn').unbind('click').click(function() {return false}).val("<?php echo __('Wait..'); ?>");
                 form.submit();
              }
                       });

                       // When click edit button
                       $("#frmSave").data('edit', <?php echo $editMode ? '1' : '0' ?>);

                       $("#editBtn").click(function() {

                           var editMode = $("#frmSave").data('edit');
                           if (editMode == 1) {
                               // Set lock = 1 when requesting a table lock

                               location.href="<?php echo url_for('disciplinary/UpdateFinalAction?id=' . $encrypt->encrypt($FinalActionlist->dis_fna_code) . '&lock='. $encrypt->encrypt(1)) ?>";
                           }
                           else {

                               $('#frmSave').submit();
                           }


                       });

                       //When Click back button
                       $("#btnBack").click(function() {
                           location.href = "<?php echo url_for(public_path('../../symfony/web/index.php/disciplinary/FinalAction')) ?>";
                       });

                       //When click reset buton
                       $("#btnClear").click(function() {
                           // Set lock = 0 when resetting table lock
                           location.href="<?php echo url_for('disciplinary/UpdateFinalAction?id=' . $encrypt->encrypt($FinalActionlist->dis_fna_code) . '&lock='. $encrypt->encrypt(0)) ?>";
                       });
                   });
</script>
