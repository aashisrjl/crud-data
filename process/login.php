<?php include("../components/head.php") ?>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6"></div>
        <div class="card c">
            <div class="card-title">
                Sign Up Form
            </div>
            <div class="card-body">
                <form action="signup.php" method="POST">

                    <label for="Username">Name:</label>
                    <input type="text" class="form-control"  name="name" id="name">

                    <label for="email">Email:</label>
                    <input type="email" class="form-control"  name="email" id="email">

                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="pass1" id="pass1">

                    <label for="password"> Confirmation Password:</label>
                    <input type="password" class="form-control" name="pass2" id="pass2">

                    </hr>

                    <button type="submit" class="btn btn-success">Login</button>


                </form>
            </div>

        </div>

    </div>
</div>
</div>

</body>
<?php include("../components/footer.php") ?>

