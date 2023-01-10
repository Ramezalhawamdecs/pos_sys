<div class="login-page">
    <h1>Admin Login Page</h1>
    <form class="login-form" method="POST" action="/authenticate">
    <?php if (!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
            <div class='alert alert-danger mb-3' role='alert'>
                <?= $_SESSION['error'] ?>
            </div>
        <?php
            $_SESSION['error'] = null;
        endif; ?>
        
        <div>
            <label for="admin-username">Username:</label>
            <input type="text" id="admin-username" name="username">
        </div>
        <div>
            <label for="admin-password">Password:</label>
            <input type="password" id="admin-password" name="password">
        </div>
        <div>
            
            <input type="checkbox" id="remember-me" name="remember_me">
            <label for="remember-me">Remember Me</label>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
