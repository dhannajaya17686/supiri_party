<div class="user-common-greet-box">
            <h1>Hello <?php echo $_SESSION["user_fullname"]?><span style="margin-left: 1.5rem;"></span>👋🏻</h1>
        </div>
        <!--The component to show stats-->
        <div class="user-common-stat-box">
            <!--ADMIN RENDERING-->
            <?php if ($_SESSION["user_role"] == "admin") { ?>
                <div class="stat-item">              
                    <img src="../assets/stats/stat3.png" alt="round_img_comp">
                    <div class="details">        
                        <p class="title">Total Customers</p>
                        <p class="data"><?php echo request_total_customers($conn) ?></p>
                        <p class="detail">
                            <svg style="font-weight:600" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#00AC4F"><path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z"/></svg> 
                            <span style="color:#00AC4F;font-weight:600">23 % </span> this month
                        </p>
                    </div>
                </div>

                <div class="stat-item">              
                    <img src="../assets/stats/stat2.png" alt="round_img_comp">
                    <div class="details">        
                        <p class="title">Parties</p>
                        <p class="data"><?php echo request_total_parties($conn,$_SESSION["user_role"],$_SESSION["user_id"]) ?></p>
                        <p class="detail">
                            <svg style="font-weight:600" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#00AC4F"><path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z"/></svg> 
                            <span style="color:#00AC4F;font-weight:600">23 % </span> this month
                        </p>
                    </div>
                </div>

                <div class="stat-item">              
                    <img src="../assets/stats/stat3.png" alt="round_img_comp">
                    <div class="details">        
                        <p class="title">Revenue</p>
                        <p class="data"><?php echo request_total_revenue($conn) ?></p>
                        <p class="detail">
                            <svg style="font-weight:600" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#00AC4F"><path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z"/></svg> 
                            <span style="color:#00AC4F;font-weight:600">23 % </span> this month
                        </p>
                    </div>
                </div>
            <?php } ?>
            <!--USER RENDERING-->
            <?php if ($_SESSION["user_role"] == "user") { ?>
                <div class="stat-item">              
                    <img src="../assets/stats/stat2.png" alt="round_img_comp">
                    <div class="details">        
                        <p class="title">Total Parties</p>
                        <p class="data"><?php echo request_total_parties($conn,$_SESSION["user_role"],$_SESSION["user_id"]) ?></p>
                        <p class="detail">
                            <svg style="font-weight:600" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#00AC4F"><path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z"/></svg> 
                            <span style="color:#00AC4F;font-weight:600">23 % </span> this month
                        </p>
                    </div>
                </div>

                <div class="stat-item">              
                    <img src="../assets/stats/stat3.png" alt="round_img_comp">
                    <div class="details">        
                        <p class="title">Total Balance</p>
                        <p class="data">876$</p>
                        <p class="detail">
                            <svg style="font-weight:600" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#00AC4F"><path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z"/></svg> 
                            <span style="color:#00AC4F;font-weight:600">23 % </span> this month
                        </p>
                    </div>
                </div>
            <?php } ?>
            <!--EMPLOYEE RENDERING-->
            <?php if ($_SESSION["user_role"] == "employee") { ?>
                <div class="stat-item">              
                    <img src="../assets/stats/stat2.png" alt="round_img_comp">
                    <div class="details">        
                        <p class="title">Total Parties</p>
                        <p class="data">3876</p>
                        <!--<p class="detail">
                            <svg style="font-weight:600" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#00AC4F"><path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z"/></svg> 
                            <span style="color:#00AC4F;font-weight:600">23 % </span> this month
                        </p>
                        -->
                    </div>
                </div>

                <div class="stat-item">              
                    <img src="../assets/stats/stat3.png" alt="round_img_comp">
                    <div class="details">        
                        <p class="title">Total Tasks</p>
                        <p class="data">876</p>
                        <!--<p class="detail">
                            <svg style="font-weight:600" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="20px" fill="#00AC4F"><path d="M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z"/></svg> 
                            <span style="color:#00AC4F;font-weight:600">23 % </span> this month
                        </p>-->
                    </div>
                </div>
            <?php } ?>
        </div>