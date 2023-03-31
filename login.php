
<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Chat Application</header>
                <form action="#">
                    <div class="error-txt"></div>
                            <div class="field input">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="field input">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Enter Ur Password">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                        <div class="field button">
                                            <input type="submit" value="Start Chat">
                                        </div>
                                    </form>
                                    <div class="link">Not yet signed up !<a href="index.php">Signup Now</a></div>
            </section>
        </div>

        <script src="javascript/pass-word-show.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html> 