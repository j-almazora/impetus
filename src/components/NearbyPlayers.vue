<template>
  <div id="NearbyPlayers">

    <h1>Nearby Players</h1>

    <b-row align-v="center">
      <b-col cols="3" style="padding: 0;">
        <b-img rounded="circle" alt="img" class="m-1" src="http://www.catster.com/wp-content/uploads/2017/08/A-fluffy-cat-looking-funny-surprised-or-concerned.jpg"/>
      </b-col>
      <b-col cols="7">
        <span class="nearbyName">Hong Yu</span><br>
        <span class="nearbyRank">Professional</span>
      </b-col>
      <b-col cols="2">
        <b-button class="btn btn-default" variant="primary" type="button" size="sm">Contact</b-button>
      </b-col>
    </b-row>

    <b-row align-v="center">
      <b-col cols="3" style="padding: 0;">
        <b-img rounded="circle" alt="img" class="m-1" src="http://www.catster.com/wp-content/uploads/2017/08/A-fluffy-cat-looking-funny-surprised-or-concerned.jpg"/>
      </b-col>
      <b-col cols="7">
        <span class="nearbyName">Henry Leung</span><br>
        <span class="nearbyRank">Professional</span>
      </b-col>
      <b-col cols="2">
        <b-button class="btn btn-default" variant="primary" type="button" size="sm">Contact</b-button>
      </b-col>
    </b-row>

    <b-row align-v="center">
      <b-col cols="3" style="padding: 0;">
        <b-img rounded="circle" alt="img" class="m-1" src="http://www.catster.com/wp-content/uploads/2017/08/A-fluffy-cat-looking-funny-surprised-or-concerned.jpg"/>
      </b-col>
      <b-col cols="7">
        <span class="nearbyName">Sean C</span><br>
        <span class="nearbyRank">Professional</span>
      </b-col>
      <b-col cols="2">
        <b-button class="btn btn-default" variant="primary" type="button" size="sm">Contact</b-button>
      </b-col>
    </b-row>

  </div>
</template>


<script>
  export default {
    name: 'nearbyplayers'
  }

</script>


<style scoped>
  img {
    height: 40px;
    width: 40px;
  }

  h1 {
    font-size: 1.4em;
    font-family: 'Helvetica', sans-serif;
  }

  div.row {
    margin: 1em 0;
  }

</style>
