<template>
<b-navbar>
    <template #brand>
        <b-navbar-item>    
            <router-link to="/"> 
            <div class="is-flex">
                <img src="img/etg-logo.png" class="mr-3">
                <p class="has-text-black"> ETG BeerPong </p> 
            </div>

            </router-link>
        </b-navbar-item>
    </template>
    <template #end>
        <b-navbar-item tag="div" @click="isCreateTeamsModalActive = true">
            <a class="button is-primary">
                <p class="has-text-white"> Create Team </p> 
            </a>
        </b-navbar-item>

        <router-link to="/">
        <b-navbar-item tag="div">
            <a class="button is-primary">
                <p class="has-text-white"> Räume </p> 
            </a>
        </b-navbar-item>
        </router-link>

        <router-link to="/leaderboard">
        <b-navbar-item tag="div">
       
            <a class="button is-primary">
                <p class="has-text-white"> Tribühne </p> 
            </a>
        </b-navbar-item>
        </router-link>

        <b-navbar-item tag="div" @click="isAdminModalActive = true" v-if="isLoggedIn()">
            <a class="button is-primary">
                <p class="has-text-white"> Admin </p> 
            </a>
        </b-navbar-item>
        

        <b-modal v-model="isAdminModalActive">
            <div class="columns m-4 is-centered">
                <div class="colum">
                    <button class="button is-primary is-fullwidth is-light mt-2" v-on:click="addRoom"> Add Room ({{tables.length}}) </button>
                    <button class="button is-primary is-fullwidth is-light mt-2" v-on:click="delLastRoom"> Delete Last Room </button>
                </div>
            </div>
        </b-modal>

        <b-modal v-model="isCreateTeamsModalActive">
            <div class="columns m-4 is-centered">
                <div class="column" width="200">
                    <div class="control">
                    <b-field label="Enter Teamame">
                        <b-input v-model="form.team_name" placeholder="Der beste Teamname der Welt"></b-input>
                    </b-field>
                    <b-field label="Enter Member 1">
                        <b-input v-model="form.member_one" placeholder="Bert"></b-input>
                    </b-field>
                    <b-field label="Enter Member 2">
                        <b-input v-model="form.member_two" placeholder="Monik"></b-input>
                    </b-field>
                    <button class="button is-primary is-fullwidth is-light mt-2" v-on:click="createTeam(form)" @click="isCreateTeamsModalActive = false"> Save </button>
                    </div>
                </div>
            </div>
        </b-modal>
    </template>
</b-navbar>
</template>
    
    <script>
    import {mapGetters} from 'vuex'
    export default {
        name: 'navbar',
        data() {
            return {
                isAdminModalActive: false,
                isCreateTeamsModalActive: false,
                form: {
                    team_name: '',
                    member_one: '',
                    member_two: ''
                }
            }
        },
        mounted() {
            this.$store.dispatch('fetchTables');
        },
        methods: {
            addRoom() {
                this.$store.dispatch('addRoom')
            },
            delLastRoom() {
                this.$store.dispatch('delLastRoom')
            },
            addWinner(id) {
                this.$store.dispatch('addWinner', {id: id})
            },
            createTeam(form) {
                this.$store.dispatch('createTeam', {team: form})
            },
            isLoggedIn() {
                let isLoggedIn =  $("meta[name=login-status]").attr('content');
                if(isLoggedIn == 1) {
                    return true;
                }else{
                    return false;
                }
            }
        },
        computed: {
            tables() {
                return this.$store.getters.tables;
            }
        }
    }
    </script>
    
    <style>
    
    </style>