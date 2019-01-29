<template>
  <div id="start">
    THIS WILL BE THE FORM
    <div>{{greetings}}</div>
    <div>{{glob}}</div>
    <div @click="ChangeGreetings">CHANGE</div>
    <button @click="ChangeLogin">Login</button>
    <button @click="ChangeRegister">Register</button>
    <MyLogin v-if="page===1" />
    <MyRegister v-if="page===2" />
    
  </div>
</template>
<script>
  import Login from "@/components/Login.vue";
  import Register from "@/components/Register.vue";

  export default {
    name: "start",
    components: {
      MyLogin: Login,
      MyRegister: Register
    },

    data() {
      return {
        greetings: "HELLO!",
        glob: this.store.globalName,
        page:0
      }
    },
    methods: {
      ChangeGreetings: function() {
        this.greetings = "ROLL OUT";
        this.store.globalName = "NEW GLOBAL!";
        this.glob = this.store.globalName;
      },
      ChangeLogin:function(){
        this.page = 1;
      },
      ChangeRegister:function(){
        this.page = 2;
      }
    }
  }

</script>
