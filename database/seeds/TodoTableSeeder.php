<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = DB::table('todos');

        $todo->insert([
            'title' => 'vueの勉強',
            'content' => 'todoリストを作成することでvueの使い方を学習する。',
            'status' => '着手中'
        ]);

        $todo->insert([
            'title' => 'vuexの勉強',
            'content' => '作ったTodoリストの一部にVuexを用いることで使い方を学習する。',
            'status' => '未着手'
        ]);

        $todo->insert([
            'title' => 'ソースのキャッチアップ',
            'content' => 'どこで何をしているか。特にどこでfetchしているかを理解する。',
            'status' => '未着手'
        ]);
    }
}
