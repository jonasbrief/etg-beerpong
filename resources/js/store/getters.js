let getters = {
    tables: state => {
        return state.tables
    },

    tableById: (state) => (id) => {
        return state.tables.find(
            table => table.table_id === id
        );
    },

    leaderboard: state => {
        return state.leaderboard
    },

    teams: state => {
        return state.teams
    },

    teamByTableId: (state) => (id) => {
        return state.teams.find(
            team => team.table_id === id
        );
    },

    teamById: (state) => (id) => {
        return state.teams.find(
            team => team.id === id
        );
    }
}

export default  getters