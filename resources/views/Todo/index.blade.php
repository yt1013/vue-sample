@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <br>
        </div>
        <todo-table></todo-table>
        <store-todo-form></store-todo-form>
    </div>
</div>
@endsection
