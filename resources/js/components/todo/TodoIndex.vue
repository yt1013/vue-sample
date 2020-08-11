<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <br>
            </div>
            <store-todo-form @reload="reloadTodos"></store-todo-form>
            <div class="col-xs-12">
                <br>
            </div>
            <todo-table ref="todoTable"></todo-table>
        </div>
    </div>
</template>

<script>
    import TodoTable from "./parts/TodoTable";
    import StoreTodoForm from "./parts/StoreTodoForm";

    export default {
        name: "TodoIndex",

        components: {
            TodoTable,
            StoreTodoForm
        },

        methods: {
            reloadTodos() {
                this.$refs.todoTable.getTodos();
            }
        }
    }
</script>

<style scoped>

</style>
