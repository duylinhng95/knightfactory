<div class="overlay" style="display: none;">
    <div class="login-wrapper">
        <div class="login-content">
            <a class="close">x</a>
            <h3>Sign in</h3>
            @if(isset($error))
            <p><strong>{{$error}}</strong></p>
            @endif
            <form action="{{url('student/login')}}" method="post">
                {!!csrf_field()!!}
                <label for="username">
                    Email:
                    <input type="text" name="email" id="email" />
                </label>
                <label for="password">
                    Password:
                    <input type="password" name="password" id="password"/>
                </label>
                <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
</div>
