
<?php
include 'connect.php';
$id=$_GET['editid'];
$sql="select * from student_tbl where id='$id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$name = $row['name'];
$class = $row['class'];
$roll_no = $row['roll_no'];
$grade = $row['grade'];
$mob_no = $row['mob_no'];
$gender = $row['gender'];
$email = $row['email'];
$country = $row['country'];

if(isset($_POST['submit']))
{
    // Assign values from $_POST to variables
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll_no = $_POST['roll_no'];
    $grade = $_POST['grade'];
    $mob_no = $_POST['mob_no'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $country = $_POST['country'];

    // Prepare the SQL statement using prepared statements
    $sql = "update student_tbl set name='$name', class='$class', roll_no='$roll_no', grade='$grade', mob_no='$mob_no', gender='$gender', email='$email',country='$country' where id='$id'";
            
    
    // Prepare the statement
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "Updated Successfully";
        header('location:view.php');
    }
    else{
        die(mysqli_error($conn));
    }

    if($result)
    {
        echo "Data Updated successfully";
    }
    else
    {
        // Display error message
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add your custom CSS styles here */
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="card">
        <h5 class="card-title">Student Information Form</h5>
        <div class="card-body">
        <form method="POST">
           
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name?>" required>
                    </div>

                    <div class="form-group">
                        <label for="class">Class</label>
                        <input type="text" class="form-control" id="class" name="class" value="<?php echo $class?>" required>
                    </div>
                    <div class="form-group">
                        <label for="roll_no">Roll No</label>
                        <input type="text" class="form-control" id="roll_no" name="roll_no" value="<?php echo $roll_no?>" required>
                    </div>
                    <div class="form-group">
                        <label for="grade">Marks</label>
                        <input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="mob_no">Mobile No</label>
                        <input type="text" class="form-control" id="mob_no" name="mob_no" value="<?php echo $mob_no?>" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subjects">Subjects</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="maths" value="maths" name="subjects[]">
                            <label class="form-check-label" for="maths">Maths</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="science" value="science" name="subjects[]">
                            <label class="form-check-label" for="science">Science</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="english" value="english" name="subjects[]">
                            <label class="form-check-label" for="english">English</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-select" id="country" name="country" required>
                            <option value="" selected disabled>Select Country</option>
                            <option value="USA">India</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                            <option value="Canada">Canada</option>
                            <option value="Australia">Australia</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">




    </script>
</body>
</html>
