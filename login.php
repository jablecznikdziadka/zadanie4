<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
<?php
session_start();

if (isset($_POST['zaloguj'])) {

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if ($login == "admin" && $haslo == "1234") {

        $_SESSION['user'] = $login;

        if (isset($_POST['zapamietaj'])) {
            setcookie("login", $login, time() + (7 * 24 * 60 * 60));
        }

        header("Location: panel.php");
        exit();

    } else {
        $blad = "Błędny login lub hasło!";
    }
}
$zapisanyLogin = "";

if (isset($_COOKIE['login'])) {
    $zapisanyLogin = $_COOKIE['login'];
}
?>

    <h2>Logowanie</h2>

    <?php
    if (isset($blad)) {
        echo $blad;
    }
    ?>

    <form method="POST">

        Login:
        <input type="text" name="login"
        value="<?php echo htmlspecialchars($zapisanyLogin); ?>" required>
        <br><br>

        Hasło:
        <input type="password" name="haslo" required>
        <br><br>

        <input type="checkbox" name="zapamietaj">
        Zapamiętaj mnie
        <br><br>

        <input type="submit" name="zaloguj" value="Zaloguj">

    </form>

</body>
</html>