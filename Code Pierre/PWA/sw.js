self.addEventListener("install", e =>{
   e.waitUntil(caches.open(PRECACHE).then(cache => cache.addAll(PRECACHE_URLS)).then(self.skipWaiting())   );
});

self.addEventListener('activate', e => {
    console.log('service Worker has been activated');
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.open('ma_sauvegarde').then(function(cache) {
        return cache.match(event.request).then(function (response) {
          return response || fetch(event.request).then(function(response) {
            cache.put(event.request, response.clone());
            return response;
          });
        });
      })
    );
  });
