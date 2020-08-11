require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import TodoIndex from "./components/todo/TodoIndex";

Vue.use(Vuex);
Vue.component('todo-index', TodoIndex);

const app = new Vue({
    el: '#app',
});
