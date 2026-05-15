<?php

namespace App\Models;
use Bpjs\Framework\Helpers\BaseModel;

class WorkspaceMembers extends BaseModel
{
    // Model logic here
    protected string $table = 'workspace_members';
    protected string $primaryKey = 'id';
}
