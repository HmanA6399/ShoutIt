<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>SHOUIT! Shoutbox</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>SHOUIT! Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
            <li class="shout"><span>10:15pm</span> - <strong>Ebrahim</strong> : I love Asmaa </li>
            <li class="shout"><span>10:15pm</span> - <strong>Ebrahim</strong> : I love Asmaa </li>
            <li class="shout"><span>10:15pm</span> - <strong>Ebrahim</strong> : I love Asmaa </li>
            <li class="shout"><span>10:15pm</span> - <strong>Ebrahim</strong> : I love Asmaa </li>
            </ul>
        </div>
        <div id="input">
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter Your Name">
                <input type="text" name="msg" placeholder="Enter Your Message">
            </form>
            <input class="shout-btn" type="submit" name="submit" value="Shout it Out !">
        </div>
    </div>
</body>
</html>