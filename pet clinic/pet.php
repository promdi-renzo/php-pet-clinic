<?php
require('./includes/meta.php');
require('./includes/db_config.php');

$result = mysqli_query($mysqli, "SELECT * FROM pet");
?>

<body>
    <div class="employee-container">
        <header>
            <div class="logo">
                <h1 class="title">ペットクリニック</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li class="selected"><a href="pet.php">Pets</a></li>
                    <li><a href="employee.php">Employee</a></li>
                    <li><a href="grooming-services.php">Grooming Services</a></li>
                    <li><a href="transactions.php">Transaction</a></li>
                </ul>
            </nav>

            <button class="btn">Contact Us</button>
        </header>

        <div class="employee">
            <div class="employee-crud">
                <div class="employee-crud__head">
                    <h1 class="title">Pets</h1>
                    <button class="btn">Add new pet</button>
                </div>
                <table class="employee-crud__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Breed</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($res = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $res['idpet'] . "</td>";
                            echo "<td>" . $res['name'] . "</td>";
                            echo "<td>" . $res['age'] . "</td>";
                            echo "<td>" . $res['gender'] . "</td>";
                            echo "<td>" . $res['breed'] . "</td>";
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
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Spy</td>
                            <td>7</td>
                            <td>Female</td>
                            <td>Rottweiler</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Spy</td>
                            <td>7</td>
                            <td>Female</td>
                            <td>Rottweiler</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Spy</td>
                            <td>7</td>
                            <td>Female</td>
                            <td>Rottweiler</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Spy</td>
                            <td>7</td>
                            <td>Female</td>
                            <td>Rottweiler</td>
                            <td class="employee-crud__action">
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