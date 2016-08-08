<?php
session_start();

include ('./inc/config.php');

//** check session
if (isset ($_SESSION['ac_chat'])) {
  header("Location: $ac_chm");
  exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-GB">
  <head>
    <title>Atom Chat Login</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="language" content="en-GB">
    <meta name="description" content="Atom Chat free PHP chat script">
    <meta name="keywords" content="Atom Chat">
    <meta name="robots" content="noodp, noydir">
    <link rel="shortcut icon" href="<?php echo $ac_www . $ac_dir; ?>favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php echo $ac_www . $ac_inc; ?>style.css" type="text/css">
  </head>
  <body>
<?php
include ($ac_hdr);
?>
    <object data="<?php echo $ac_www . $ac_nip; ?>" type="text/html">Failed to render data object!</object>
    <div id="ac_menu">
      <form action="<?php echo $ac_www . $ac_nif; ?>" method="POST" id="ac_login">
        <div>
          <label for="ac_user">User</label>
          <input type="text" name="ac_user" id="ac_user" maxlength="10" title="Please enter your user name">
        </div>
        <div>
          <label for="ac_pass">Pass</label>
          <input type="password" name="ac_pass" id="ac_pass" maxlength="10" title="Please enter your password">
        </div>
        <div>
          <input type="submit" name="ac_register" value="Register" title="Click here to register">
          <input type="submit" name="ac_login" value="Login" title="Click here to login">
        </div>
      </form>
<?php
include ($ac_ftr);
?>
    </div>
  </body>
</html>