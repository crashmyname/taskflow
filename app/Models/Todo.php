<?php

namespace App\Models;
use Bpjs\Framework\Helpers\BaseModel;

class Todo extends BaseModel
{
    // Model logic here
    protected string $table = 'todos';
    protected string $primaryKey = 'id';
}
