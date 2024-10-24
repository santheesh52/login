<h1>Login and Registration System with PHP & MySQL</h1>
<p>This project is a simple user authentication system that allows users to register, login, and view/edit their profile. It is built using PHP and MySQL for the backend.</p>

<h1>Features</h1>
  User Registration
  User Login
  Profile Page (View and Edit Profile)
  Password Encryption (using PHP's password hashing)
  Session-based Authentication
  Form Validation
<h1>Prerequisites</h1>
  XAMPP/WAMP server (for running PHP and MySQL locally)
  MySQL Database


Pages
1. Login Page (index.php)
Users can log in using their email and password.
If the login is successful, the user is redirected to their profile page.
Failed login attempts will display an error message.
2. Registration Page (register.php)
Users can create an account by providing their name, email, and password.
Passwords are securely hashed before being stored in the database.
3. Profile Page (profile.php)
Displays the user's information (name, email).
Users can navigate to the Edit Profile page to update their details.
4. Edit Profile Page (edit_profile.php)
Allows the user to update their name and email.
After saving, changes are reflected on the Profile Page.
5. Logout (logout.php)
Ends the user's session and redirects them back to the login page.
Technologies Used
Backend: PHP (Server-side scripting)
Database: MySQL (Relational Database Management)
Frontend: HTML, CSS
Session Handling: PHP Sessions for authentication
Security
Password Encryption: User passwords are encrypted using PHP's password_hash() function.
Input Validation: Basic validation is applied to form inputs to ensure data integrity.
Screenshots
1. Login Page

2. Registration Page

3. Profile Page

License
This project is open-source and available under the MIT License.
 tis change in HTML format
