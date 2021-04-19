<!doctype html>
<html>
<head>
    <title>Übunt</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<main class="container m-5">
    <?php
    $handle = fopen("content.txt","r");
    include ('class_MyObject.php');
    if ($handle) {
        $i = 1;
        $counter = 1;
        echo "<table class='table'><tbody>";
        while (!feof($handle)) {
            $inhalt = fgets($handle);
            if($i%2) {
                echo "<tr>";
                $newEntry[$counter] = new MyObject();
                $newEntry[$counter]->name = $inhalt;
                print '<td>' . $newEntry[$counter]->name . "</td>\n";
            } else {
                $newEntry[$counter]->setMail($inhalt);
                print '<td>' . $newEntry[$counter]->getMail()."</td>\n";
                $counter++;
                echo "</tr>";
            }
            $i++;
        }
        fclose($handle);
        echo "</tbody></table>";
    } else {
        print "Die Datei konnte nicht geöffnet werden.<br>\n";
    }
    ?>

    <form method="post" action="index.php" class="mb-3">

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" id="name" name="name" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="e-mail" class="col-sm-2 col-form-label">E-Mail:</label>
            <div class="col-sm-10">
                <input type="text" id="e-mail" name="e-mail" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Absenden</button>

    </form>

    <?php
        $handle = fopen("content.txt","a");
        if ($handle) {
            if (!empty($_POST['name']) && !empty($_POST['e-mail'])) {
                if ($_POST['name'] != "") {
                    $name = $_POST['name'];
                    fputs($handle, $name."\n");
                }
                if ($_POST['e-mail'] != "") {
                    $email = $_POST['e-mail'];
                    fputs($handle, $email."\n");
                }
            }
            fclose($handle);
        } else {
            print "Die Datei konnte nicht geöffnet werden.<br>\n";
        }
    ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
