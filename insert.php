<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $group_name = $_POST['group_name'];
        $group_pic = $_POST['group_pic'];
        
        $sql = $insertdata->insert($group_name, $group_pic);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Back</a>
        <hr>
        <h1 class="mt-5">Insert</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="group_name" class="form-label">Name</label>
                <input type="text" class="form-control" name="group_name" required>
            </div>
            <div class="mb-3">
                <label for="group_pic">PIC</label>
                <input type="text" class="form-control" name="group_pic" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>