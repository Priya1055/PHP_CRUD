
<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></link>
    <title>CRUD Operation</title>
</head>
<body>
    <div class="container">  
        <button class="btn btn-primary my-5" ><a href="student.php" class="text-light"> ADD STUDENT</a></button>
        <table class="table">
  
        <div class="card mt-3">
            <h2 class="card-header">Student Information</h2>
            <div class="card-body">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>s
                        <th>Roll No</th>
                        <th>Class</th>
                        <th>Marks</th>
                        <th>Mob No</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            <?php
        
            $sql ="select*from student_tbl";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $id=$row['id'];
                    $name=$row['name'];
                    $roll_no=$row['roll_no'];
                    $class=$row['class'];
                    $mob_no=$row['mob_no'];
                    $email=$row['email'];
                    $gender=$row['gender'];
                    $marks=$row['grade'];
                    $country=$row['country'];
                    
                    echo
                    '<tr>
                        <th scope="row">'. $name .'</th>
                        <td>'.$roll_no .'</td>id
                        <td>'.$class .'</td> 
                        <td>'. $marks .'</td>
                        <td>'.$mob_no .'</td>
                        <td>'.$email .'</td> 
                        <td>'. $gender .'</td>
                        <td>'. $country .'</td> 
                        <td><button class="btn btn-primary"><a href="edit.php?editid='.$id.'" class="text-light">Edit</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td> 
                    </tr> ' ;
                }
            }
            ?>
        </div>
        </div>      
        </tbody>
        </table>
                
        </div>

</body>
</html>
