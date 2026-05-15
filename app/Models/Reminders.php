<?php

namespace App\Models;
use Bpjs\Framework\Helpers\BaseModel;

class Reminders extends BaseModel
{
    // Model logic here
    protected string $table = 'reminders';
    protected string $primaryKey = 'id';
}
