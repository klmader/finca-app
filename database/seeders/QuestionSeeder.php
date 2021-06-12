<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::factory()->create([
            'text' => 'Finca stuff?'
        ]);

        Question::factory()->count(3)->create();
    }
}
