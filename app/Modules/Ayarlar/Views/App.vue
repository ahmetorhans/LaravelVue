<template>
    <div class="row">
        <div class="col-12">
            <q-toolbar color="primary">
                <q-toolbar-title> ayarlar </q-toolbar-title>
                <q-btn flat round dense icon="mail" />
            </q-toolbar>
        </div>

        <div class="col-6">
            <q-field>
                <q-input v-model="text" float-label="Float Label" placeholder="Gigi" />
            </q-field>
        </div>

        <div class="col-6">
            <q-btn label="New item" />
        </div>
        
        <div class="col-12">
             <q-card inline style="width: 500px">
            <q-card-media>

            </q-card-media>
            <q-card-title>
                Cafe Basilico
                <q-rating slot="subtitle" v-model="stars" :max="5" />
                <div slot="right" class="row items-center">
                    <q-icon name="place" /> 250 ft
                </div>
            </q-card-title>
            <q-card-main>
                <p>$・Italian, Cafe</p>
                <p class="text-faded">Small plates, salads & sandwiches in an intimate setting.</p>
            </q-card-main>
            <q-card-separator />
            <q-card-actions>
                <q-btn flat round dense icon="event" />
                <q-btn flat label="5:30PM" />
                <q-btn flat label="7:30PM" />
                <q-btn flat label="9:00PM" />
                <q-btn flat color="primary" label="Reserve" />
            </q-card-actions>
        </q-card>
        </div>

       

    </div>
</template>
<script>

export default {
    data () {
        return {
              
        }
    },
   
}
</script>
