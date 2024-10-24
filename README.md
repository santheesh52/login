<h1>Login and Registration System with PHP & MySQL</h1>
<p>This project is a simple user authentication system that allows users to register, login, and view/edit their profile. It is built using PHP and MySQL for the backend.</p>

<h1>Features</h1>
<ul>
  <li>User Registration</li>
  <li> User Login</li>
  <li> Profile Page (View and Edit Profile)</li>
  <li>Password Encryption (using PHP's password hashing)</li>
  <li>Session-based Authentication</li>
  <li>Form Validation</li>
</ul>
<h1>Prerequisites</h1>
<ul>
  <li>XAMPP/WAMP server (for running PHP and MySQL locally)</li>
  <li>MySQL Database</li>
</ul>

<h1>Pages</h1>
1. Login Page (index.php)
Users can log in using their email and password.
If the login is successful, the user is redirected to their profile page.
Failed login attempts will display an error message.<br><br>
2. Registration Page (register.php)
Users can create an account by providing their name, email, and password.
Passwords are securely hashed before being stored in the database.<br><br>
3. Profile Page (profile.php)
Displays the user's information (name, email).
Users can navigate to the Edit Profile page to update their details.<br><br>
4. Edit Profile Page (edit_profile.php)
Allows the user to update their name and email.
After saving, changes are reflected on the Profile Page.<br><br>
5. Logout (logout.php)
Ends the user's session and redirects them back to the login page.

<h1>Technologies Used</h1>
<ul>
  <li>Backend: PHP (Server-side scripting)</li>
  <li>Database: MySQL (Relational Database Management)</li>
  <li>Frontend: HTML, CSS</li>
  <li>Session Handling: PHP Sessions for authentication</li>
  <li>Security</li>
  <li>Password Encryption: User passwords are encrypted using PHP's password_hash() function.</li>
  <li>Input Validation: Basic validation is applied to form inputs to ensure data integrity.</li>
</ul> 
<h1>Screenshots</h1>
1. Login Page

![Screenshot (50)](https://github.com/user-attachments/assets/e768a3c8-e836-4eb1-8f52-d241d4f29dee)

2. Registration Page
   
![Screenshot (51)](https://github.com/user-attachments/assets/8bff1d0e-85e6-451b-9cb3-7302cb77b3cc)

3. Profile Page

![Screenshot (52)](https://github.com/user-attachments/assets/2172617b-f753-4be0-a3f7-f1c1b9109556)

<h1>License</h1>
This project is open-source and available under the MIT License.

