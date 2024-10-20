<?php require_once("../components/base.php");?>

<body>
    
    <div class="main-content">
        <!--The component to greet the user-->    
        <?php require_once("../components/stat-box.php"); ?>
        <!--The component to show to upcoming parties-->
        <?php require_once("../components/upcoming-parties-admin.php");?>
        <!--The componnet for upcoming tasks-->
        <div class="assigned-tasks-admin-box">
            <div class="action-row">           
                <h3>Sunday 23 May</h3>
                <button class="details-btn">Add new tasks</button>
            </div>
            <div class="task-list">            
                <div class="task-box">
                    <p class="title">Meet M/W Simmple</p>
                    <div class="detail-row">
                        <p class="status">Completed</p>
                        <p class="assigned-to">Assigned to: John</p>
                    </div>
                </div>
                <div class="task-box">
                    <p class="title">Meet M/W Simmple</p>
                    <div class="detail-row">
                        <p class="status">Completed</p>
                        <p class="assigned-to">Assigned to: John</p>
                    </div>
                </div>
                <div class="task-box">
                    <p class="title">Meet M/W Simmple</p>
                    <div class="detail-row">
                        <p class="status">Completed</p>
                        <p class="assigned-to">Assigned to: John</p>
                    </div>
                </div>
                <div class="task-box">
                    <p class="title">Meet M/W Simmple</p>
                    <div class="detail-row">
                        <p class="status">Completed</p>
                        <p class="assigned-to">Assigned to: John</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>