<html>
    <head><title>Receiving information</title></head>
    <body>
        <font size="5">Thank you: Got your information</font>
        <?php
            $name = $_POST["name"];
            $university = $_POST["university"];
            $class = $_POST["class"];
            $hobbies = $_POST["hobbies"];
            print ("Hello, $name");
            print ("You are studying at $class, $university\n");
            print ("Your hobbies: $hobbies");
        ?>
    </body>
</html>
