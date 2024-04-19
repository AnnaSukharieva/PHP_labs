<html>
<body>
    <form method="post">
        <input type="number" name="num1" required>
        <select name="operation" required>
            <option value="add">Додавання</option>
            <option value="subtract">Віднімання</option>
            <option value="multiply">Множення</option>
            <option value="divide">Ділення</option>
            <option value="modulus">Ділення по модулю</option>
            <option value="root">Добування кореня</option>
            <option value="power">Піднесення до степеня</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Обчислити">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once '../task5/Calculator.php';
        require_once 'Dispatcher.php'; 


        $num1 = $_POST['num1']; 
        $operation = $_POST['operation']; 
        $num2 = $_POST['num2']; 

        $calculator = new Calculator();
        $dispatcher = new Dispatcher($calculator);

        $result = $dispatcher->dispatch($operation, $num1, $num2);

        echo "<p>Результат: $result</p>";
    }
    ?>
</body>
</html>
