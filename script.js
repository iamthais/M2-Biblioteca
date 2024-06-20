document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    form.addEventListener('submit', function(event) {
        const senha = document.getElementById('senha').value;
        if (senha.length < 8) {
            alert('A senha deve conter no mínimo 8 caracteres.');
            event.preventDefault();  // Impede o envio do formulário
        }
    });
});