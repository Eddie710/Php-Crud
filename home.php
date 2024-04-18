<!-- Header -->
<?php include "header.php" ?>
<style>
    body {
        background-color: #f4f4f4; /* Light gray background */
        color: #333; /* Dark text color */
    }
    .btn.btn-outline-dark {
        color: #333; /* Dark text color for buttons */
    }
    .btn.btn-outline-dark:hover {
        background-color: #333; /* Dark background color on hover */
        color: #f4f4f4; /* Light text color on hover */
    }
    .table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8bbd0; /* Light pink background for odd rows */
    }
    .table.table-striped tbody tr:nth-of-type(even) {
        background-color: #80deea; /* Light blue background for even rows */
    }
</style>
<div class="container mt-5">
    <h1 class="text-center">Data To Perform CRUD Operations</h1>
    <a href="create.php" class="btn btn-outline-dark mb-2">
        <i class="bi bi-person-plus"></i> Create New Student
    </a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM student"; // SQL query to fetch all table data
            $view_students = mysqli_query($conn, $query); // sending the query to the database
            // displaying all the data retrieved from the database using while loop
            while ($row = mysqli_fetch_assoc($view_students)) {
                $student_id = $row['id'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $email = $row['email'];
                echo "<tr>";
                echo "<th scope='row'>{$student_id}</th>";
                echo "<td>{$fname}</td>";
                echo "<td>{$lname}</td>";
                echo "<td>{$email}</td>";
                // Buttons to view, update and delete record
                echo "<td class='text-center'>
                          <a href='view.php?&id={$student_id}' class='btn btn-primary'>
                              <i class='bi bi-eye'></i> View
                          </a>
                      </td>";
                echo "<td class='text-center'>
                          <a href='update.php?edit&id={$student_id}' class='btn btn-secondary'>
                              <i class='bi bi-pencil'></i> Edit
                          </a>
                      </td>";
                echo "<td class='text-center'>
                          <a href='delete.php?&delete&id={$student_id}' class='btn btn-danger'>
                              <i class='bi bi-trash'></i> Delete
                          </a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<!-- A BACK button to go to the index page -->
<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5">Back</a>
</div>
<!-- Footer -->
<?php include "footer.php"?>
