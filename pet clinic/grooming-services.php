<?php
require_once('./includes/meta.php')
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
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Breed</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
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
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>