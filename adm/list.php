<? $haslo = "adm137";
if ($_POST['password'] == $haslo) {
$path = ".htaccess path";
$file = file_get_contents($path);
$replaced = str_replace("RewriteRule ","<br>",$file);
$replaced = str_replace("Order Allow,Deny","",$replaced);
$replaced = str_replace("Deny from all","",$replaced);
$replaced = str_replace("RewriteEngine on","",$replaced);
$replaced = str_replace("ˑ"," ",$replaced);
$replaced = str_replace("?invite=","<br><li>Invite: https://discord.gg/",$replaced);
$replaced = str_replace("&","<br>",$replaced);
$replaced = str_replace("=",": ",$replaced);
$replaced = str_replace("desc","<li>Description",$replaced);
$replaced = str_replace("color","<li>Color",$replaced);
$replaced = str_replace("desc","Description",$replaced);
$replaced = str_replace("link.php","<br><font color='#00ff15'>Normal</font>",$replaced);
$replaced = str_replace("premium.php","<br><font color='#ffb200'>Premium</font>",$replaced);

echo $replaced;

}
else
{ 
echo 'You must be logged!<br>
<form method="post">
Login: <input type="text" name="login"/><br>
Hasło: <input type="password" name="password"/><br>
<input type="submit" name="submit" value="Login"/>
</form>';
}
?>

<? if ($_POST['password'] == $haslo)
{

}
else
{ 
echo '<a href="/">:(</a>';
}
?>

</body>
</html>
