
<?php include('../components/head.php') ?>
<?php require_once('../connection/dbconnect.php');
$query = "SELECT * FROM info";
$result = mysqli_query($conn,$query);

?>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
            <div class="card">
            <div class="card-title">
                <h1>Retrieve Data</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>username</th>
                        <th>contact</th>
                        <th>gender</th>
                        <th>password</th>
                        <th>about</th>
                        <th>is_active</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) { ?> 
                    <tr>
                        <td> <?php echo $row['username'];?></td>
                        <td> <?php echo $row['contact'];?></td>
                        <td> <?php echo $row['gender'];?></td>
                        <td> <?php echo $row['password'];?></td>
                        <td> <?php echo $row['about'];?></td>
                        <td> <?php echo $row['is_active'];?></td>
                        <td> 
                            <a href="recorddelete.php?id=<?php echo $row['id']; ?>" ><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M177.1 48h93.7c2.7 0 5.2 1.3 6.7 3.6l19 28.4h-145l19-28.4c1.5-2.2 4-3.6 6.7-3.6zM354.2 80L317.5 24.9C307.1 9.4 289.6 0 270.9 0H177.1c-18.7 0-36.2 9.4-46.6 24.9L93.8 80H80.1 32 24C10.7 80 0 90.7 0 104s10.7 24 24 24H35.6L59.6 452.7c2.5 33.4 30.3 59.3 63.8 59.3H324.6c33.5 0 61.3-25.9 63.8-59.3L412.4 128H424c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8H367.9 354.2zm10.1 48L340.5 449.2c-.6 8.4-7.6 14.8-16 14.8H123.4c-8.4 0-15.3-6.5-16-14.8L83.7 128H364.3z"/></svg></a>
                            <a href="edit.php?id=<?php echo $row['id'];?>" ><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/></svg></a>
                        </td>

                        </tr>  
                        <?php  
                    }
                        
                        ?>


                        </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
</body>

<?php include('../components/footer.php') ?>