<script type="text/javascript" src="<?php echo public_path('../../scripts/jquery/jquery.validate.js') ?>"></script>
<div class="formpage">
    <div class="navigation">
        <input type="button" class="backbutton" id="btnBack"
               value="<?php echo __("Back") ?>" tabindex="4" />
    </div>
    <div id="status"></div>
    <div class="outerbox">
        <div class="mainHeading"><h2><?php echo __("Company Info: Company Property") ?></h2></div>
        <form name="frmSave" id="frmSave" method="post"  action="">

            <label for="txtLocationCode"><?php echo __("Property Name") ?> <span class="required">*</span></label>
            <input id="txtName"  name="txtName" type="text"  class="formInputText" value="" tabindex="1" />
            <br class="clear"/>


            <div class="formbuttons">
                <input type="button" class="savebutton" id="editBtn"

                       value="<?php echo __("Save") ?>" tabindex="2" />
                <input type="button" class="clearbutton" id="resetBtn"
                       value="<?php echo __("Reset") ?>" tabindex="3" />
            </div>
        </form>
    </div>
    <div class="requirednotice"><?php echo preg_replace('/#star/', '<span class="required">*</span>', __("Fields marked with an asterisk #star are required.")); ?>.</div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

        // When click edit button
        $("#editBtn").click(function() {
            $('#frmSave').submit();
        });

        //Validate the form
        $("#frmSave").validate({
				
            rules: {
                txtName: { required: true }
            },
            messages: {
                txtName: "<?php echo __("Property Name is required") ?>"
            },

            submitHandler: function(form) {
                $('#editBtn').unbind('click').click(function() {return false}).val("<?php echo __('Wait..'); ?>");
                form.submit();
            }
        });

        //When Click back button
        $("#btnBack").click(function() {
            location.href = "<?php echo url_for(public_path('../../symfony/web/index.php/admin/listCompanyProperty')) ?>";
        });

        //When click reset buton
        $("#resetBtn").click(function() {
            document.forms[0].reset('');
        });
    });
</script>
