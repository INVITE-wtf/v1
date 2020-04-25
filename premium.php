
<!DOCTYPE html>
<html lang="en">
<head>
$url = 'https://discordapp.com/api/invites/' . $_GET['invite'] . '?with_counts=true';
$contents = file_get_contents($url);
$api=json_decode($contents);
$title = $api->guild->name;
$membersAll = $api->approximate_member_count;
$membersOnline = $api->approximate_presence_count;
$id = $api->guild->id;
$icon = $api->guild->icon;
$imageURL = 'https://cdn.discordapp.com/icons/' . $id . '/' . $icon;
$desc = str_replace('ˑ', ' ', $_GET['desc']);
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://domeqcdn.glitch.me/css/bootstrap.min.css">
<link rel="stylesheet" href="https://domeqcdn.glitch.me/css/main.css">
<link rel="stylesheet" href="https://domeqcdn.glitch.me/css/now-ui-kit.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,800&display=swap" rel="stylesheet">
<link rel="icon" href="<?php echo $imageURL ?>" type="image/gif" sizes="16x16">
  <meta property="og:site_name" content="⭐ Premium">
<title><?php echo $title ?></title>
<meta property="og:title" content="<?php echo $title ?>" />
<meta property="og:image" content="<?php echo $imageURL ?>" /><meta property="og:description" content="<?php echo $desc ?> 
 
 
⬤ <?php echo $membersOnline ?> online  ⭘ <?php echo $membersAll ?> members" />
<meta name="theme-color" content="#<?php echo $_GET['color']; ?>" />
</head>
  <body><div class="heading text-center" style="background: #23272A;"><img src="<?php echo $imageURL ?>" width="300" height="300" class="icon" style="box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);">
  <h1 class="display-5 title"><?php echo $title ?></h1>
    <span class="badge badge-warning">⭐ Premium</span><br><br>

<p class="subtitle"><?php echo $desc ?></p> 
  <div class="badge badge-success text-wrap" style="width: 6rem;">
    Online: <br /><?php echo $membersOnline ?>
  </div>
    <div class="badge badge-danger text-wrap" style="width: 6rem;">
    Members: <br /><?php echo $membersAll ?>
  </div></big><br />
    <a class="btn btn-primary btn-lg" href="<?php echo $_GET['invite']; ?>" role="button">Join</a>
<br><br>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://domeqcdn.glitch.me/js/now-ui-kit.min.js"></script>
</body>
</html>