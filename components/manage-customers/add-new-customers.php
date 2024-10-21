<div id="popup1" class="overlay">
            <form class="popup main-form"  action="../logic/customer-logic/add-customer.logic.php" method="post" onsubmit="return validateStaffInput()">
                <a class="close" href="#">&times;</a>
                <div class="main-form-sub-text">Add Customers</div>
                
                <div class="main-form-input-group">  
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Enter your Name" >
                    <span id="fullname_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">         
                    <label for="username">Username:</label>
                    <div class="main-signup-input-group">
                        <input type="text" name="username" id="username" placeholder="Enter Username">
                        <button type="button" class="btn-generate" onclick="generateUserName()">Generate</butto>
                    </div>
                    <span id="username_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                    <span id="password_error" class="password-error"></span>
                </div>
                
    
                <div class="main-form-input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email">
                    <span id="email_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" >
                    <span id="phone_error" class="password-error"></span>
                </div>

                <button class="btn-submit" type="submit">Submit</button>
            </form>
        </div>