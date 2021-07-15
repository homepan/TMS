export default [
  {
    path: '/my-profile',
    name: 'my-profile',
    component: () => import('@/views/account-setting/AccountSetting.vue'),
    meta: {
      resource: 'profile',
      action: 'manage',
      pageTitle: 'My Profile',
      breadcrumb: [
        {
          text: 'Account Settings',
        },
        {
          text: 'My Profile',
          active: true,
        },
      ],
    },
  },
]