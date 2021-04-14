<template>
    <div class="columns">
        <div class="column is-2">
        </div>
        <div class="column is-8">
            <div class="columns">
                <div class="colum is-4">
                    <button class="button is-primary is-fullwidth is-light mt-2" v-on:click="addRoom"> Add Room </button>
                </div>
                <div class="colum is-4 mt-4">
                    <p v-if="tables"> There are currently {{ tables.length }} Beerpong tables. </p>
                </div>
            </div>
        </div>
        <div class="column is-2">
        </div>
    </div>
</template>

<script>
import {mapGetters} from 'vuex'
    export default {
        name: 'admin',
        mounted() {
            this.$store.dispatch('fetchTables')    
        },
        methods: {
            addRoom() {
                this.$store.dispatch('addRoom')
            },
        },
        computed: {
            tables() {
                return this.$store.getters.tables;
            }
        }
    }
</script>
