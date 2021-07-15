export default [
  {
    title: 'Account Settings',
    icon: 'UserIcon',
    tagVariant: 'light-warning',
    resource: 'profile',
    action: 'manage',
    children: [
      {
        title: 'My Profile',
        route: 'my-profile',
        resource: 'profile',
        action: 'manage',
      },
      {
        title: 'Ny Preferences',
        // route: 'dashboard-ecommerce',
        resource: 'profile',
        action: 'manage',
      },
      {
        title: 'Top-Up',
        // route: 'dashboard-ecommerce',
        resource: 'profile',
        action: 'manage',
      },
      {
        title: 'Credit Cards',
        // route: 'dashboard-ecommerce',
        resource: 'profile',
        action: 'manage',
      },
    ],
  },
]
