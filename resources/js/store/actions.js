import axios from "axios"

let actions = {
    addRoom({commit}) {
        axios.put('/api/table/addRoom')
            .then(res => {
                commit('ADD_ROOM', res.data)
            }).catch(err => {
            console.log(err)
        })

    },
    fetchTables({commit}) {
        axios.get('/api/tables')
            .then(res => {
                commit('FETCH_TABLES', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    delLastRoom({commit}, table) {
        axios.delete(`/api/table/delLast`)
            .then(res => {
                    commit('DEL_LAST_TABLE', table)
            }).catch(err => {
            console.log(err)
        })
    },
    resetTable({commit}, payload) {
        axios.put(`/api/table/reset/${payload.table.table_id}`,payload)
            .then(res => {
                commit('RESET_TABLE', {resData: res.data, table: payload.table})
            }).catch(err => {
                console.log(err)
            })
    },
    randomTable({commit}, table) {
        axios.put(`/api/table/random/${table.table_id}`)
            .then(res => {
                commit('RANDOM_TABLE',  {resData: res.data, table: table})
            }).catch(err => {
                console.log(err)
            })
    },
    showTable({commit}, id) {
        axios.get(`/api/table/show/${id}`)
            .then(res => {
                commit('SHOW_TABLE', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    setTeams({commit}, payload) {
        axios.post(`/api/table/setTeams/${payload.table.table_id}`, payload)
            .then(res => {
                commit('SET_TEAMS', {resData: res.data, table: payload.table})
            }).catch(err => {
                console.log(err)
            })
    },
    updateCup({commit}, payload) {
        axios.post(`/api/table/updateCup`, payload)
            .then(res => {
                commit('UPDATE_TABLE_CUP', {resData: res.data, table: payload.table})
            }).catch(err => {
                console.log(err)
            })
    },

    addWinner({commit}, payload) {
        axios.post(`/api/leaderboard/addWinner`, payload)
            .then(res => {
                commit('ADD_WINNER', {resData: res.data, table: payload.id})
            }).catch(err => {
                console.log(err)
            })
    },

    createTeam({commit}, payload) {
        axios.post(`/api/team/create`, payload.team)
            .then(res => {
                commit('CREATE_TEAM', {resData: res.data})
            }).catch(err => {
                console.log(err)
            })
    },
    fetchTeams({commit}) {
        axios.get('/api/teams')
            .then(res => {
                commit('FETCH_TEAMS', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    fetchLeaderboard({commit}) {
        axios.get('/api/leaderboard')
            .then(res => {
                commit('FETCH_LEADERBOARD', res.data)
            }).catch(err => {
            console.log(err)
        })
    },

}

export default actions