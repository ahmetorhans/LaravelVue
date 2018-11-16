<template>
  <div>
    <h1>Yazi.js</h1>
    {{veri}}
    
  </div>
</template>
<script>
import axios from 'axios'
export default {
    data (){
        return{
            veri : {},
        }
    },
    mounted () {
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response =>  {
          this.veri=response.data
          console.log(this.veri);
      })
  }
}
</script>
