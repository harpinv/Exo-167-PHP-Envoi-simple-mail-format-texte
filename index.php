<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'Mon super message';
$to = 'vincent.harpin@gmail.com';
//$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.
//mail($to, $from, $message);

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.

$message = 'Je vais faire les courses au super marché. Je vais préparé à manger ce soir. Je vais jouer aux jeu vidéo pour me détendre. Je vas dormir pendant huite heure pour me reposer. Je vais regarder la télévision.';
$message = wordwrap($message, 70, "\r\n");
mail($to, $from, $message);
if(mail($to, $from, $message) === true) {
    echo "Le message a bien été envoyé. Merci !";
} else {
    echo "Une erreur est survenue lors de l'envoi du mail";
}

$file = fopen('mails.txt', 'a+b');
fwrite($file, $to . "\n");
fwrite($file, $message . "\n");
fclose($file);