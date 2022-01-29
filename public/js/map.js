mapboxgl.accessToken = 'pk.eyJ1IjoidGl0YW5jb25jZXB0IiwiYSI6ImNramJjNzNhazFwZGcycXJ1YmE2YjlqNW8ifQ.s4AwywZijMnKUFGDLM3U0w';
var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/titanconcept/ckkwu1q7b5ee417nvn1rt63i8",
    center: [20.260192836812394, 44.65531445435178],
    zoom: 14,
    scrollZoom: false
});
var marker = new mapboxgl.Marker()
    .setLngLat([20.260192836812394, 44.65531445435178])
    .addTo(map);
