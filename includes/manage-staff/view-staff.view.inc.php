<?php

function view_all_staff_detail(object $conn){
    $employee_list = request_all_staff_detail($conn);
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>      
        <?php foreach ($employee_list as $employee) { ?>
            <tr>
                <td><?php echo htmlspecialchars($employee['username']); ?></td>
                <td><?php echo htmlspecialchars($employee['email']); ?></td>
                <td><?php echo htmlspecialchars($employee['phone']); ?></td>
                <td><?php echo htmlspecialchars($employee['fullname']); ?></td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
        <?php } ?>
        
    </table>
    <?php
};

?>