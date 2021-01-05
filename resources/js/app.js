const { includes } = require('lodash');

require('./bootstrap');
import Vue from 'vue';

// dropdown menu
const navbar = new Vue({
  el: '#navbar',
  data: {
    visible: false,
  },
  methods: {
    toggleMenu() {
      this.visible = !this.visible;
    }
  }
});