<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // E-mailgegevens instellen
    $to = "heiveld.opwijk@gmail.com"; // Je e-mailadres
    $subject = "Nieuw bericht van $name";
    $body = "Naam: $name\nE-mail: $email\n\nBericht:\n$message";
    $headers = "From: $email";

    // E-mail verzenden
    if (mail($to, $subject, $body, $headers)) {
        echo "Bericht succesvol verzonden! We nemen zo snel mogelijk contact met je op.";
    } else {
        echo "Er is iets misgegaan, probeer het later opnieuw.";
    }
} else {
    echo "Ongeldige verzoekmethode.";
}
?>
