<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'question' => 'Question 1',
        ]);

        Question::create([
            'question' => 'Question 2',
        ]);

        Question::create([
            'question' => 'Question 3',
        ]);

        Question::create([
            'question' => 'Question 4',
        ]);

        Question::create([
            'question' => 'Question 5',
        ]);

        Question::create([
            'question' => 'Question 6',
        ]);

        Question::create([
            'question' => 'Question 7',
        ]);

        Question::create([
            'question' => 'Question 8',
        ]);

        Question::create([
            'question' => 'Question 9',
        ]);

        Question::create([
            'question' => 'Question 10',
        ]);
    }
}
