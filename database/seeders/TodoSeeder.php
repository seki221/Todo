<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\todos;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo_lists')->insert(
            [
                [
                    'content' => 'テスト1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'テスト2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => 'テスト3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
