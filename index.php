<?php require_once("server.php");

if(isset($_SESSION['username']))
{
    $con = mysqli_connect("localhost", "root", "","software_engeeniring");

    $usertype = $_SESSION['usertype'];
    $sql = "SELECT * FROM links where Typenum='$usertype'";
              $result = mysqli_query($con,$sql);
              
              while($row = mysqli_fetch_array($result))
              {
                  ?>
                  <a href=<?php echo $row['Links'];?>><?php echo $row['Name']?></a><br>
                      <?php
              } 
              ?>
                <form action="server.php" method="post">
                <input type="submit" name="Logout" value="Logout">
                </form>

              <?php
              
}


else{
    ?>
    
<h1>Welcome</h1>
<a href='login.html'>Login</a>
<br>
<a href='signup.html'>Sign up</a>
<br>
<?php
}
?>
