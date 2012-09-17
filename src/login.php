<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT.'dvwa/includes/dvwaPage.inc.php';
dvwaPageStartup( array( 'phpids' ) );
dvwaDatabaseConnect();

if( isset( $_POST[ 'Login' ] ) ) {

    $user = $_POST[ 'username' ];
    $user = stripslashes( $user );
    $user = mysql_real_escape_string( $user );

    $pass = $_POST[ 'password' ];
    $pass = stripslashes( $pass );
    $pass = mysql_real_escape_string( $pass );
    $pass = md5( $pass );

    $qry = "SELECT * FROM `users` WHERE user='$user' AND password='$pass';";
    $result = @mysql_query($qry) or die('<pre>' . mysql_error() . '</pre>' );
    ...
    <!-- <img src=\"".DVWA_WEB_PAGE_TO_ROOT."dvwa/images/RandomStorm.png\" /> -->

    <p>Damn Vulnerable Web Application (DVWA) is a RandomStorm OpenSource project</p>
    </div> <!-- end align div -->
    </body>
</html>
";
?>
