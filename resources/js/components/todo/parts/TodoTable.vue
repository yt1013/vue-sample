<template>
    <div class="col-xs-6">
        <table class="table">
            <todo-table-header></todo-table-header>
            <todo-table-body
                v-for="todo in todos"
                v-bind:key="todo.id"
                :todo="todo"
                @get="getTodos"
            >
            </todo-table-body>
        </table>
    </div>
</template>

<script>
    import TodoTableHeader from "../../molecules/TodoTableHeader";
    import TodoTableBody from "../../molecules/TodoTableBody";

    export default {
        name: "TodoTable",

        components: {
            TodoTableHeader,
            TodoTableBody
        },

        data: function () {
            return {
                todos: []
            }
        },

        methods: {
            getTodos: function () {
                axios.get('/api/todo').then((res) => {
                    this.todos = res.data; // 取得したTODOリストを格納
                })
            }
        },

        created() {
            this.getTodos()
        }
    }
</script>

<style scoped>

</style>
