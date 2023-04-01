<div>
    <!-- Login form -->
    <div class="login-form wmin-sm-400">
        <div class="card mb-0">

            <div class="tab-content card-body">
                <div class="tab-pane fade show active">
                    @if($status == 'login')
                    <form wire:submit.prevent='login'>

                        <div class="text-center mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                <img src="{{url('/')}}/assets/images/logo_icon.svg" class="h-48px" alt="">
                            </div>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Enter your credentials below</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="pras@mre.com" wire:model.defer='email'>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-control-feedback-icon">
                                    <i class="ph-user-circle text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Enter your password" wire:model.defer='password'>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-control-feedback-icon">
                                    <i class="ph-lock text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <label class="form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember"
                                    wire:model.defer='remember'>
                                <span class="form-check-label">Remember</span>
                            </label>

                            <a href="#" class="ms-auto">Forgot password?</a>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>

                        <div class="text-center text-muted content-divider mb-3">
                            <span class="px-2">or sign in with</span>
                        </div>

                        <div class="text-center mb-3">
                            <button type="button"
                                class="btn btn-outline-primary btn-icon rounded-pill border-width-2"><i
                                    class="ph-facebook-logo"></i></button>
                            <button type="button"
                                class="btn btn-outline-pink btn-icon rounded-pill border-width-2 ms-2"><i
                                    class="ph-dribbble-logo"></i></button>
                            <button type="button"
                                class="btn btn-outline-secondary btn-icon rounded-pill border-width-2 ms-2"><i
                                    class="ph-github-logo"></i></button>
                            <button type="button"
                                class="btn btn-outline-info btn-icon rounded-pill border-width-2 ms-2"><i
                                    class="ph-twitter-logo"></i></button>
                        </div>

                        <div class="text-center text-muted content-divider mb-3">
                            <span class="px-2">Don't have an account?</span>
                        </div>

                        <div class="mb-3">
                            <a wire:click.prevent="registerForm" class="btn btn-light w-100">Sign up</a>
                        </div>

                        <span class="form-text text-center text-muted">By continuing, you're confirming that you've read
                            our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                    </form>
                    @elseif($status == 'register')
                    <form wire:submit.prevent='register'>
                        <div class="text-center mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                <img src="{{url('/')}}/assets/images/logo_icon.svg" class="h-48px" alt="">
                            </div>
                            <h5 class="mb-0">Create account</h5>
                            <span class="d-block text-muted">All fields are required</span>
                        </div>

                        <div class="text-center text-muted content-divider mb-3">
                            <span class="px-2">Your credentials</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter your full name"
                                    wire:model.defer='name'>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-control-feedback-icon">
                                    <i class="ph-user-circle text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" placeholder="Enter your username"
                                    wire:model.defer='username'>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-control-feedback-icon">
                                    <i class="ph-user-circle text-muted"></i>
                                </div>
                            </div>
                        </div>



                        <div class="mb-3">
                            <label class="form-label">Your email</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Enter your email"
                                    wire:model.defer='email'>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-control-feedback-icon">
                                    <i class="ph-at text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Enter your password"
                                    wire:model.defer='password'>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-control-feedback-icon">
                                    <i class="ph-lock text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password Confirmation</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" placeholder="Enter your password confirmation"
                                    wire:model.defer='password_confirmation'>
                                <div class="form-control-feedback-icon">
                                    <i class="ph-at text-muted"></i>
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-muted content-divider mb-3">
                            <span class="px-2">Additions</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input @error('accept') is-invalid @enderror"
                                    id="accept" name="accept" wire:model.defer='accept'>
                                @error('accept')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <span class="form-check-label">Accept <a href="javascript: void(0);"> terms of
                                        service</a></span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-teal w-100">Register</button>

                        <div class="text-center text-muted content-divider mb-3 mt-3">
                            <span class="px-2">Have an account?</span>
                        </div>

                        <div class="mb-3">
                            <a wire:click.prevent="loginForm" class="btn btn-light w-100">Sign in</a>
                        </div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- /login form -->
</div>