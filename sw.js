const CACHE_NAME = 'daniil-energy-cache-v1';
const urlsToCache = [
  '/',
  '/index.html',
  '/katalog.html',
  '/onas.html',
  '/feedback.php',
  '/stili.css',
  '/logo.jpg',
  '/energo1.png',
  '/energo2.png',
  '/energo3.png',
  '/energo4.png'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((response) => response || fetch(event.request))
  );
});