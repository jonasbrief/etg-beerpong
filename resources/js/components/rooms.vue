<template>
    <div class="columns is-multiline m-4">
        <div class="column is-3" v-for="table of tables" :key="table.table_id">
            <div class="box has-background-primary-dark has-text-centered">              
                <div class="title has-text-white"> 
                    <p> Raum {{ table.table_id}} </p>
                </div>
                <router-link :to="{name: 'room', params: {id: table.table_id}}">
                    <button class="button"> 
                         Hier lang 
                    </button>
                    </router-link>
            </div>                
        </div>
    </div>
</template>
    import {mapGetters} from 'vuex'
    <script>
    export default {
        name: 'rooms',
        mounted() {
            this.$store.dispatch('fetchTables')    
        }, 
        computed: {
            tables() {
                console.log(this.$store.getters.tables.length)
                return this.$store.getters.tables.sort(function(a, b){return a - b}); //Macht, dass Array von 1 aufsteigend sortiert wird und nicht 10 vor 1 kommt
            }
        }
    }
    </script>
    
    <style>
    
    </style>