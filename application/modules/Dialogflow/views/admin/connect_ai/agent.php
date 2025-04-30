<?PHP 

<h1>สร้าง Agent</h1>
<?php echo form_open('dialogflow/create_agent'); ?>
    <label>Agent Name:</label>
    <input type="text" name="agent_name" value="<?php echo set_value('agent_name'); ?>">
    <br>
    <input type="submit" value="สร้าง Agent">
<?php echo form_close(); ?>
