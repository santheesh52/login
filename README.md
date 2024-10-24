    <h1>Login and Registration System with PHP & MySQL</h1>
    <p>This project is a simple user authentication system that allows users to register, login, and view/edit their profile. It is built using PHP and MySQL for the backend.</p>

    <h1>Features</h1>
    <ul>
        <li>User Registration</li>
        <li>User Login</li>
        <li>Profile Page (View and Edit Profile)</li>
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
    <ol>
        <li>
            <strong>Login Page (index.php)</strong>
            <p>Users can log in using their email and password. If the login is successful, the user is redirected to their profile page. Failed login attempts will display an error message.</p>
        </li>
        <li>
            <strong>Registration Page (register.php)</strong>
            <p>Users can create an account by providing their name, email, and password. Passwords are securely hashed before being stored in the database.</p>
        </li>
        <li>
            <strong>Profile Page (profile.php)</strong>
            <p>Displays the user's information (name, email). Users can navigate to the Edit Profile page to update their details.</p>
        </li>
        <li>
            <strong>Edit Profile Page (edit_profile.php)</strong>
            <p>Allows the user to update their name and email. After saving, changes are reflected on the Profile Page.</p>
        </li>
        <li>
            <strong>Logout (logout.php)</strong>
            <p>Ends the user's session and redirects them back to the login page.</p>
        </li>
    </ol>

    <h1>Technologies Used</h1>
    <ul>
        <li>Backend: PHP (Server-side scripting)</li>
        <li>Database: MySQL (Relational Database Management)</li>
        <li>Frontend: HTML, CSS</li>
        <li>Session Handling: PHP Sessions for authentication</li>
    </ul>

    <h1>Security</h1>
    <ul>
        <li>Password Encryption: User passwords are encrypted using PHP's <code>password_hash()</code> function.</li>
        <li>Input Validation: Basic validation is applied to form inputs to ensure data integrity.</li>
    </ul>

    <h1>Screenshots</h1>
    <ol>
        <li>Login Page</li>
        <li>Registration Page</li>
        <li>Profile Page</li>
    </ol>

    <h1>License</h1>
    <p>This project is open-source and available under the MIT License.</p>
