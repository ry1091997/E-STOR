        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="login_script.php">
                            <p>Don't Have an account? <a href="signup.php">Register</a></p>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" >
                                <div> <?php
                                    if (isset($_GET['email_error'])) {
                                        echo $_GET['email_error'];
                                    }
                                    ?> </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" >
                                 <div> <?php if(isset($_GET['password_error'])){echo $_GET['password_error']; } 
                                if(isset($_GET['error'])){ echo $_GET['error'];} ?> </div> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" role="button">Login</button>
                            </div>
                        </form>
                        <p><a href="setting.php">Forget Password ?</a></p>
                    </div>

                    <!-- Modal footer -->
                    <!--                    <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>-->

                </div>
            </div>
        </div>

<!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"-->