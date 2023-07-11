<?php

/*
|--------------------------------------------------------------------------
| Canales de transmisión
|--------------------------------------------------------------------------
|
| Aquí puedes registrar todos los canales de transmisión de eventos que tu
| aplicación admite. Los callbacks de autorización de canal proporcionados
| se utilizan para verificar si un usuario autenticado puede escuchar el canal.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
