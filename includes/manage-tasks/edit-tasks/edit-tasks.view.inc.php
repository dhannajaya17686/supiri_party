<?php


function edit_task_editing_errors() {
    if(isset($_GET["task-edit"]) && $_GET["task-edit"] === "success"){
        echo "<script>alert('Task Edit Success')</script>";
    }; 
}

?>
