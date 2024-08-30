<!DOCTYPE html>
<html>
<head  lang="sv">

</head>
<body>
   <?php
    $unstripped = $_POST['unstripped'];
    $stripped = $_POST['stripped'];
    $stripped = strip_tags($stripped);

    echo("<p>Denna sträng:" . $stripped ." blir strippad</p>");
    echo("<p>Denna sträng:" . $unstripped ." blir ostrippad</p>");
   ?>
</body>
</html>