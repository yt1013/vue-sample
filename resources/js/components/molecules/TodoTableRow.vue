<template>
    <tr>
        <td>{{todo.id}}</td>
        <td>{{todo.title}}</td>
        <td>{{todo.content}}</td>
        <td>{{todo.status}}</td>
        <td>
            <select-input
                :todo_id="todo.id"
                :todo_status="todo.status">
            </select-input>
        </td>
        <td>
            <button-input
                :todo_id="todo.id">
            </button-input>
        </td>
    </tr>
</template>

<script>
    import SelectInput from "../atoms/inputs/SelectInput";
    import ButtonInput from "../atoms/inputs/ButtonInput";

    export default {
        name: "TodoTableRow",

        components: {
            SelectInput,
            ButtonInput
        },

        props: [
            'todo'
        ]
    }
</script>

<style scoped>

</style>
