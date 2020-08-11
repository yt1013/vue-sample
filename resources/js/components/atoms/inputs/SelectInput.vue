<template>
    <div>
        <select v-model="todo_status" >
            <option>未着手</option>
            <option>着手中</option>
            <option>完了</option>
        </select>
        <button class="btn btn-success" type="button" v-on:click="editStatus(todo_id)">変更</button>
    </div>
</template>

<script>
    export default {
        name: "SelectInput",

        props: {
            todo_id: {},
            todo_status: {}
        },

        methods: {
            editStatus: function (todo_id) {
                axios.post('api/todo/edit', {
                    todo_id: todo_id,
                    todo_status: this.todo_status
                }).then((res) => {
                    this.$emit('reload')
                })
            },
        }
    }
</script>

<style scoped>

</style>
