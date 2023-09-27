import './bootstrap';

document.getElementById('modoDarkBtn').addEventListener('click', function () {
    const html = document.querySelector('html');
    const icon = document.querySelector('#modoDarkBtn i'); // Seleccione el ícono dentro del botón

    if (html.classList.contains('dark')) {
        // Cambiar a modo claro
        html.classList.remove('dark');
        localStorage.setItem('modo', 'light');
        icon.classList.remove('bi-sun-fill'); // Eliminar la clase del ícono del modo oscuro
        icon.classList.add('bi-moon-stars-fill'); // Agregar la clase del ícono del modo claro
    } else {
        // Cambiar a modo oscuro
        html.classList.add('dark');
        localStorage.setItem('modo', 'dark');
        icon.classList.remove('bi-moon-stars-fill'); // Eliminar la clase del ícono del modo claro
        icon.classList.add('bi-sun-fill'); // Agregar la clase del ícono del modo oscuro
    }
});

// Verificar y cargar el modo preferido desde el almacenamiento local
const modoAlmacenado = localStorage.getItem('modo');
const html = document.querySelector('html');
const icon = document.querySelector('#modoDarkBtn i'); // Seleccione el ícono dentro del botón

if (modoAlmacenado === 'dark') {
    html.classList.add('dark');
    icon.classList.remove('bi-moon-stars-fill'); // Eliminar la clase del ícono del modo claro
    icon.classList.add('bi-sun-fill'); // Agregar la clase del ícono del modo oscuro
}
