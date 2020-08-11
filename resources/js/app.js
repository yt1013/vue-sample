require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import TodoTable from "./components/todo/parts/TodoTable";

Vue.use(Vuex);
Vue.component('todo-table', TodoTable);

const app = new Vue({
    el: '#app',

    data: {
        new_todo_title: '',
        new_todo_content: '',
        new_todo_status: '',
        todos: []
    },

    methods: {
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
        }
    }
});
