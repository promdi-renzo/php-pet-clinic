<?php
require_once('./includes/meta.php')
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
                    <li><a href="pet.php">Pets</a></li>
                    <li class="selected"><a href="employee.php">Employee</a></li>
                    <li><a href="grooming-services.php">Grooming Services</a></li>
                    <li><a href="transactions.php">Transaction</a></li>
                </ul>
            </nav>

            <button>Contact Us</button>
        </header>

        <div class="employee">
            <div class="employee-crud">
                <div class="employee-crud__head">
                    <h1 class="title">Employee</h1>
                    <button class="btn">Add new employee</button>
                </div>
                <table class="employee-crud__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Melissa</td>
                            <td>09989887654</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Melissa</td>
                            <td>09989887654</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Melissa</td>
                            <td>09989887654</td>
                            <td class="employee-crud__action">
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