const loginForm = document.querySelector('form');

loginForm.addEventListener('submit', async (event) => {
  event.preventDefault(); // Prevent default form submission

  const username = document.querySelector('#form1Example13').value;
  const password = document.querySelector('#form1Example23').value;

  // Simulate an API call (replace with your actual backend logic)
  const response = await fetch('login.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      username,
      password
    })
  });

  const data = await response.json();

  if (data.success) {
    Swal.fire({
      title: 'Success!',
      text: 'You have logged in successfully.',
      icon: 'success',
      confirmButtonText: 'Ok'
    }).then(() => {
      // Redirect to desired page after successful login
      window.location.href = 'dashboard.php'; // Replace with your desired URL
    });
  } else {
    Swal.fire({
      title: 'Error!',
      text: data.message || 'Login failed.', // Handle specific error messages from backend
      icon: 'error',
      confirmButtonText: 'Ok'
    });
  }
});
