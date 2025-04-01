document.addEventListener("DOMContentLoaded", function () {
    const map = L.map('map').setView([10.0, -84.0], 13); // Coordenadas iniciales

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    let marker;

    map.on('click', function (e) {
        const { lat, lng } = e.latlng; // Obtiene latitud y longitud del clic

        if (marker) {
            map.removeLayer(marker); // Elimina el marcador anterior
        }

        marker = L.marker([lat, lng]).addTo(map); // Crea un nuevo marcador

        // Asigna valores a los campos ocultos
        document.getElementById('latitud').value = lat;
        document.getElementById('longitud').value = lng;

        // Muestra los valores en la consola para depuración
        console.log("Latitud:", lat);
        console.log("Longitud:", lng);
    });
});
