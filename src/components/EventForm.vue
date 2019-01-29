<template>
		<div id="EventForm">
			<form action="POST">
				<b-container id="formContainer">
					<b-row align-h="center">
						<h1>Add Event Form</h1>
					</b-row>

					<b-row>
						<b-col>
							Date of Event
						</b-col>
					</b-row>

					<b-row>
						<b-col>
							<b-form-input v-model="eventDate" type="date" aria-required=""></b-form-input>
						</b-col>
					</b-row>
					
					<b-row>
						<b-col cols="6">
							<b-row>
								<b-col>
									Time Start
								</b-col>
							</b-row>

							<b-row>
								<b-col>
									<b-form-input v-model="startTime" type="time" aria-required=""></b-form-input>
								</b-col>
							</b-row>
						</b-col>
					
					<b-col cols="6">
						<b-row>
							<b-col>
								Time Finish
							</b-col>
						</b-row>

						<b-row>
								<b-col>
									<b-form-input v-model="endTime" type="time" aria-required=""></b-form-input>
								</b-col>
							</b-row>
						</b-col>
					</b-row>
					
					<b-row>
						<b-col>Where is the Event?</b-col>
					</b-row>

					<b-row>
						<b-col>
							<b-form-select v-model="selected" :options="options" class="mb-3" size="sm" />
						</b-col>
					</b-row>

					<b-row>
						<b-col>Description of the Event</b-col>
					</b-row>

					<b-row>
						<b-col>
							<b-form-textarea id="eventDescription"
								v-model="eventDesc"
								placeholder="Max 150 words"
								:rows="3"
								:max-rows="6">
							</b-form-textarea>
						</b-col>
					</b-row>

					<b-row>
						<b-col>
							<b-button variant="success" size="sm" id="submitBtn" @click="submitBtn">Submit</b-button>
						</b-col>
					</b-row>
				</b-container>
			</form>

		</div>
</template>

<script>
export default {
		name: 'EventForm',
		data() {
			return {
				selected: null,
				options: [
				{ value: null, text: 'Please select an option' },
				{ value: 'Vancouver', text: 'Vancouver' },
				{ value: 'Burnaby', text: 'Burnaby' },
				{ value: 'Richmond', text: 'Richmond' },
				{ value: 'Surrey', text: 'Surrey', disabled: true }
				],
				eventDate:'',
				startTime:'',
				endTime:'',
				eventDesc:''
			}
		},

		methods: {
			submitBtn: function() {
				alert(this.eventDate + this.startTime + this.endTime + this.eventDesc)
			}
		}
}
</script>

<style scoped>
h1 {
	font-size: 1.4em;
}

#formContainer {
	background-color: #fff;
	margin: 1em;
	padding: 1.4em;
	box-shadow: 0.4em 1em 30px 0px rgb(114, 114, 114, 0.60);
}

#submitBtn {
	margin: 0.5em;
}

</style>

