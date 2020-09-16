<template>
    <div>
        
                 <button v-on:click.prevent="increment(5)" class="vue-form-button oswald light fa fa-hand-o-up fa-2x"></button>
                 <button v-on:click.prevent="decrement" class="vue-form-button oswald light fa fa-hand-o-down fa-2x"></button>                   
               </a>
               <hr class="bottom-line">
           </div>
</template>
<script>
   export default {
    props:[
        'owner_id'
    ],
        data: ()=> {
    return {
      rateCount: 0

    }
  },    
        methods:{
              increment (limit) {
                if (this.rateCount < limit)
      this.rateCount++;
    },
    decrement () {
      if(this.rateCount > 0){
        this.rateCount-- ;
      }
    }
  }
}        
</script>
