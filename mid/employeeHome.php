<?php
?>

<html>
    <head>
        <title>Employee Home</title>
    </head>
        <body bgcolor="#E6E6FA">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <img src="../res/john.jpg" alt="john wick 3" width="100%" height="65%">
                <div id="table4">
                    <table width="110%">
                        <td><a href="http://localhost/project/pages/add2.php/"><h3>ADD</h3></a></td>
                        <td><a href="http://localhost/project/pages/update.php/"><h3>UPDATE</h3></a></td>
                        <td><a href="http://localhost/project/pages/ticket.php/"><h3>TICKETS</h3></a></td>
                        <td><a href="../Login/Login Page.php"><h3>LOG OUT</h3></a></td>
                    </table>
                </div>
                <footer>
                    <p>Created by: Sayedur Rahman Shihab</p>
                    <p>Contact information: <a href="s.rahman3443@gmail.com">
                    s.rahman3443@gmail.com</a>.</p>
                </footer>
            </form>
        </body>
</html>