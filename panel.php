~<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    <?php
session_start();

// Sprawdzamy, czy użytkownik jest zalogowany
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel użytkownika</title>
</head>
<body>

    <h2>Witaj, <?php echo $_SESSION['user']; ?>!</h2>

    <a href="logout.php">Wyloguj się</a>

</body>
</html>
</body>
</html>