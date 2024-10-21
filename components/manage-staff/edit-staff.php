<div id="popup2" class="overlay">
            <form class="popup main-form" action="../logic/staff-logic/edit-employee.logic.php" method="post">
                <a class="close" href="#">&times;</a>
                <div class="main-form-sub-text">Edit Staff Members</div>
                <input type="hidden" id="edit-username" name="username">
                
                <label for="edit-email">Email:</label>
                <input type="email" id="edit-email" name="email" required>

                <label for="edit-phone">Phone:</label>
                <input type="tel" id="edit-phone" name="phone" required>

                <label for="edit-fullname">Full Name:</label>
                <input type="text" id="edit-fullname" name="fullname" required>

                <button type="submit">Save Changes</button>
            </form> 
        </div>