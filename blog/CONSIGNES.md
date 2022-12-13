# Consignes

En vous basant sur le code du fichier `index.php`, réalisez le découpage et les traitements suivants :


## Page index.php

- si l'utilisateur est connecté : les boutons et formulaires suivant doivent être visibles : *ajouter un article, se déconnecter, formulaire d'ajout d'article*,
- si l'utilisateur est déconnecté, les boutons et formulaires suivant doivent être visibles : *se connecter (haut de page), formulaire "se connecter" (bas de page)*
- les liens "*Se déconnecter*" et "*Se connecter*" redirigent vers des pages qu'il vous faudra créer
- lorsque l'utilisateur valide le formulaire de connexion (bas de page), il est redirigé sur la page "`se-co.php`"
- lorsque l'utilisateur valide le formulaire d'ajout d'article, la page "`index.php`" se recharge et réalise le traitement
- lorsque l'utilisateur ajoute un article, une série de vérifications est réalisée (à vous de déterminer les vérifications les plus judicieuses à réaliser). Si le résultat de ces vérifications est concluant, le contenu de l'article envoyé devra s'afficher à la place du formulaire d'ajout d'article. Dans le cas contraire, un message d'erreur devra s'afficher en haut du formulaire


## Page se-co.php

- la page doit gérer à la fois l'affichage d'un formulaire d'identification et son traitement
- lors de la réception des paramètres envoyés, vérifiez que les paramètres sont correctement remplis
- si cette condition est respectée, les données seront stockées en SESSION
- si cette condition est respectée, vous affichez le message suivant : Bonjour ##Login## ! Votre mot de passe est ##Mot de passe##
- si cette condition est respectée, un lien pour revenir à la page "`index.php`" sera affiché


## Page se-deco.php

- déconnectez l'utilisateur, supprimez les variables de SESSION
- redirigez sur la page "`index.php`"