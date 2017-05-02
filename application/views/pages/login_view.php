<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php echo $title; ?>
        <?php echo base_url();?>
        <form method="POST" action="">
            Username : <input type="text" name="username" value=""/> <br/>
            Password : <input type="password" name="password" value=""/> <br/>
            <input type="submit" name="submit_login" value="Login"/>
        </form>
    </body>
</html>