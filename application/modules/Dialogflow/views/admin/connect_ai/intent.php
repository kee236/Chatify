<?php

<h1>สร้าง Intent</h1>
<?php echo form_open('dialogflow/create_intent'); ?>
    <label>Intent Name:</label>
    <input type="text" name="intent_name" value="<?php echo set_value('intent_name'); ?>">
    <br>
    <input type="submit" value="สร้าง Intent">
<?php echo form_close(); ?>
