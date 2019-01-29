<template>
  <div class="home">
    <b-container fluid>
      <b-row>
        <b-col md="3" sm="6">
          <Leaderboard />
        </b-col>
          <b-col md="6" sm="12">
            <UpcomingEvents msg="Home Component (Events)"/>
            <!-- <router-link to="/start">START!</router-link> -->
          </b-col>
          <b-col md="2" sm="4">
            <NearbyPlayers />
          </b-col>
      </b-row>
    </b-container>
  </div> 
</template>

<script>
// @ is an alias to /src

import Leaderboard from '@/components/Leaderboard.vue'
import UpcomingEvents from '@/components/UpcomingEvents.vue'
import NearbyPlayers from '@/components/NearbyPlayers.vue'

export default {
  name: 'home',
  components: {
    Leaderboard,
    UpcomingEvents,
    NearbyPlayers
  }
}
</script>

<style>

</style>

