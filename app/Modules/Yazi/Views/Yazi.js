import ComponentA from './App.vue';

new Vue({
  el : '#app',
  components: {
    'component-a': ComponentA,
    
  },
  data: function () {
    return {
      opened:false,
      sx:'deneme'
    }
  },
  methods: {
    launch: function () {
      console.log('Deneme');
      
    }
  }
})
