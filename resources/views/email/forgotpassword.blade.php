<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mot de passe oublié</title>
    </head>
    <body>      <!-- Mailtrap -->
        <h1> Hello {{ $mailData['user']->name }} </h1>

        <p> Cliquer dessus pour changer votre mot de passe </p>

        <a href="{{ route('auth.resetPassword', $mailData['token']) }}">Cliquer ici</a>

        <p>Merci</p>
        
    </body>
</html>