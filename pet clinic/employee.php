<?php
require_once('./includes/meta.php')
?>

<body>
    <div class="employee-container">
        <header>
            <div class="logo">
                <h1>今日は</h1>
            </div>
            <nav>
                <ul>
                    <li>Home</li>
                    <li>Pet</li>
                    <li class="selected">Employee</li>
                    <li>Grooming Services</li>
                    <li>Transaction</li>
                </ul>
            </nav>

            <button>Contact Us</button>
        </header>

        <div class="employee">
            <div class="employee-crud">
                <div class="employee-crud__head">
                    <h1>Employee</h1>
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
                            <td>Melissa</td>
                            <td>5150</td>
                            <td>Melissa</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Melissa</td>
                            <td>5150</td>
                            <td>Melissa</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Melissa</td>
                            <td>5150</td>
                            <td>Melissa</td>
                            <td class="employee-crud__action">
                                <button class="btn  btn-view">View</button>
                                <button class="btn">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Melissa</td>
                            <td>5150</td>
                            <td>Melissa</td>
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