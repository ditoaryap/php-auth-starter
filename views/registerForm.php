<form action="" method="post">
    <div class="form">
        <h1>REGISTER</h1>
        
        <div class="input-group">
            <label for="username">USERNAME</label>
            <input type="username" id="username" placeholder="username" required>
        </div>
        
        <div class="input-group">
            <label for="email">EMAIL</label>
            <input type="email" id="email" placeholder="your@email.com" required>
        </div>
        
        <div class="input-group">
            <label for="password">PASSWORD</label>
            <input type="password" id="password" placeholder="••••••••" required>
        </div>

        <div class="input-group">
        <label for="role">Choose a role:</label>
        <select name="role" id="role" required>
            <option value="">--Choose a Role--</option>
            <option value="user">USER</option>
            <option value="admin">ADMIN</option>
        </select>
        </div>
        
        <button type="submit">REGISTER</button>
        
        <div class="footer">
            Already have an account? <a href="?page=login">Sign In</a>
        </div>
    </div>
</form>