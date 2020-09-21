require('./bootstrap');

window.Vue = require('vue');

import Snotify, { SnotifyPosition } from 'vue-snotify';
import Datepicker from 'vuejs-datepicker';

Vue.use(Snotify, {
  toast: {
    timeout: 3000,
    showProgressBar: false,
    position: SnotifyPosition.rightTop
  }
});

require('./Components');
import Vue from 'vue'
import VueMask from 'v-mask'
Vue.use(VueMask)

export default {
  // ...
  components: {
    Datepicker
  }
  // ...
}