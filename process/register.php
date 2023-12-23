
<?php include("../components/head.php") ?>

<body>

<div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                
        <div class="card">
            <div class="card-title">
                <h1>Registeration Form</h1>
            </div>
            <div class="card-body">
                <form action="registerprocess.php" method="post">
                    <label for="name"> User_Name:</label>
                    <input type="text" class="form-control" name="username">

                    <label for="contact"> Contact:</label>
                    <input type="number" class="form-control" name="contact">


                    <label for="Gender"> Gender:</label>
                    <input type="text" class="form-control" name="gender">

                    <label for="password"> Password:</label>
                    <input type="password" class="form-control" name="password">

                    
                    <label for="about"> About:</label>
                    <input type="text" class="form-control" name="about">

                    <label for="active"> is_active:</label>
                    <input type="boolean" class="form-control" name="is_active">

                </hr>
<br>
                    <button type="submit" class="btn btn-success">Save</button>   
                    <a style="margin-left:400px;" href="result.php" class="btn btn-success">Show Result</a>

                </form>

            </div>
        </div>
    </div>
    </div>
    </div>
</body>

<?php include("../components/footer.php") ?>