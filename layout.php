<html>
    <head>
        <title><?=$data->title?></title>
        <style>
            label
            {
                width: 200px;
                display: inline-block;
                text-align: right;
            }
            fieldset
            {
                width: 400px;
            }
            input{
                margin-top: 5px;
            }
            input[type=submit]
            {
                width: 100%;
                display: inline-block;
            }
            .message
            {
                width: 400px;
                padding: 12px;
                margin: 10px;
                background: #ffee99;
                box-shadow: 0 2px 6px 0 rgba(0,0,0,0.2); 
            }
        </style>
    </head>
    <body>
        <?php if ($data->message != "") {?>
        <div class="message"><?=$data->message?></div>
        <?php } ?>
        <form method="POST">
            <fieldset>
            <legend><?=$data->legend?></legend>
                <label for="<?=$elements["username"]?>"><?=$data->username?>: </label><input name="<?=$elements["username"]?>">
                <br>
                <label for="<?=$elements["password"]?>"><?=$data->password?>: </label><input name="<?=$elements["password"]?>" type="password">
                <br>
                <input type="submit" name="<?=$elements["submit"]?>" value="<?=$data->button?>">
            </fieldset>
        </form>
        <a href="?lang=sv">På Svenska</a><br>
        <a href="?lang=en">In English</a>
    </body>
</html>