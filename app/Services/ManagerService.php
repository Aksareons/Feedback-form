<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Feedback;

class ManagerService 
{
    public function viewedFeedback($id)
    {
        $feedback = Feedback::where('id', $id)->first();
        $feedback->viewed = 1;
        $feedback->save();
        
        return $feedback;
    }
}