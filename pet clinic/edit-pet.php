<?php
require_once('./includes/meta.php')
?>

<body>
    <div class="pet-form-container">
        <div class="pet-form">
            <div class="pet-form__logo">
                <h1>Edit Pet</h1>
            </div>
            <form method="post" action="" class="pet-form__form">
                <div class="employee-form__input">
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" disabled>
                </div>
                <div class="employee-form__input">
                    <label for="breed">Breed</label>
                    <input type="text" name="breed" id="breed">
                </div>
                <div class="employee-form__input">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender">
                </div>
                <div class="employee-form__input">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="age">
                </div>
                <div class="pet-form__input">
                    <label for="fileToUpload">Picture</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <button type="submit">Update Pet</button>
            </form>
        </div>
    </div>
</body>

</html>