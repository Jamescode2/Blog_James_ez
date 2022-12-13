<?php
session_start();
unset( $_SESSION[ 'login' ] );
unset( $_SESSION[ 'mdp' ] );
unset( $_SESSION[ 'titre' ] );
unset( $_SESSION[ 'contenu' ] );
session_destroy();
header( 'Location:index.php' );
exit();
?>