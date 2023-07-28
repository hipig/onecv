export const MAIN_LAYOUT = () => import('@/layout/main.vue');

export default [
    {
        path: '/',
        name: 'root',
        component: MAIN_LAYOUT,
        redirect: 'chat',
        children: [
            {
                path: '/',
                name: 'index',
                component: () => import('@/views/index/index.vue'),
            },
        ],
    }
];
