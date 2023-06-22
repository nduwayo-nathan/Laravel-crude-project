<!-- edit.blade.php -->
<h1>Edit User</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $user->name }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" required>
    <input type="password" name="password" placeholder="New Password" required>
    <button type="submit">Update User</button>
</form>
