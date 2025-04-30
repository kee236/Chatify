<?php 


<h1>ตั้งค่า Dialogflow</h1>
<?php echo form_open('dialogflow/save_config'); ?>
    <label>Project ID:</label>
    <input type="text" name="project_id" value="<?php echo set_value('project_id'); ?>">
    <br>
    <label>Session ID:</label>
    <input type="text" name="session_id" value="<?php echo set_value('session_id'); ?>">
    <br>
    <label>Language Code:</label>
    <input type="text" name="language_code" value="<?php echo set_value('language_code'); ?>">
    <br>
    <input type="submit" value="บันทึก">
<?php echo form_close(); ?>
