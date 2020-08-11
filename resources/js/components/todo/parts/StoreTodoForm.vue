<template>
    <div class="col-xs-6">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="タスク名を入力してください" v-model="todo_title">
            <input type="text" class="form-control" placeholder="タスク内容を入力してください" v-model="todo_content">
            <select v-model="todo_status">
                <option>未着手</option>
                <option>着手中</option>
                <option>完了</option>
            </select>
            <span class="input-group-btn">
                  <button class="btn btn-success" type="button" v-on:click="storeTodo">タスクを登録</button>
                </span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "StoreTodoForm",

        props: {
            todo_title: String,
            todo_content: String,
            todo_status: {}
        },

        methods: {
            storeTodo: function () {
                axios.post('/api/todo/store', {
                    todo_title: this.todo_title,
                    todo_content: this.todo_content,
                    todo_status: this.todo_status
                }).then((res) => {
                    this.todo_title = '';
                    this.todo_content = '';
                    this.todo_status = 0;
                    // this.$emit('reload', res.data)
                })
            }
        }
    }
</script>

<style scoped>

</style>
