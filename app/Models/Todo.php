<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Model\User;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['id','content', 'created_at','update_at'];
    protected $table = 'todos';
    /**
     * 一覧画面表示用にtodosテーブルから全てのデータを取得
     */
    public function findAllTodos()
    {
        return Todo::all();
    }

    /**
     * リクエストされたIDをもとにtodosテーブルのレコードを1件取得
     */
    public function findTodoById($id)
    {
        return Todo::find($id);
    }

    /**
     * 登録処理
     */
    public function InsertTodo($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'content' => $request->content,
        ]);
    }

    /**
     * 更新処理
     */
    public function updateTodo($request, $book)
    {
        $result = $book->fill([
            'content' => $request->content
        ])->save();

        return $result;
    }


    public function deleteTodoById($id)
    {
        return $this->destroy($id);
    }
}