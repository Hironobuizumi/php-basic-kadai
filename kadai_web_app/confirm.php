<?php
    
    $employee_name = $_POST['employee_name'];
    $employee_age = $_POST['employee_age'];
    $department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>確認画面</h1>
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo htmlspecialchars($employee_name, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo htmlspecialchars($employee_age, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    </table>
    <br>
    <form action="complete.php" method="POST">
        <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($employee_name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($employee_age, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="department" value="<?php echo htmlspecialchars($department, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="submit" value="確定">
    </form>
    <form action="form.php" method="GET">
        <input type="submit" value="キャンセル">
    </form>
</body>
</html>
