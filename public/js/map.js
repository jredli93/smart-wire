mapboxgl.accessToken = 'pk.eyJ1IjoidGl0YW5jb25jZXB0IiwiYSI6ImNramJjNzNhazFwZGcycXJ1YmE2YjlqNW8ifQ.s4AwywZijMnKUFGDLM3U0w';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/titanconcept/ckkwu1q7b5ee417nvn1rt63i8',
    center: [20.35220611783052, 44.87019808043979],
    zoom: 14, 
});
    var marker = new mapboxgl.Marker()
    .setLngLat([20.35220611783052, 44.87019808043979])
    .addTo(map);