<template>
  <div id="navbar">
    <b-container fluid>
      <b-row>
        <b-col>
          <header>
						<nav>
<!-- This is the Impetus Logo -->
							<b-navbar toggleable="md" type="light">
								<b-navbar-brand href="#"><img src="https://pbs.twimg.com/profile_images/957068008/HenryPic.jpg" alt="ImpetusLogo">IMPETUS</b-navbar-brand>

<!-- This is the responsive collapseable nav menu -->
								<b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
								<b-collapse is-nav id="nav_collapse">
									<b-navbar-nav class="ml-auto">
										<b-nav-item href="#">Home</b-nav-item>
										<b-nav-item href="#">Challenge</b-nav-item>
										<b-nav-item href="#">Sign Up</b-nav-item>
										<b-nav-item href="#">Sign In</b-nav-item>
									</b-navbar-nav>
								</b-collapse>

							</b-navbar>
						</nav>
					</header>
        </b-col>
      </b-row>
  	</b-container>
  </div>
</template>

// ---------------SCRIPTING------------

<script>
export default {
    name: 'navbar',
    data() {
        return {

        }
    }
}
</script>

// ---------------STYLING--------------

<style scoped>

#navbar {
	background-color: rgb(95, 131, 207);
	box-shadow: 0.2em 0.1em 20px 0px rgb(0, 34, 83);
	margin-bottom: 2em;
}

img {
	height: 40px;
	width: auto;
	border-radius: 50%;
	margin: 0 1em;
}

a.nav-link {
	margin: 0 1em;
}

</style>

