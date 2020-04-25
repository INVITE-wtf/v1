
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://domeqcdn.glitch.me/css/bootstrap.min.css"><link rel="stylesheet" href="https://domeqcdn.glitch.me/css/main.css"><link rel="stylesheet" href="https://domeqcdn.glitch.me/css/now-ui-kit.css"><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet"><link rel="icon" href="https://cdn.glitch.com/ec25daf7-3bbb-43a0-b104-a000313b2345%2Ffavicon.ico?v=1585842935012" type="image/gif" sizes="16x16"><title>INVITE.wtf</title>
</head>
<body>
<div id="links" class="heading text-center">
    <h1 class="display-5 title">Admin DashBoard</h1>
<? $haslo = "adm137";
if ($_POST['password'] == $haslo) {
echo 'Welcome ' . $_POST['login'] . '!
    <br /><br /><br /><br /><br /><br />
</div>
<div id="features" class="features">
<h2>Create</h2>

  <form method="post">  
  https://discord.gg/<input type="text" id="invite" name="invite" placeholder="8RcKUz"><br>
  https://invite.wtf/<input type="text" name="custom" id="custom" placeholder="support"><br>
  #<input type="text" name="color" id="color" placeholder="FF0000"><br>
  Description: <input type="text" name="desc" id="desc" placeholder="Cool server"><br>
  Lista: <input type="text" name="list" id="list" placeholder="list || premium"><br>
 <input class="btn btn-primary btn-lg" value="✅ Add" type="submit" role="button">
</form>
</br>
  <h2>Delete</h2>
  <form method="post">  
  https://invite.wtf/<input type="text" name="name" id="name" placeholder="support"><br>
 <input class="btn btn-primary btn-lg" value="❌ Delete" type="submit" role="button"></form> 

</div>
 <div id="tutorial" class="statistics">
';

}
else
{ 
echo 'You must be logged!<br>
<form method="post">
Login: <input type="text" name="login"/><br>
Hasło: <input type="password" name="password"/><br>
<input type="submit" name="submit" value="Login"/>
</form><br /><br /><br />';
}
?>
 


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://domeqcdn.glitch.me/js/now-ui-kit.min.js"></script>
<?php
function stworz() {
$desc = str_replace(' ', 'ˑ', $_POST['desc']);
$path = ".htaccess path here";
$file = file_get_contents($path);
$file = explode("\n", $file);
$rr = ['RewriteRule ', $_POST['custom'], ' ', $_POST['list'], '.php?invite=', $_POST['invite'], '&desc=', $desc, '&color=', $_POST['color']];
$file[] = implode("", $rr);
$file = implode("\n", $file);
$fp = fopen($path, "w");
fwrite($fp, $file);
fclose($fp);
    }
function delete() {
$path = ".htaccess path here";
$file = file_get_contents($path);
$file = explode("\n", $file);
$id = null;
foreach ($file as $key => $value) {
    if (strpos($value, "RewriteRule") !== false) {
        $rr = explode(" ", $value);
        if ($rr[1] == $_POST['name']) {
            unset($file[$key]);
            break;
        }
    }
}
$file = implode("\n", $file);
$fp = fopen($path, "w");
fwrite($fp, $file);
fclose($fp);
    }
if (isset($_POST['custom'])) {
    stworz();
  }
if (isset($_POST['name'])) {
    delete();
  }

?>
</body>
</html>

