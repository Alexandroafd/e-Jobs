<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Notification d'emploi</title>
    </head>
    <body>      <!-- Mailtrap -->
        <h1> Hello {{ $mailData['employer']->name }} </h1>

        <p> Job postulé : {{ $mailData['job']->title }} </p>

        <p> Informations du candidat: </p>

        <!--<p> Nom: {{ $mailData['user']->name }} </p> -->
        <p> Email: {{ $mailData['user']->email }} </p>
        <p> Mobile : {{ $mailData['user']->phone }} </p>
        
    </body>
</html>