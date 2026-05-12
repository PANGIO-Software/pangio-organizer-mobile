<?php
namespace App\Models;

/**
 * @author Julius Derigs <julius.derigs@pangio.de>
 */

class TaskModel extends Base {
    protected static string $table = 'tasks';
    protected static array $fields = [
        'name',
        'scheduled_for',
        'description',
        'list_id',
        'user_id',
        'deleted',
        'created',
        'updated'
    ];
}