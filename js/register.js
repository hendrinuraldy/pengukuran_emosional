const registerForm = document.querySelector('form');

registerForm.addEventListener('submit', async (event) => {
  event.preventDefault(); // Prevent default form submission

  const name = document.querySelector('#form3Example1c').value;
  const username = document.querySelector('#form3Example3c').value;
  const password = document.querySelector('#form3Example4c').value;

  // Simulate an API call (replace with your actual backend logic)
  const response = await fetch('add.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      name,
      username,
      password
    })
  });

  const data = await response.json();

  if (data.success) {
    Swal.fire({
      title: 'Success!',
      text: 'You have been registered successfully.',
      icon: 'success',
      confirmButtonText: 'Ok'
    }).then(() => {
      // Redirect to login page or perform other actions after success
      window.location.href = 'index2.php'; // Replace with your desired URL
    });
  } else {
    Swal.fire({
      title: 'Error!',
      text: data.message || 'Registration failed.', // Handle specific error messages from backend
      icon: 'error',
      confirmButtonText: 'Ok'
    });
  }
});
