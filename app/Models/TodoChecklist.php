<?php

namespace App\Models;
use Bpjs\Framework\Helpers\BaseModel;

class TodoChecklist extends BaseModel
{
    // Model logic here
    protected string $table = 'todo_checklist';
    protected string $primaryKey = 'id';
}
