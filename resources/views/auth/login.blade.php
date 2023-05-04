<form method="post" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
        @error('email')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('email') is-invalid @enderror" name="password">
        @error('password')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-violet">Accedi</button>
</form>