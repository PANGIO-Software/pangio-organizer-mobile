<?php
namespace App\Models;

/**
 * @author Julius Derigs <julius.derigs@pangio.de>
 */

class ListModel extends Base {
    protected static string $table = 'lists';
    protected static array $fields = [
        'id',
        'name',
        'user_id',
        'erasable',
        'deleted',
        'created',
        'updated'
    ];
}