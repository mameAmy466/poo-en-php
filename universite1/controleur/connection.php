<?php
function conn()
{

        try
        {
            $bdd = new PDO ('mysql:host=localhost;dbname=universite;charset=utf8','root','bqdqr1280');
            }
            catch (Exception $e)
            {
            die ("Erreur:".$e->getmessage());
         }
         return $bdd;
}

 ?>