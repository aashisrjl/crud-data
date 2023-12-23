<?php 
$id= $_GET['id'];

include('../connection/dbconnect.php');

$query = "SELECT * FROM info WHERE id='$id'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)!=1){
    die("Cannot find the record to edit");
}
$row = mysqli_fetch_assoc($result); 
?>
<?php include('../components/head.php' ) ?>

<body>

<div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
        <div class="card">
            <div class="card-title">
                <h1>Edit Form</h1>
            </div>
            <div class="card-body">
                <form action="updateprocess.php" method="post">
                    <input type="hidden" name="id" value="<?php echo "$id" ?>" />
                    <label for="name"> User_Name:</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>">

                    <label for="contact"> Contact:</label>
                    <input type="number" class="form-control" name="contact" value="<?php echo $row['contact'];?>">


                    <label for="Gender"> Gender:</label>
                    <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'];?>">

                    <label for="password"> Password:</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>">

                    
                    <label for="about"> About:</label>
                    <input type="text" class="form-control" name="about" value="<?php echo $row['about'];?>">

                    <label for="active"> is_active:</label>
                    <input type="boolean" class="form-control" name="is_active" value="<?php echo $row['is_active'];?>">

                </hr>
<br>
                    <button type="submit" value="update" class="btn btn-success">Update</button>
                </form>

            </div>
        </div>
    </div>
    </div>
    </div>
</body> 

<?php include("../components/footer.php") ?>*/
