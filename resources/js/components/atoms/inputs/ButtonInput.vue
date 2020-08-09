<template>
    <button class="btn btn-primary" v-on:click="deleteTodo(todo_id)">削除</button>
</template>

<script>
    export default {
        name: "ButtonInput",

        props: {
            todo_id: {},
            todos: {}
        },

        methods: {
            deleteTodo: function (todo_id) {
                axios.post('/api/todo/delete', {
                    todo_id: todo_id
                }).then((res) => {
                    this.todos = res.data;
                })
            }
        }
    }
</script>

<style scoped>

</style>
