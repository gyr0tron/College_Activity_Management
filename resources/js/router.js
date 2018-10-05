import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter)
export default new VueRouter({
  routes: [
    {
      path: '/dashboard',
      name: 'dashboard',
      component: require('./components/Layout')
    },{
      path: '/calendar',
      name: 'calendar',
      component: require('./components/Calendar')
    }
  ],
  mode: 'history'
})

window.route = function(url) {
  return '/api/v1/'+url;
}
