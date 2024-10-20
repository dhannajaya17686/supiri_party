<?php require_once("../components/base.php");?>
<head>
    <title>SP | Dashboard</title>
</head>
<body>
    
    <div class="main-content">
        <!--The component to greet the user-->    
        <?php require_once("../components/stat-box.php"); ?>
        <!--The component to show to upcoming parties-->
        <?php require_once("../components/upcoming-parties-admin.php");?>
        <!--The componnet for upcoming tasks-->
        <?php require_once("../components/today-tasks-admin.php"); ?>
    </div>
    

</body>
</html>