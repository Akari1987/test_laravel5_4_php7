<!--<template>-->
<!--    <v-app-->
<!--		id="sandbox"-->
<!--		:dark="dark"-->
<!--		:light="!dark"-->
<!--		standalone-->
<!--    >-->
<!--	<v-navigation-drawer-->
<!--	  v-model="primaryDrawer.model"-->
<!--	  :permanent="primaryDrawer.type === 'permanent'"-->
<!--	  :persistent="primaryDrawer.type === 'persistent'"-->
<!--	  :temporary="primaryDrawer.type === 'temporary'"-->
<!--	  :clipped="primaryDrawer.clipped"-->
<!--	  :floating="primaryDrawer.floating"-->
<!--	  :mini-variant="primaryDrawer.mini"-->
<!--	  absolute-->
<!--	  overflow-->
<!--	  enable-resize-watcher-->
<!--	></v-navigation-drawer>-->
<!--	<v-toolbar>-->
<!--	  <v-toolbar-side-icon @click.native.stop="primaryDrawer.model = !primaryDrawer.model" v-if="primaryDrawer.type !== 'permanent'"></v-toolbar-side-icon>-->
<!--	  <v-toolbar-title>Vuetify</v-toolbar-title>-->
<!--	</v-toolbar>-->
<!--	<main>-->
<!--	  <v-container fluid>-->
<!--		<v-layout align-center justify-center>-->
<!--		  <v-flex xs10>-->
<!--			<v-card>-->
<!--			  <v-card-text>-->
<!--				<v-layout row wrap>-->
<!--				  <v-flex xs12 md6>-->
<!--					<span>Scheme</span>-->
<!--					<v-switch primary label="Dark" v-model="dark"></v-switch>-->
<!--				  </v-flex>-->
<!--				  <v-flex xs12 md6>-->
<!--					<span>Drawer</span>-->
<!--					<v-radio-->
<!--					  primary-->
<!--					  :label="drawer"-->
<!--					  v-model="primaryDrawer.type"-->
<!--					  :value="drawer.toLowerCase()"-->
<!--					  v-for="drawer in drawers"-->
<!--					  :key="drawer"-->
<!--					></v-radio>-->
<!--					<v-switch label="Clipped" v-model="primaryDrawer.clipped" primary></v-switch>-->
<!--					<v-switch label="Floating" v-model="primaryDrawer.floating" primary></v-switch>-->
<!--					<v-switch label="Mini" v-model="primaryDrawer.mini" primary></v-switch>-->
<!--				  </v-flex>-->
<!--				  <v-flex xs12 md6>-->
<!--					<span>Footer</span>-->
<!--					<v-switch label="Fixed" v-model="footer.fixed" primary></v-switch>-->
<!--				  </v-flex>-->
<!--				</v-layout>-->
<!--			  </v-card-text>-->
<!--			  <v-card-actions>-->
<!--				<v-spacer></v-spacer>-->
<!--				<v-btn flat>Cancel</v-btn>-->
<!--				<v-btn flat primary>Submit</v-btn>-->
<!--			  </v-card-actions>-->
<!--			</v-card>-->
<!--		  </v-flex>-->
<!--		</v-layout>-->
<!--	  </v-container>-->
<!--	</main>-->
<!--	<v-footer :absolute="footer.fixed">-->
<!--	  <span>&copy; {{ new Date().getFullYear() }}</span>-->
<!--	</v-footer>-->
<!--  </v-app>-->
<!--</template>-->

<!--<script>-->
<!--  export default {-->
<!--	data: () => ({-->
<!--	  dark: true,-->
<!--	  drawers: ['Permanent', 'Persistent', 'Temporary'],-->
<!--	  primaryDrawer: {-->
<!--		model: true,-->
<!--		type: 'persistent',-->
<!--		clipped: false,-->
<!--		floating: false,-->
<!--		mini: false-->
<!--	  },-->
<!--	  footer: {-->
<!--		fixed: false-->
<!--	  }-->
<!--	})-->
<!--  }-->
<!--</script>-->

<!--<style>-->
<!--  #sandbox {-->
<!--	border: 1px solid rgba(0, 0, 0, .1);-->
<!--	overflow: hidden;-->
<!--  }-->
<!--  #sandbox .container, #sandbox {-->
<!--	min-height: 700px;-->
<!--  }-->
<!--</style>-->
<template>
  <v-app
    height="415px"
    dark
    id="e3"
    standalone
  >
    <v-navigation-drawer
      class="pb-0"
      persistent
      absolute
      height="100%"
      clipped
      enable-resize-watcher
      v-model="drawer"
    >
      <v-list dense>
        <v-list-tile v-for="item in items" :key="item.text">
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>
              {{ item.text }}
            </v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-subheader class="mt-3 grey--text text--darken-1">SUBSCRIPTIONS</v-subheader>
        <v-list>
          <v-list-tile v-for="item in items2" :key="item.text" avatar>
            <v-list-tile-avatar>
              <img :src="`https://randomuser.me/api/portraits/men/${item.picture}.jpg`" alt="">
            </v-list-tile-avatar>
            <v-list-tile-title v-text="item.text"></v-list-tile-title>
          </v-list-tile>
        </v-list>
        <v-list-tile class="mt-3">
          <v-list-tile-action>
            <v-icon class="grey--text text--darken-1">add_circle_outline</v-icon>
          </v-list-tile-action>
          <v-list-tile-title class="grey--text text--darken-1">Browse Channels</v-list-tile-title>
        </v-list-tile>
        <v-list-tile>
          <v-list-tile-action>
            <v-icon class="grey--text text--darken-1">settings</v-icon>
          </v-list-tile-action>
          <v-list-tile-title class="grey--text text--darken-1">Manage Subscriptions</v-list-tile-title>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar class="red">
      <v-toolbar-title>
        <v-toolbar-side-icon @click.native.stop="drawer = !drawer"></v-toolbar-side-icon>
        <v-icon class="ml-3">fa-youtube</v-icon>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-text-field
        label="Search..."
        single-line
        append-icon="search"
        dark
        hide-details
      ></v-text-field>
    </v-toolbar>
    <main>
      <v-container>
        <v-layout>
          <v-flex xs12>
            <v-card height="300px"></v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </main>
  </v-app>
</template>

<script>
  export default {
    data: () => ({
      drawer: true,
      items: [
        { icon: 'trending_up', text: 'Most Popular' },
        { icon: 'subscriptions', text: 'Subscriptions' },
        { icon: 'history', text: 'History' },
        { icon: 'featured_play_list', text: 'Playlists' },
        { icon: 'watch_later', text: 'Watch Later' }
      ],
      items2: [
        { picture: 28, text: 'Joseph' },
        { picture: 38, text: 'Apple' },
        { picture: 48, text: 'Xbox Ahoy' },
        { picture: 58, text: 'Nokia' },
        { picture: 78, text: 'MKBHD' },
      ]
    })
  }
</script>

<style>
  #e3, #e3 .container {
    min-height: 700px;
    overflow: hidden;
    z-index: 0;
  }
  #e3 .input-group__details:after {
    background-color: rgba(255,255,255,0.32) !important;
  }
  #e3 .input-group--focused .input-group__append-icon {
    color: inherit !important;
  }
</style>