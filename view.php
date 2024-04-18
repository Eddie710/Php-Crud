<?php include 'header.php'?>

<h1 class="text-center mt-5">Student Details</h1>

<div class="container mt-3">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['id'])) {
                $student_id = $_GET['id'];

                $query = "SELECT * FROM student WHERE id = $student_id";
                $view_students = mysqli_query($conn, $query);

                while($row = $view_students->fetch_assoc()) {
                    $student_id = $row['id'];
                    $fname = $row['firstname'];
                    $lname = $row['lastname'];
                    $email = $row['email'];

                    echo "<tr>";
                    echo "<td>{$student_id}</td>";
                    echo "<td>{$fname}</td>";
                    echo "<td>{$lname}</td>";
                    echo "<td>{$email}</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning">Back</a>
</div>

<?php include "footer.php" ?>
