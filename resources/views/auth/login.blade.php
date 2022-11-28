
<div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<form action="/login" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <div>
        <button>Log In</button>
    </div>
</form>
