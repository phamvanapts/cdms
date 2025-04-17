<form action="/users/update" method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($user->id); ?>">
    
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user->name); ?>" required>
    </div>
    
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user->email); ?>" required>
    </div>
    
    <div>
        <button type="submit">Update User</button>
    </div>
</form>