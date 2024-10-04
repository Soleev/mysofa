<div class="container">
    <h1>Введите пароль для доступа к странице</h1>

    @if ($errors->has('password'))
        <div class="alert alert-danger">
            {{ $errors->first('password') }}
        </div>
    @endif

    <form action="{{ route('products.password.check') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
