# frameworkphp3wa
* C'est un framework php que j'ai créé avec le formateur Cyril pendant la formation de 3WA.

## les règles
* Utiliser une architecture MVC (Model / Vue / Controller)
* Utiliser le design pattern Front Controller
* Utiliser HTTPFoundation de Symfony (https://symfony.com/doc/current/create_framework/http_foundation.html#going-oop-with-the-httpfoundation-component)
* Un système de routes simples mais permettant de gérer les différents verb, méthodes HTTP (GET, POST, PUT, DELETE). 
* Utiliser un moteur de templates (Twig)
* Préparer une interface de Cache, nous créerons une classe de cache, (nous utiliserons Redis dans notre futur projet).
* Vous devrez documenter votre code.

<h2>Outils installés</h2>
<ul>
    <li>twig</li>
    <li>PDO</li>
    <li>FlashBag</li>
    <li>Routage</li>
    <li>Bootstrap</li>
    <li>JQuery</li>
    <li>PHPUnit</li>
    <li>Page 404</li>
    <li>
        Services:
        <ul>
            <li>Convertir un objet en array</li>
            <li>Verification de mot de passe</li>
        </ul>
    </li>
</ul>

<h2>Remarques</h2>
<ul>
    <li>config.php est le fichier servant à stocker toute la configuration du projet, il ne faut pas l'envoyer sur github</li>
</ul>