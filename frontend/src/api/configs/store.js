export default {
  tokenType: 'Bearer',
  refreshEndpoint: '/jwt/refresh-token',
  storageTokenKeyName: 'accessToken',
  storageRefreshTokenKeyName: 'refreshToken',
  // Endpoints
  storesEndpoint: '/api/v1/stores',
  storeEndpoint: '/api/v1/store',
  ebayEndpoint: '/api/v1/ebay',
  shopifyEndpoint: '/api/v1/shopify',
  cartOrderInitEndpoint: '/api/v1/cart-order-init',
  cartOrdersEndpoint: '/api/v1/cart-orders',
  cartOrderEndpoint: '/api/v1/cart-order',
}