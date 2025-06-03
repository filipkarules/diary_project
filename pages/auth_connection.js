// Для авторизации (добавь в authorisation.php форму с id="login-form")
document.getElementById('login-form').addEventListener('submit', async function (e) {
    console.log('Форма авторизации отправлена');
    e.preventDefault();

    const username = document.querySelector('#login-form input[type="text"]').value;
    const password = document.querySelector('#login-form input[type="password"]').value;
    console.log(username)
    console.log(password)

    try {
        const response = await fetch('http://localhost:5000/auth/login', {
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
            localStorage.setItem('token', data.token); // Сохраняем токен
            alert('Авторизация успешна!');
            window.location.href = 'registration.php'; // Перенаправление после входа
        } else {
            alert(data.message || 'Ошибка авторизации');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Произошла ошибка при авторизации', error);
    }
})