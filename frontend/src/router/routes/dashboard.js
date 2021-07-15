export default [
  {
    path: '/dashboard',
    name: 'dashboard',
    component: () => import('@/views/dashboard/Index.vue'),
    meta: {
      resource: 'dashboard',
      action: 'view',
    },
  },
  {
    path: '/dashboard/error-404',
    name: 'dashboard-error-404',
    component: () => import('@/views/dashboard/error/Error404.vue'),
    meta: {
      resource: 'dashboard',
      action: 'view',
    },
  },
  {
    path: '/dashboard/not-authorized',
    name: 'dashboard-not-authorized',
    component: () => import('@/views/dashboard/error/NotAuthorized.vue'),
    meta: {
      resource: 'dashboard',
      action: 'view',
    },
  },
]