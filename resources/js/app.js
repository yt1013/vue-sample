require('./bootstrap');

const app = new Vue({
    el: '#app',

    data: {
        new_todo_title: '',
        new_todo_content: '',
        new_todo_status: '',
        edit_todo_status: '',
        todos: []
    },

    methods: {
        getTodos: function () {
            axios.get('/api/todo').then((res) => {
                this.todos = res.data; // 取得したTODOリストを格納
            })
        },
        storeTodo: function () {
            axios.post('/api/todo/store', {
                todo_title: this.new_todo_title,
                todo_content: this.new_todo_content,
                todo_status: this.new_todo_status
            }).then((res) => {
                this.todos = res.data;
                this.new_todo_title = '';
                this.new_todo_content = '';
                this.new_todo_status = '';
            })
        },
        editStatus: function (todo_id) {
            axios.post('api/todo/edit', {
                todo_id: todo_id,
                todo_status: this.edit_todo_status
            }).then((res) => {
                this.todos = res.data;
            })
        },
        deleteTodo: function (todo_id) {
            axios.post('/api/todo/delete', {
                todo_id: todo_id
            }).then((res) => {
                this.todos = res.data;
            })
        }
    },

    created() { // インスタンス作成時にfetchTodoを実行するため、createdフックに登録
        this.getTodos()
    }
});
