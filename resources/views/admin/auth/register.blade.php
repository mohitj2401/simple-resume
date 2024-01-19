<x-admin.guest-layout>
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>

                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4>Register</h4>

                            <div class="form-group">
                                <label class="col-form-label">Name</label>
                                <input class="form-control" type="text" required="" name="name" placeholder="">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" required="" name="email"
                                    placeholder="Test@gmail.com">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirm Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password_confirmation"
                                        required="" placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="form-group mb-0">
                                {{-- <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Remember password</label>

                                </div>
                                @if (Route::has('password.request'))
                                    <a class="link" href="forget-password.html">Forgot password?</a>
                                @endif --}}
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign Up</button>
                                </div>
                            </div>
                            {{-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                            <div class="social mt-4">
                                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                        target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn
                                    </a><a class="btn btn-light" href="https://twitter.com/login?lang=en"
                                        target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a
                                        class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i
                                            class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                            </div>
                            <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                    href="sign-up.html">Create
                                    Account</a></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-admin.guest-layout>
