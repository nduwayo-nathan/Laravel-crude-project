<!-- show.blade.php -->
<h1>User Details</h1>

<p><strong>Name:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>

<a href="{{ route('users.index') }}">Back to Users</a>
