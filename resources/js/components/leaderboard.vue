<template>
<div>
    <section class="hero is-medium is-link mb-6">
        <div class="hero-body">
        <p class="title">
            Auf den Gewinner warten tolle Preise!
        </p>
    <p class="subtitle">
      Shampoo, Dosenbier und mehr!
    </p>
  </div>
</section>
    <div class="columns is-centered">
        <div class="column is-2">
        </div>
        <div class="column is-half ">
            <div class="box">
            <b-table 
                :data="leaderboard"
                default-sort="wins"
                default-sort-direction="desc"
                >
                <b-table-column field="wins" label="Wins" width="40" sortable  numeric v-slot="props">
                {{ props.row.wins }}
                </b-table-column>

                <b-table-column field="team_name" label="Teamname" v-slot="props">
                {{ props.row.team_name }}
                </b-table-column>

                <b-table-column field="member_one" label="Teammember" v-slot="props">
                {{ props.row.member_one }}
                </b-table-column>

                <b-table-column field="member_two" label="Teammember" v-slot="props">
                {{ props.row.member_two }}
                </b-table-column>

            </b-table>
            </div>
        </div>
        <div class="column is-2">
        </div>
    </div>
</div>
</template>
    import {mapGetters} from 'vuex'
    <script>
    export default {
        name: 'leaderboard',
        mounted() {
            this.$store.dispatch('fetchLeaderboard')    
        },
        computed: {
            leaderboard(){
                return this.$store.getters.leaderboard;
            }
        }
    }
    </script>
    
    <style>
    
    </style>