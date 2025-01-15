@extends('layouts.master')
@section('content')
    <!-- Registration 3 - Bootstrap Brain Component -->
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
                    <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
                        <h3 class="m-0">Welcome!</h3>
                        <img class="img-fluid rounded mx-auto my-4" loading="lazy" src="{{ asset('images/feedback.jpg') }}"
                            width="245" height="100" alt="BootstrapBrain Logo">
                        <p class="mb-0">Kindly Share Your Feedback With Us<a href="#!"
                                class="link-secondary text-decoration-none"></a></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
                    <div class="p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h2 class="h3"></h2>
                                    <h3 class="fs-6 fw-normal text-secondary m-0 text-primary">Please Share Your Feedback With Us</h3>
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('user.feedback') }}" method="POST">
                            @csrf
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="firstName" class="form-label">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="firstName" id="firstName"
                                        placeholder="First Name" value="{{ old('firstName') }}">
                                    <span class="text-danger"> @error('firstName')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <label for="lastName" class="form-label">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="lastName" id="lastName"
                                        placeholder="Last Name" value="{{ old('lastName') }}">
                                    <span class="text-danger"> @error('lastName')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="name@example.com" value="{{ old('email') }}">
                                    <span class="text-danger"> @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Feedback Content<span
                                            class="text-danger">*</span></label>
                                    <textarea rows="7" name="feedback" class="form-control" name="feedback">
                    {{ old('lasttName') }}
                  </textarea>
                                    <span class="text-danger"> @error('feedback')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="terms" name="terms"
                                            id="iAgree">
                                        <label class="form-check-label text-secondary" for="iAgree">
                                            I agree to the <a href="#!" class="link-primary text-decoration-none">terms
                                                and conditions</a>
                                        </label>
                                        <span class="text-danger"> @error('terms')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn bsb-btn-xl btn-primary" type="submit">Send Feedback</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <p class="m-0 text-secondary text-end">Already have an account? <a href="#!"
                                        class="link-primary text-decoration-none">Sign in</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="mt-5 mb-4">Or sign in with</p>
                                <div class="d-flex gap-3 flex-column flex-xl-row">
                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                            <path
                                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                        </svg>
                                        <span class="ms-2 fs-6">Google</span>
                                    </a>
                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                        <span class="ms-2 fs-6">Facebook</span>
                                    </a>
                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg>
                                        <span class="ms-2 fs-6">Twitter</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection