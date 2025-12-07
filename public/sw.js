const CACHE_NAME = 'mg-portfolio-v1';
const urlsToCache = [
  '/',
  '/index.html',
  '/profile.jpg',
  '/pagsasaka.png',
  '/pagsasaka1.png',
  '/pagsasaka2.png',
  '/pagsasaka3.png',
  '/cho.png',
  '/cho1.png',
  '/cho2.png',
  '/cho3.png',
  '/cho4.png',
  '/clean5.png',
  '/clean6.png',
  '/clean4.png',
  '/clean3.png',
  '/clean1.png',
  '/icon-192.png',
  '/icon-512.png'
];

// Install event - cache files
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

// Fetch event - serve from cache, fallback to network
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        // Cache hit - return response
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    )
  );
});

// Activate event - clean up old caches
self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});