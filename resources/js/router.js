import VueRouter from 'vue-router'

let router = [
    {
        name: 'AllPosts',
        path: '/',
        exact: true,
        component: () => import('./components/AllPosts.vue'),
    },
    {
        name: 'CreatePost',
        path: '/create-posts',
        exact: true,
        component: () => import('./components/CreatePost.vue'),
    },
    {
        name: 'ImportPosts',
        path: '/import-posts',
        exact: true,
        component: () => import('./components/ImportPosts.vue'),
    },
]

export default new VueRouter({
    router,
})
