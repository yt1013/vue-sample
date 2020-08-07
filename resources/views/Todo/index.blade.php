<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- ←① -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- ←② -->
    <title>Laravel-Vue-todo</title>
</head>
<body>
<div id="app"> <!-- ←③ -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
            </div>
            <div class="col-xs-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>タスク名</th>
                        <th>タスク内容</th>
                        <th>タスク状況</th>
                        <th>タスク状況編集</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="todo in todos" v-bind:key="todo.id">
                        <td>@{{ todo.id }}</td>
                        <td>@{{ todo.title }}</td>
                        <td>@{{ todo.content }}</td>
                        <td>@{{ todo.status }}</td>
                        <td>
                            <select v-model="edit_todo_status">
                                <option>未着手</option>
                                <option>着手中</option>
                                <option>完了</option>
                            </select>
                            <button class="btn btn-success" type="button" v-on:click="editStatus(todo.id)">変更</button>
                        </td>
                        <td><button class="btn btn-primary" v-on:click="deleteTodo(todo.id)">削除</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script> <!-- ←④ -->
</body>
</html>
