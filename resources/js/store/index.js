import Vue from 'vue';
import VueX from 'vuex';
// 
import state from './state';
import getters from './getters';
import modules from './modules';

Vue.use(VueX)

const store = new VueX.Store({
    state,
    getters,
    ...modules
})

export default store;