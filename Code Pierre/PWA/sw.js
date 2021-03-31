const CACHE = 'my_cache'
const assets = [
  '/',
  //'./images/Stageman_logo.png',
  //'../manifest.json',
  //'/index.js',
  '../Footer.tpl',
  '../Header.tpl',
  '../Header_Footer.css',
  '../Page_accueil.tpl',
  '../Page_accueil.php',
  //'../Sing_in.css',
  //'../Sing_in.php',
  //'../Sing_in.tpl',
  //'../Sing_out.tpl',
  '../Search/search.css',
  '../Search/search.html',
  //'../Search/search.php',
  //'../Search/searchentreprise.html',
  //'../Search/searchentreprise.php',
  //'../Search/searchoffre.php',
  //'../Search/searchoffre.html',
  //'../Search/searchuser.php',
  //'../Search/searchuser.html',
  //'../Search/searchresult.css'

];


self.addEventListener('install', evt => {

  evt.waitUntil(  caches.open(CACHE).then(cache => {
     console.log('caching shell assets');
     cache.addAll(assets);
     })
 )

});

self.addEventListener('activate', e => {
    console.log('service Worker has been activated');
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.open(CACHE).then(function(cache) {
        return cache.match(event.request).then(function (response) {
          return response || fetch(event.request).then(function(response) {
            cache.put(event.request, response.clone());
            return response;
          });
        });
      })
    );
  }); 

/*
  self.addEventListener('fetch', (e) => {
    e.respondWith(
      caches.match(e.request).then((r) => {
            console.log('[Service Worker] Récupération de la ressource: '+e.request.url1);
        return r || fetch(e.request).then((response) => {
                  return caches.open(CACHE).then((cache) => {
            console.log('[Service Worker] Mise en cache de la nouvelle ressource: '+e.request.url);
            cache.put(e.request, response.clone());
            return response;
          });
        });
      })
    );
  });*/