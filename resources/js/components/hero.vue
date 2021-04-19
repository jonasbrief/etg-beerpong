<template v-if="this.$router.currentRoute.fullPath = '/'">
<section class="hero is-medium is-link">
  <div class="hero-body">
    <p class="title">
      Herzlich Willkommen zum 1. ETG-Beerpong Turnier 2021
    </p>
    <p class="subtitle">
      Viel Spaß und Trinkfestigkeit beim digital-geselligen genießen diverser kühler Blonder. <br> 
      Für das offizielle Regelwerk der European Series of Beer Pong klickt auf <i>Regelwerk</i> <br>
      <strong> Gut kick! </strong>
      
    </p>
    <p class="content">
       <a href="https://cdn.shopify.com/s/files/1/0001/9064/4262/files/beerpong-turnierregeln.pdf?v=1603379144" target="blank"> <button class="button button is-light is-link"> Regelwerk </button>  </a>
    </p>

    <p class="subtitle">
      Erstellt zuerst euer Team über den Create Team Knop oben rechts. Dann könnt ihr euer Team und das gegnereische Team zu einem Raum hinzufügen.
      Achtung, nur ein Team fügt beide Teams zum Raum hinzu und startet das Spiel. <br>
      Der aktuelle Stand des Raumens wird durch Neuladen der Seite geladen.
    </p>
  </div>
</section>
</template>

<script>
import {mapGetters} from 'vuex'
    export default {
        name: 'hero',
        mounted() {
            console.log(this.$router.currentRoute.fullPath)
        },
        methods: {
        },
        computed: {
        }
    }
</script>
