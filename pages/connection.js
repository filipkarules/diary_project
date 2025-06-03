document.getElementById('registration-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const username = document.querySelector('#registration-form input[type="text"]').value;
    const password = document.getElementById('password').value;

    try {
        const response = await fetch('http://localhost:5000/auth/registration', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                username,
                password
            }),
        });

        const data = await response.json();
        if (response.ok) {
            alert(data.message || 'Регистрация успешна!');
            window.location.href = 'authorisation.php';
        } else {
            alert(data.message || 'Ошибка регистрации');
        }
    } catch (error) {
        console.error('Error:', error);
        alert(`Произошла ошибка при регистрации: ${error}`);
    }
});