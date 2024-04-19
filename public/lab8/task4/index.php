
<html>
<body>
    <form method="post">
        Прізвище: <input type="text" name="lastName" required><br><br>
        Ім'я: <input type="text" name="firstName" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Вік: <input type="number" name="age" required><br><br>
        <input type="submit" value="Готово">
    </form>
</body>
</html>

<?php

class User {
    public $lastName;
    public $firstName;
    public $email;
    public $age;

    public function __construct($lastName, $firstName, $email, $age) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->age = $age;
    }

    public function displayUserInfo() {
        echo "Прізвище: " . $this->lastName . "<br>";
        echo "Ім'я: " . $this->firstName . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Вік: " . $this->age . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = new User($_POST['lastName'], $_POST['firstName'], $_POST['email'], $_POST['age']);
        $user->displayUserInfo();
}
?>
