<?php

namespace App\Controllers;

use Bpjs\Framework\Helpers\BaseController;
use Bpjs\Framework\Core\Request;
use Bpjs\Framework\Helpers\Validator;
use Bpjs\Framework\Helpers\View;
use Bpjs\Framework\Helpers\CSRFToken;

class CollaborationController extends BaseController
{
    // Controller logic here
    public function indexComments()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('collaboration/comments.stanley');
        }
        return view('collaboration/comments.stanley',[''],'layouts/app.stanley');
    }

    public function indexAttachments()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('collaboration/attachments.stanley');
        }
        return view('collaboration/attachments.stanley',[''],'layouts/app.stanley');
    }

    public function indexActivity()
    {
        if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
            return view('collaboration/activity.stanley');
        }
        return view('collaboration/activity.stanley',[''],'layouts/app.stanley');
    }
}
