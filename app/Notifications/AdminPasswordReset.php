<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminPasswordReset extends Notification
{
    use Queueable;

    // La méthode toMail envoie l'e-mail de réinitialisation de mot de passe
    public function toMail($notifiable)
    {
        $url = url('/password/reset'); // Lien vers votre page de réinitialisation de mot de passe

        return (new MailMessage)
            ->subject('Réinitialisation de votre mot de passe')
            ->line('Bonjour ' . $notifiable->name . ',')
            ->line('Vous avez été ajouté en tant qu\'administrateur.')
            ->action('Définir votre mot de passe', $url)
            ->line('Merci d\'utiliser notre application!');
    }

    // Autres méthodes (par exemple, toArray) peuvent être ajoutées si nécessaire
}
