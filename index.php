


<?php
include 'conn_to_db.php';
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 2/18/14
 * Time: 10:48 AM
 */
//echo "ASsdasdsadasdsd";

//echo "kitas";
$db = new conn_to_db();

$users = $db->getUsers();



?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ChatWeb</title>

</head>
<body>
    <div class="message_window">
        <p>cia bus visos zinutes</p>
    </div>

    <div id="wrapper">
        <div id="upperPanel">
            <div id="chat">
                <div class="bub">
                    <span class="bubbleUsers">Name:</span>
                    <span class="bubble">tessadsda dassss das asd ad </span>
                </div>
                <div  class="bub">
                    <span class="bubbleUsers">Name:</span>
                    <span class="bubble">tessadsda da das asd ad </span>
                </div>
                <div  class="bub">
                    <span class="bubbleUsers">Name:</span>
                    <span class="bubble">tessadsda da das asd ad </span>
                </div>


                <div clas="bubble"></div>


            </div>
            <div id="friends">

                    <?php
                    $users = $db->getUsers();
                    while($line = mysql_fetch_assoc($users)){
                        print "<div class='friendStyle'><div ".($line['online']? "class='greenBubble'": "class='redBubble'")."></div><div class='friend'>".$line['username']."</div></div>";
                        //print "";
                    }

                    ?>

            </div>
        </div>
        <div id="bottomPanel">
            <textarea>
            </textarea>
            <input type="submit" value="send" />
        </div>
    </div>​​​​​​​​​​​​​


</body>
</html>

<?php
/*
 *
<div class="bubble">
                    <span>Name:</span>
                    <span>tessadsda dassss das asd ad </span>
                </div>
                <div class="bubble">
                    <span>Name:</span>
                    <span>tessadsda da das asd ad </span>
                </div>
                <div class="bubble">
                    <span>Name:</span>
                    <span>tessadsda da das asd ad </span>
                </div>


                <div clas="bubble"></div>


 */
?>