<footer>
    <p>
    <?php
    if(isset($_COOKIE["userCountryCode"]) == true && !empty($_COOKIE["userCountryCode"]))
    {
      echo '<img src=flags/' . $_COOKIE["userCountryCode"] . '.png></img>';
    }
    else
    {
        echo "<a href='T3_REA_Oefening6_1.php'>Geef een land op</a>";
    }
    if(isset($_COOKIE["userUsernameCookie"]) == true)
    {
      echo 'Welcome, ' . $_COOKIE["userUsernameCookie"];
    }
    ?>
    </p>
</footer>