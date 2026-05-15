<?php

namespace App\Models;
use Bpjs\Framework\Helpers\BaseModel;

class ActivityLog extends BaseModel
{
    // Model logic here
    protected string $table = 'activity_log';
    protected string $primaryKey = 'id';
}
