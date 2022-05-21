<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Services\ManagerService;

class ManagerController extends Controller
{
    private $managerServise;

    public function __construct(ManagerService $managerServise)
    {
        $this->managerServise = $managerServise;
    }

    public function index()
    {
        $feedbacks = Feedback::get()->all();
        return view ('manager.index', compact('feedbacks'));
    }

    public function show($id)
    {       
        $feedback = Feedback::where('id', $id)->first();

        return view('manager.show', compact('feedback'));
    }
    
    public function update($id)
    {
       $feedback =  $this->managerServise->viewedFeedback($id);
        
        return view('manager.show', compact('feedback'));
    }
}
