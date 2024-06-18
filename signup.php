<?php include_once ("templates/heading.php");?>
<?php include_once ("templates/nav.php");?>
<body>

    <h1>Sign up to join the Mercedes-Benz family!&#127881;</h1> 
    <img src="images/logo.jpg" alt="Mercedes-Benz logo" width="30%" />
 
    <h2>Select language:</h2>
        <input type="checkbox" id="Swahili" name="" value=""><label for="Swahili">Swahili</label><br><br>
        <input type="checkbox" id="English" name="" value=""><label for="English">English</label><br><br>
        <input type="checkbox" id="Japanese" name="" value=""><label for="Japanese">Japanese</label><br><br>
        <input type="checkbox" id="Spanish" name="" value=""><label for="Spanish">Spanish</label><br><br>
        <input type="checkbox" id="German" name="" value=""><label for="German">German</label><br><br>
        <input type="checkbox" id="Chinese" name="" value=""><label for="Chinese">Chinese</label><br><br>
 
    <h2>Sign up:</h2>
    <form action="" autocomplete="off">
        <label for="fullname">Fullname:</label><br>
        <input type="text" name="fullname" placeholder="Fullname" id="fullname"><br><br>
 
        <label for="password">Password:</label><br>
        <input type="password" name="userpass"placeholder="Password" id="password"><br><br>
        
        <label for="email">Email address:</label><br>
        <input type="email" name="email_address" placeholder="Email_address" id="email-address"><br><br>
        
        
        <select name="" id="">
         <option value="">--Select Gender--</option>
         <option value="">Female</option>
         <option value="">Male</option>
         <option value="">Rather not say</option>
         <option value="">Custom</option>
     </select>
     <br><br>
     
     <input type="submit" value="Sign Up">
     </form>
 
     <?php include_once("templates/footer.php");?>
 
</body>
</html>