<template>
  <div>
    <h1>Hello World!</h1>
    {{veri}}
    {{ex}}
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
