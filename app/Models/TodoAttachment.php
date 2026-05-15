<?php

namespace App\Models;
use Bpjs\Framework\Helpers\BaseModel;

class TodoAttachment extends BaseModel
{
    // Model logic here
    protected string $table = 'todo_attachments';
    protected string $primaryKey = 'id';
}
