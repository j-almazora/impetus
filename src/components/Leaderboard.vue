<template>
  <div id="leaderboard">

    <h1>Leaderboard</h1>
    <h2>Basketball</h2>
    <b-container>
      <b-row class="leaderboard">
        <b-col cols="3"><span class="rank">1st</span></b-col>
        <b-col cols="8">
          <b-row>
            <b-col><span class="playerName">Hong Yu</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="playerRank">Professional</span></b-col>
          </b-row>
        </b-col>
      </b-row>

      <b-row class="leaderboard">
        <b-col cols="3"><span class="rank">2nd</span></b-col>
        <b-col cols="8">
          <b-row>
            <b-col><span class="playerName">John Almazora</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="playerRank">Professional</span></b-col>
          </b-row>
        </b-col>
      </b-row>

      <b-row class="leaderboard">
        <b-col cols="3"><span class="rank">3rd</span></b-col>
        <b-col cols="8">
          <b-row>
            <b-col><span class="playerName">Jimmy Truong</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="playerRank">Amateur</span></b-col>
          </b-row>
        </b-col>
      </b-row>

    </b-container>
  </div>
</template>


<script>
  export default {
    name: 'leaderboard',
  }

</script>

<style scoped>

  div.container {
    background-color: #fff;
    box-shadow: 5px 6px 10px -2px rgb(114, 114, 114, 0.60);
  }
  
  div.leaderboard {
    border: 1px solid black;
  }

  span.playerName {
    font-size: 1em;
  }

  span.playerRank {
    font-size: 0.5em;
  }

  p {
    font-size: 1em;
    text-align: left;
    margin-bottom: 0;
  }

  h1 {
    font-size: 1.4em;
    font-family: 'Helvetica', sans-serif;
  }

  h2{
    font-size: 1.1em;
    font-style: normal;
    font-weight: normal;
  }

  span.rank {
    font-size: 1.6em;
  }

</style>
