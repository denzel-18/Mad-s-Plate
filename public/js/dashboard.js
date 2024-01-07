const logoutButton = document.getElementById('logout_button');

logoutButton.addEventListener('click', () => {
    window.location.href = 'index.html';
  console.log('Logged out!');
});