<x-layouts.auth>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-90 fmxw-700">
                        <h1 class="h3">{{ __('Verify Your Email Address') }}</h1>
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif
                        <p class="mb-4">{{ __('Before proceeding, please check your email for a verification link.') }}
                        </p>
                        <p class="mb-4">{{ __('If you did not receive the email') }}</p>

                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <!-- Form -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">{{ __('click here to request another') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center">
                    <a href="{{ route('logout') }}" class="d-flex align-items-center justify-content-center" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Logout') }}
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </p>
            </div>
        </div>
    </section>
</x-layouts.auth>