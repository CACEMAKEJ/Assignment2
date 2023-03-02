<?php
require_once('database.php');




// Get employees
$queryEmployees = 'SELECT e.employee_name, e.employee_surname, e.email, er.role_title FROM employee e, employee_role er WHERE e.role_id = er.role_id';
$statement = $db->prepare($queryEmployees);
$statement->execute();
$employees = $statement->fetchAll();
$statement->closeCursor();



?>


    <h1>Employees</h1>
    <section>
        <table class="table table-striped">
            <thead class="table-dark">
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Role</th>
            </thead>

            <?php foreach ($employees as $employee) : ?>
            <tr>
                <td><?php echo $employee['employee_name']; ?></td>
                <td><?php echo $employee['employee_surname']; ?></td>
                <td><?php echo $employee['email']; ?></td>
                <td><?php echo $employee['role_title']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
