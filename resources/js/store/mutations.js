import Vue from "vue"

let mutations = {
    ADD_ROOM(state, table) {
        state.tables.unshift(table)
    },
    FETCH_TABLES(state, tables) {
        return state.tables = tables
    },
    DEL_LAST_TABLE(state, table) {
        let index = state.tables.indexOf(table)
        state.tables.splice(index,1)
    },
    RESET_TABLE(state, payload) {
        let index = state.tables.indexOf(payload.table)
        Vue.set(state.tables, index, payload.resData)
    },
    RANDOM_TABLE(state, payload) {
        let index = state.tables.indexOf(payload.table)
        Vue.set(state.tables, index, payload.resData)
    },
    SHOW_TABLE(state, table) {
        return state.tables = table
    },
    SET_TEAMS(state, payload) {
        let index = state.tables.indexOf(payload.table)
        Vue.set(state.tables, index, payload.resData)
    },
    UPDATE_TABLE_CUP(state, payload) {
        let index = state.tables.indexOf(payload.table)
        console.log(payload.resData)
        Vue.set(state.tables, index, payload.resData)
    },
    ADD_WINNER(state, payload) {
        Vue.set(state.leaderboard, 0, payload.resData)
    },
    CREATE_TEAM(state, payload) {
        state.teams.unshift(payload.resData)
    },
    FETCH_TEAMS(state, teams) {
        return state.teams = teams
    },
    FETCH_LEADERBOARD(state, leaderboard) {
        return state.leaderboard = leaderboard
    },


}
export default mutations