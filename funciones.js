document.addEventListener('DOMContentLoaded', function() {
    const errorMessage = localStorage.getItem('errorMessage');
    if (errorMessage) {
        const elem = document.getElementById('incorrecto');
        if (elem) {
            elem.innerHTML = '<a>' + errorMessage + '</a>';
        }
        localStorage.removeItem('errorMessage'); // Elimina el mensaje después de usarlo
    }
});