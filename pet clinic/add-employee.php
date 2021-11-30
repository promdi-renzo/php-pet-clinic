<?php
require_once('./includes/meta.php')
?>

<body>
    <div class="employee-form-container">
        <div class="employee-form">
            <div class="employee-form__logo">
                <h1>Add Employee</h1>
            </div>
            <form method="post" action="./scripts/addEmployee.php" class="employee-form__form">
                <div class="employee-form__input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="employee-form__input">
                    <label for="num">Phone Number</label>
                    <input type="text" name="num" id="num">
                </div>
                <div class="employee-form__input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <div class="employee-form__input">
                    <label for="file">Picture</label>
                    <input type="file" name="file" id="file">
                </div>
                <button type="submit" name="Submit">Add Employee</button>
            </form>
        </div>
    </div>
</body>

</html>