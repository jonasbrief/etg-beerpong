<template>
<div>
<div class="columns is-centered has-background-danger">
    <div class="column is-half">
<div class="box has-background-success " style="max-width: 500px;">
    <div class="columns is-multiline">
        <div class="column is-2 is-offset-2 has-text-centered">
            <span class="icon is-large" v-bind:class="{ 'has-text-danger': clicked}" v-on:click="clicked = !clicked">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>
        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>
        </div>
       <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 is-offset-3 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 is-offset-4 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 is-offset-5 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column is-12 has-text-centered">
            <div style="height: 20px; color:black; width: 100%;">
            </div>
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-2 is-offset-5 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-offset-4 is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
       <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 is-offset-3 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 is-offset-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
        <div class="column  is-2 has-text-centered">
            <span class="icon is-large">
                <i class="mdi mdi-48px mdi-cup"></i>
            </span>        </div>
    </div>
</div>
    </div>
</div>
</div>
</template>
    
    <script>
    export default {
        name: 'bptable',
        data() {
            return {
                clicked: false
            }
        }
    }
    </script>
    
    <style>
    
    </style>