<template>
  <div id="register">
    <input type="text" placeholder="Register Here" v-model="email" />
    <button @click="Submit">Submit</button>
  </div>
</template>

<style>
  #register {
    background-color: #d49191;
    height: 100px;
  }
  
  input {
    height: 30px;
    width: 200px;
    margin: 30px;
  }
  
  button {
    height: 30px;
    width: 100px;
    border-radius: 15px;
    margin: 10px;
  }
  
</style>

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