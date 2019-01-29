<template>
  <div id="login">
    <input type="text" placeholder="Type your email here" v-model="email" />
    <button @click="Submit">Submit</button>
  </div>
</template>


<script>
export default {
  name:"login",
  data(){
    return {
      email:""
    }
  },
  methods:{
    Submit:function(){
      alert(this.email);
    }
  }
}
</script>