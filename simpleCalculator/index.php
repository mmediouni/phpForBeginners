<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calc.php" method="post">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <select name="cal">
            <option value="add">Add</option>
            <option value="sub">Substract</option>
            <option value="mul">Multiply</option>
            <option value="ee">Error test</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>