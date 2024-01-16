<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <section class="hundred">
        <h1>Add New Timer</h1>
        <form method="post" action="">
            <div class="hundred">
                <div class="fifty"><p class="label">Timer's title</p></div>
                <div class="fifty"><input type="text" id="timer-title" name="Timer-title" maxlength="30" required/></div>
            </div>
            <div class="hundred">
                <div class="fifty"><p class="label">Due Date/time</p></div>
                <div class="fifty"><input type="datetime-local" id="due-date" name="due-date" required/></div>
            </div>
            <div class="hundred">
                <div class="fifty"><p class="label">After Expire</p></div>
                <div class="fifty">
                    <select name="timer-expire" required>
                        <option value="">Select an option</options>
                        <option value="Hide">Hide</options>
                        <option value="Message">Disable and show a message</option>
                    </select>
                    <input type="text" id="expire-msg" name="expire-msg" maxlength="50"/>
                </div>
            </div>
            <div class="hundred">
                <div class="fifty"><input type="submit" value="Save Changes" name="submit"/></div>
            </div>
</form>    
    </section>
</div>


<?php
if (isset($_POST{'submit'})){
    insert_timer_data_in_wp_options();
}


function insert_timer_data_in_wp_options()
{
    $timer_title = $_POST['Timer-title'];
    $due_date = $_POST['due-date']; 
    $timer_expire = $_POST['timer-expire']; 
    $timer_expire_msg = $_POST['expire-msg'];
    
    $countdown_data = array('timer-title' => $timer_title, 'due-date' => $due_date, 'timer-expire' => $timer_expire, 'expire-msg' => $timer_expire_msg);

    if(true){
        add_option('countdown_timer' , $countdown_data);
        success_msg();
    }
}

function success_msg(){
    echo "Data Inserted successfully";
}
?>
 

</body>
</html>