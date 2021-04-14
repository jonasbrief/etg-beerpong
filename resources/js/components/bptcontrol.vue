<template>
<div>
<section class="hero is-danger" v-if="errors.length">
  <div class="hero-body">
    <p class="title">
      Please correct the following error(s):
    </p>
    <p class="subtitle">
        <ul>
            <li v-for="error in errors">{{ error }}</li>
        </ul>
    </p>
  </div>
</section>

    <!--<form @submit="saveTable($event, table)">-->
    <div class="columns mr-5">
        <div class="column mt-4">
            <div class="columns">
                <div class="column">
                    <button class="button is-primary is-light is-fullwidth mt-2" v-on:click="saveTable($event, table)" v-bind:disabled="isButtonActive()"> Start </button>
                    <!--<input type="submit" class="button is-primary is-light is-fullwidth " value="Save"> -->
                    <button class="button is-primary is-light is-fullwidth mt-2" v-on:click="resetTable(table)" v-bind:disabled="!isButtonActive()"> Reset </button>
                </div>
                <div class="column has-text-centered">      
                    <div class="mt-2" v-if="table.team_one"><p> {{getTeamName(table.team_one)}}</p></div>
                   
                    <div class="mt-2" v-if="!table.team_one">
                        <b-field label="Team 1">
                            <b-select placeholder="Select your Team" expanded v-model="team_one">
                                <option
                                    v-for="team in avaTeams"
                                    :value="team.id"
                                    :key="team.id">
                                    {{ team.team_name }}
                                </option>
                            </b-select>
                        </b-field>
                        
                    </div> 
                    <button class="button is-success is-fullwidth mt-2 " v-on:click="addWinner(table, getTeamName(table.team_one), getTeamMemberOne(table.team_one), getTeamMemberTwo(table.team_one))" v-bind:disabled="!(getHitCups() === 'cup_one')"> Winner </button>
                    <div class="divider"> VS </div>
                    <div class="mt-2" v-if="table.team_two"><p> {{getTeamName(table.team_two)}}</p></div>
                    <div class="mt-2" v-if="!table.team_two">
                        <b-field label="Team 2">
                            <b-select placeholder="Select your Team" expanded v-model="team_two">
                                <option
                                    v-for="team in avaTeams"
                                    :value="team.id"
                                    :key="team.id">
                                    {{ team.team_name }}
                                </option>
                            </b-select>
                        </b-field>
                       
                    </div> 
                    <button class="button is-success is-fullwidth mt-2 " v-on:click="addWinner(table, getTeamName(table.team_two), getTeamMemberOne(table.team_two), getTeamMemberTwo(table.team_two))" v-bind:disabled="!(getHitCups() === 'cup_two')"> Winner </button>
                </div>
            </div>
        </div>
    </div>
    <!-- </form> -->
</div>
</template>
    
    <script>
    import {mapGetters} from 'vuex'
    export default {
        name: 'bptcontrol',
        data() {
            return {
                errors: [],
                team_one: null,
                team_two: null,
                disabledActive: null,
            }
        },
        mounted() {
            this.$store.dispatch('fetchTables');
            this.$store.dispatch('fetchTeams');
        },
        methods: {
            resetTable(table) {
                this.$store.dispatch('resetTable', {table: table})
                this.$store.dispatch('fetchTeams');
            },
            randomTable(table) {
                this.$store.dispatch('randomTable', table)
            },
            setName(table, form) {
                this.$store.dispatch('setTeamNames', {table: table, form:form})
            },
            addWinner(table, teamname, member_one, member_two) {
                
                this.$store.dispatch('addWinner', {table:table, teamname: teamname, member_one:member_one, member_two: member_two})
                this.$store.dispatch('resetTable', {table: table})
                this.$store.dispatch('fetchTeams');
            },
            saveTable(e, table) {
                if(this.team_one && this.team_two && !(this.team_one === this.team_two)) {
                    this.$store.dispatch('setTeams', {table:table, team_one: this.team_one, team_two: this.team_two})
                    this.errors = [];
                }
                this.errors = [];

                if(!this.team_one) {
                    this.errors.push('Team 1 required');
                }

                if(!this.team_two) {
                    this.errors.push('Team 2 required');
                }

                if(this.team_one == this.team_two) {
                    this.errors.push('Do not select the same team twice.');
                }

                e.preventDefault();
            },
            getTeamName(id){
               return this.$store.getters.teamById(id).team_name;
            },
            getTeamMemberOne(id){
               return this.$store.getters.teamById(id).member_one;
            },
            getTeamMemberTwo(id){
               return this.$store.getters.teamById(id).member_two;
            },
            isButtonActive(){
                if(this.table.team_one && this.table.team_two){
                    return true;
                }else {
                    return false;
                }
            },
            getHitCups(){
                let cups = Object.values(this.table).slice(1,21);
                let cups_one = cups.slice(0,10);
                let cups_two = cups.slice(10,20);
                let count_one = 0;
                let count_two = 0;
                cups_one.forEach((cup) => {
                    if(cup == true){
                        count_one = count_one +1;
                    }
                })

                cups_two.forEach((cup) => {
                    if(cup == true){
                        count_two = count_two +1;
                    }
                })

                if(count_one == 10){
                    return 'cup_one';
                }

                if(count_two == 10){
                    return 'cup_two';
                }
            }
        }, 
        computed: {
            table() {
                return this.$store.getters.tableById(parseInt(this.$route.params.id));
            },
            teams() {
                return this.$store.getters.teams;
            },
            avaTeams(){
                let teams = this.$store.getters.teams;
                let avaTeams = teams.filter(team => team.table_id === null);
                return avaTeams;
            }
        }
    }
    </script>
    
    <style>
    
    </style>