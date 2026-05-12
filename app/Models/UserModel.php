<?php
namespace App\Models;

/**
 * @author Julius Derigs <julius.derigs@pangio.de>
 */

class UserModel extends Base {
    protected static string $table = 'users';
    protected static array $fields = [
        'id',
        'first_name',
        'last_name',
        'email',
        'password',
        'deleted',
        'created',
        'updated'
    ];
}