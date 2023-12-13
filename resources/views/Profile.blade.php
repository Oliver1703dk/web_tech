<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<h1>Profile</h1>

<p>Email: {{ $userEmail }}</p>

<h2>Change Password</h2>
<form action="{{ route('profile.changePassword') }}" method="post">
    @csrf

    <label for="oldPassword">Old Password:</label>
    <input type="password" id="oldPassword" name="oldPassword" required>
    @error('oldPassword')
    <p class="error">{{ $message }}</p>
    @enderror
<br>
    <label for="newPassword">New Password:</label>
    <input type="password" id="newPassword" name="newPassword" required>
    @error('newPassword')
    <p class="error">{{ $message }}</p>
    @enderror
    <br>
    <label for="newPasswordConfirmation">Confirm Password:</label>
    <input type="password" id="newPasswordConfirmation" name="newPasswordConfirmation" required>
    <br>
    <button type="submit">Change Password</button>
</form>
</body>
</html>
