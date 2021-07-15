export default [
  {
    path: '/app-access/keys',
    name: 'app-access-keys',
    component: () => import('@/views/api/Index.vue'),
    meta: {
      resource: 'api',
      action: 'manage',
      pageTitle: 'Application Access',
      breadcrumb: [
        {
          text: 'Application',
        },
        {
          text: 'Access Keys',
          active: true,
        },
      ],
    },
  },
]