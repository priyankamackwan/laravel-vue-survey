<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Question::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->user_id;
        $requests = $request->all();
        unset($requests['user_id']);
        try {
            if(count($requests) > 0 && $user_id != '') {
                foreach($requests as $key => $req) {
                    $question_id = explode('_',$key)[1];

                    $survay = new Survey;
                    $survay->user_id = $user_id;
                    $survay->question_id = $question_id;
                    $survay->answer = $req;
                    $survay->save();
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Survay saved'
                ]);
            }

    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        return $userDetail;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }


    public function answer(Request $request) {
        $user_id = $request->user_id;
        $total_users = Survey::where('user_id', '!=', $user_id)->distinct()->count('user_id');
        if($total_users == 0) {
            $total_users = 1;
        }
        $questions = Question::with(['Answer' => function($q) use ($user_id){
            $q->where('user_id', $user_id);
        }])->with(['AvgAnswer' => function($q) use ($user_id){
            $q->where('user_id', '!=', $user_id);
        }])->get();

        $survays = [];
        foreach($questions as $question) {
            $total = 0;
            foreach($question->AvgAnswer as $avg_ans) {
                $total += $avg_ans->answer;
            }
            $survays[$question->id]['question'] = $question->question;
            $survays[$question->id]['answer'] = $question->Answer->answer;
            $survays[$question->id]['avg_answer'] = $total / $total_users;
        }

        return response()->json([
            'success' => true,
            'data' => $survays
        ]);
    }

}
