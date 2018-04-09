<?php

/*
Le principe de fonctionnement des inclusions en PHP est plutôt simple à comprendre. Vous avez un site web composé de disons vingt pages. Sur chaque page, il y a un menu, toujours le même. Pourquoi ne pas écrire ce menu (et seulement lui) une seule fois dans une pagemenus.php?

En PHP, vous allez pouvoir inclure votre menu sur toutes vos pages. Lorsque vous voudrez modifier votre menu, vous n'aurez qu'à modifiermenus.phpet l'ensemble des pages de votre site web sera automatiquement mis à jour !

<?php include("menus.php"); ?> Cette instruction permet d'inclure le menu.php 

En résumé:

Une page PHP peut inclure une autre page (ou un morceau de page) grâce à l'instruction include.

L'instruction include sera remplacée par le contenu de la page demandée.

Cette technique, très simple à mettre en place, permet par exemple de placer les menus de son site dans un fichier menus.php que l'on inclura dans toutes les pages. Cela permet de centraliser le code des menus alors qu'on était auparavant obligé de le copier dans chaque page sur nos sites statiques en HTML et CSS !
*/









?>