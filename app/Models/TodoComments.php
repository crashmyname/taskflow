<?php

namespace App\Models;
use Bpjs\Framework\Helpers\BaseModel;

class TodoComments extends BaseModel
{
    // Model logic here
    protected string $table = 'todo_comments';
    protected string $primaryKey = 'id';
}
