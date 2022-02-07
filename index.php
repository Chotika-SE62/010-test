<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="mt-5">Information Rice</h1>
        <a href="insert.php" class="btn btn-success">Insert</a>
        <hr>
        <div class="row">
                <?php
                include_once('functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while ($row = mysqli_fetch_array($sql)) {
                ?>

                    <div class="col-4 mt-5" style="padding-top: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $row['group_pic']; ?>" class="card-img-top" style="width: auto; height: 200px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['group_id']; ?></h5>
                                <p class="card-text"><?php echo $row['group_name']; ?></p>
                                <a href="information.php?id=<?php echo $row['group_id']; ?>" class="btn btn-primary">information</a>
                                <br><br>
                                <a href="update.php?id=<?php echo $row['group_id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?del=<?php echo $row['group_id']; ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
    </div>



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>