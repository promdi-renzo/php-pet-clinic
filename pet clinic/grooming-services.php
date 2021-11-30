<?php
require('./includes/meta.php');
require('./includes/db_config.php');

$result = mysqli_query($mysqli, "SELECT * FROM service");
?>

<body>
    <div class="groom-container">
        <header>
            <div class="logo">
                <h1 class="title">ペットクリニック</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="pet.php">Pets</a></li>
                    <li><a href="employee.php">Employee</a></li>
                    <li class="selected"><a href="grooming-services.php">Grooming Services</a></li>
                    <li><a href="transactions.php">Transaction</a></li>
                </ul>
            </nav>

            <button>Contact Us</button>
        </header>
        <div class="groom">
            <div class="groom-crud">
                <div class="groom-crud__head">
                    <h1 class="title">Grooming Services</h1>
                    <button class="btn">Add new grooming service</button>
                </div>
                <table class="groom-crud__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Breed</th>
                            <th>Cost</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while ($res = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $res['idservice'] . "</td>";
                            echo "<td>" . $res['name'] . "</td>";
                            echo "<td>" . $res['breed'] . "</td>";
                            echo "<td>" . $res['cost'] . "</td>";
                            echo "<td class=`employee-crud__action`>
                                <button class=`btn  btn-view`>View</button>
                                <button class=`btn`>Edit</button>
                                <button class=`btn btn-delete`>Delete</button>
                                </td>";
                        }
                        ?>
                        <!-- <tr>
                            <td>1</td>
                            <td>Spy</td>
                            <td>7</td>
                            <td>Female</td>
                            <td>Rottweiler</td>
                            <td class="groom-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr> -->


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>