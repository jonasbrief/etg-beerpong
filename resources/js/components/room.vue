<template>
    <div class="columns mt-4">      
            <div class="column is-2">
            </div>
            <div class="column is-4">
                 <svgTable></svgTable>
            </div>   
            <div class="column is-4">
                <bptcontrol></bptcontrol>
            </div>
            <div class="column is-2">
            </div>     
    </div>
</template>
    
    <script>
import bptcontrol from './bptcontrol.vue'
import SvgTable from './svgTable.vue'
    export default {
  components: { bptcontrol, SvgTable },
        name: 'room',
        methods: {
        }
    }
    </script>
    
    <style>
    
    </style> 