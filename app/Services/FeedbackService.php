<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Exceptions\TimeException;
use App\Jobs\FeedbackMailJob;


class FeedbackService 
{
    public function createFeedback()
    {
        if ($feedback = Feedback::where('user_id', \Auth::user()->getKey())->first()){
            $time = date("Y-m-d H:i:s");
            if (($res = strtotime($time) - strtotime($feedback->created_at)) < 86400) {
                $res = round((86400 - $res) / 60 / 60, 0);
                throw new TimeException($res);
            }
        }
    }

    public function storeFeedback(Request $request)
    {
        $feedback = Feedback::create([
            'title' => $request->title,
            'message' => $request->text,
            'file' => $request->file->getClientOriginalName(),
            'user_id' => \Auth::user()->getKey(),
        ]);
        $request->file('file')->move(public_path('files'), $request->file->getClientOriginalName());
        FeedbackMailJob::dispatch($feedback);
    }
}
