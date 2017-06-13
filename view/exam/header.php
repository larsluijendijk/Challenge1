<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    bottom: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>

<?php
if (isset($_SESSION["roles"])){
    if($_SESSION["roles"] == "admin")
    {
        echo '
        <ul>
          <li><a href="http://localhost/Challenge1/user/users">Gebruikers</a></li>
          <li><a href="http://localhost/Challenge1/exam/index">Examens</a></li>
          <li><a href="logout">Logout</a></li>
        </ul> ';
    }
    else{
        echo '
        <ul>
          <li><a href="logout">logout</a></li>
        </ul>
        ';
    } 
}
else{
    echo '<ul><li>login</li></ul>';
}
?>