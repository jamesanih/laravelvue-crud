import VueRouter from 'vue-router';

let routes = [
   {
        path: '/',
        component: require('./views/Home')
    },
    {
        path: '/users',
        component: require('./views/Users')
    }
    
    

];

export default new VueRouter({
    routes,
    linkActiveClass: 'active',
    
});