<template>
  <div class="UpcomingEvents">

<!-- This is the top part of the event div -->
    <b-container>
      <b-row>
        <b-col><h1>Upcoming Events</h1></b-col>
      </b-row>
      <b-row align-h="start">
        <b-col cols="9">
          <span>Saturday, January 26</span>
        </b-col>
        <b-col cols="3">
          <b-button variant="success" size="sm" @click="AddEventForm">Add Event</b-button>
        </b-col>
      </b-row>
      <EventForm v-if="page===1"/>
    </b-container>

<!-- This will be the box div that will contain a content for upcoming events -->
    <b-container>
      <b-row class="eventDiv">
        <b-col cols="3">Time</b-col>
        <b-col cols="9">
          <b-row>
            <b-col><span class="eventName">Event Name</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="eventDescription">Event Description</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="attendees"># of People going</span></b-col>
          </b-row>
        </b-col>
      </b-row>

      <b-row class="eventDiv">
        <b-col cols="3">Time</b-col>
        <b-col cols="9">
          <b-row>
            <b-col><span class="eventName">Event Name</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="eventDescription">Event Description</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="attendees"># of People going</span></b-col>
          </b-row>
        </b-col>
      </b-row>

      <b-row class="eventDiv">
        <b-col cols="3">Time</b-col>
        <b-col cols="9">
          <b-row>
            <b-col><span class="eventName">Event Name</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="eventDescription">Event Description</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="attendees"># of People going</span></b-col>
          </b-row>
        </b-col>
      </b-row>

      <b-row class="eventDiv">
        <b-col cols="3">Time</b-col>
        <b-col cols="9">
          <b-row>
            <b-col><span class="eventName">Event Name</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="eventDescription">Event Description</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="attendees"># of People going</span></b-col>
          </b-row>
        </b-col>
      </b-row>

      <b-row class="eventDiv">
        <b-col cols="3">Time</b-col>
        <b-col cols="9">
          <b-row>
            <b-col><span class="eventName">Event Name</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="eventDescription">Event Description</span></b-col>
          </b-row>
          <b-row>
            <b-col><span class="attendees"># of People going</span></b-col>
          </b-row>
        </b-col>
      </b-row>
    </b-container>

  </div>
  
</template>

// ----SCRIPT----

<script>
import EventForm from '@/components/EventForm.vue'

export default {
  name: "UpcomingEvents",

  components: {
    EventForm
  },

  props: {
    msg: String
  },

  data() {
    return {
      page: this.store.page
    }
  },

  methods: {
    AddEventForm: function () {
      this.page = 1
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
// ----STYLE----
<style scoped>

h1 {
  font-size: 1.4em;
}

div.container {
  margin: 0;
}

div.eventDiv {
  border: 1px solid black;
  padding: 1em;
  margin: 0;
  background-color: #fff;
  box-shadow: 0.4em 1em 30px 0px rgb(114, 114, 114, 0.60);
}

span.eventName {
font-size: 1.2em;
font-family: 'Helvetica';
text-transform: uppercase;
}

span.eventDescription {
  font-size: 1em;
  font-family: 'Helvetica';
}

span.attendees {
  font-size: 0.7em;
  font-style: italic;
}
</style>
