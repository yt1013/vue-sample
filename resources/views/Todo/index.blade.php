@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <br>
        </div>
        <todo-table></todo-table>
        <div class="col-xs-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="タスク名を入力してください" v-model="new_todo_title">
                <input type="text" class="form-control" placeholder="タスク内容を入力してください" v-model="new_todo_content">
                <select v-model="new_todo_status">
                    <option>未着手</option>
                    <option>着手中</option>
                    <option>完了</option>
                </select>
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button" v-on:click="storeTodo">タスクを登録</button>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
