<template>
    <div>

    <section class="hero is-danger mb-4" v-if="errors.length">
  <div class="hero-body has-text-centered">
    <p class="subtitle">
        <ul>
            <li v-for="error in errors">{{ error }}</li>
        </ul>
    </p>
  </div>
</section>
        <svg viewBox="90 67.52 173.458 244.47" xmlns="http://www.w3.org/2000/svg" style="max-height: 400px;">
  <rect style="fill: rgb(216, 216, 216);" x="90.221" y="67.52" width="173.458" height="244.47" rx="10" ry="10"/>
  <circle :class="{fillgreen: fill.cup_1, fillred: !fill.cup_1}" cx="122" cy="90" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0"  v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="1"/>
  <circle :class="{fillgreen: fill.cup_2, fillred: !fill.cup_2}" cx="158" cy="90" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="2"/>
  <circle :class="{fillgreen: fill.cup_3, fillred: !fill.cup_3}" cx="194" cy="90" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="3"/>
  <circle :class="{fillgreen: fill.cup_4, fillred: !fill.cup_4}" cx="230" cy="90" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="4"/>
  <circle :class="{fillgreen: fill.cup_17, fillred: !fill.cup_17}" cx="122" cy="288" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="17"/>
  <circle :class="{fillgreen: fill.cup_18, fillred: !fill.cup_18}" cx="158" cy="288" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="18"/>
  <circle :class="{fillgreen: fill.cup_19, fillred: !fill.cup_19}" cx="194" cy="288" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="19"/>
  <circle :class="{fillgreen: fill.cup_20, fillred: !fill.cup_20}" cx="230" cy="288" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="20"/>
  <circle :class="{fillgreen: fill.cup_14, fillred: !fill.cup_14}" cx="140" cy="259.022" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="14"/>
  <circle :class="{fillgreen: fill.cup_15, fillred: !fill.cup_15}" cx="175.6" cy="258.44" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="15"/>
  <circle :class="{fillgreen: fill.cup_16, fillred: !fill.cup_16}" cx="215" cy="257.276" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="16"/>
  <circle :class="{fillgreen: fill.cup_5, fillred: !fill.cup_5}" cx="140" cy="121.362" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="5"/>
  <circle :class="{fillgreen: fill.cup_6, fillred: !fill.cup_6}" cx="175.6" cy="120.78" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="6"/>
  <circle :class="{fillgreen: fill.cup_7, fillred: !fill.cup_7}" cx="215" cy="119.616" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="7"/>
  <circle :class="{fillgreen: fill.cup_8, fillred: !fill.cup_8}" cx="156" cy="148.719" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="8"/>
  <circle :class="{fillgreen: fill.cup_9, fillred: !fill.cup_9}" cx="193" cy="148.137" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="9"/>
  <circle :class="{fillgreen: fill.cup_12, fillred: !fill.cup_12}" cx="156" cy="228.463" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="12"/>
  <circle :class="{fillgreen: fill.cup_13, fillred: !fill.cup_13}" cx="193" cy="227.881" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="13"/>
  <circle :class="{fillgreen: fill.cup_11, fillred: !fill.cup_11}" cx="175" cy="200.815" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="11"/>
  <circle :class="{fillgreen: fill.cup_10, fillred: !fill.cup_10}" cx="175" cy="172.293" r="12.606" bx:origin="0.536 0.482" v-on:click="changeCup($event, table)" stroke="white" stroke-width="0" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave" v-bind:ident="10"/>
</svg>
</div>   
</template>
    
    <script>
import bptcontrol from './bptcontrol.vue';
    export default {
  components: { bptcontrol },
        name: 'svgTable',
        data() {
            return {
                errors: [],
            }
        },
        mounted() {
            this.$store.dispatch('fetchTables')    
        },
        methods: {
            changeCup(event, table){
                if(table.team_one === null){
                    if(this.errors.length < 1){
                        this.errors.push('Wähle erst die Teams und drücke dann Start.');
                    }
                }else {
                    this.errors = [];
                    let ident = event.target.getAttribute("ident");
                    return this.$store.dispatch('updateCup', {table: table, ident: ident})
                }
            },
            mouseover(event){
                event.currentTarget.style.strokeWidth = 1;
            },
            mouseleave(event){
                event.currentTarget.style.strokeWidth = 0;
            },
            }, 
        computed: {
            table() {
                return this.$store.getters.tableById(parseInt(this.$route.params.id));

            },
            fill() {
                let table = this.$store.getters.tableById(parseInt(this.$route.params.id));
               return table;
            }
        }
        }
    </script>
    
    <style scoped>
    .fillred{
        fill: red;
    }

    .fillgreen{
        fill: green;
    }

    .blocked{
        height: 50%;
        width: 50%;
    }
    </style>