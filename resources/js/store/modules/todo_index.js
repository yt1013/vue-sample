const state = {
    todos: []
};

const getters = {
    todo: state => state.todo
};

const actions = {
    setTodos({ commit }) {
        axios.get('/api/todo').then((res) => {
            state.todos = res.data; // 取得したTODOリストを格納
        })
    }
};

const mutations = {
    setTodos (state) {
        axios.get('/api/todo').then((res) => {
            state.todos = res.data; // 取得したTODOリストを格納
        })
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}
