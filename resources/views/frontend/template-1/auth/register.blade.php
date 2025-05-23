@extends('frontend.template-1.partials.master')
@section('content')

    <!-- ========== inner-page-banner end ============= -->  
    @include('frontend.template-1.breadcrumb.breadcrumb')
    <div class="signup-section pt-120 pb-120">
        <img alt="image" src="{{ asset('frontend/images/bg/section-bg.png') }}" class="section-bg-top">
        <img alt="image" src="{{ asset('frontend/images/bg/section-bg.png') }}" class="section-bg-bottom">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>{{ translate('Sign Up') }}</h3>
                            <p>{{ translate('Do you already have an account?') }} <a
                                    href="{{ url('login') }}">{{ translate('Log in here') }}</a></p>
                        </div>




                    












<!-- Nav Tabs -->
  <ul class="nav nav-tabs" id="formTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="form1-tab" data-bs-toggle="tab" data-bs-target="#form1" type="button" role="tab">
       Individual
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="form2-tab" data-bs-toggle="tab" data-bs-target="#form2" type="button" role="tab">
       Company
      </button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content mt-3" id="formTabsContent">
    <!-- Form 1 -->
    <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
      <form action="{{ route('register') }}" method="POST">
        @csrf
                        <input type="hidden" value="Individuals" name="register_as">
                        <input type="hidden" name="company_name" class="form-control">
                         <input type="hidden" name="company_id" class="form-control">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>{{ translate('First Name') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('first_name') }}"
                                            class="@error('first_name') is-invalid @enderror" name="first_name"
                                            placeholder="{{ translate('First Name') }}">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>{{ translate('Last Name') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('last_name') }}"
                                            class="@error('last_name') is-invalid @enderror" name="last_name"
                                            placeholder="{{ translate('Last Name') }}">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Username') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('username') }}"
                                            class="@error('username') is-invalid @enderror" name="username"
                                            placeholder="{{ translate('Username') }}">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Enter Your Email') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="email" value="{{ old('email') }}"
                                            class="@error('email') is-invalid @enderror" name="email"
                                            placeholder="{{ translate('Enter Your Email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Enter Your ID or Passport Number') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('idnumber') }}"
                                            class="@error('email') is-invalid @enderror" name="individual_id"
                                            placeholder="{{ translate('Enter Your ID Number') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                 
                               

                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Password') }} <span class="text-danger">*</span></label>
                                        <input type="password" class="@error('password') is-invalid @enderror"
                                            name="password" id="password" placeholder="{{ translate('Password') }}" />
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Confirm Password') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" id="password2"
                                            placeholder="{{ translate('Confirm Password') }}" />
                                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" name="terms_policy" value="1" id="terms_policy"
                                                {{ old('terms_policy') == 1 ? 'checked' : '' }} required>
                                            <label for="terms_policy"> {{ translate('I agree to the Terms & Policy') }}</label>
                                            <br>
                                            <span class="terms_policy" style="display:none;">
                                                <strong
                                                    class="text-danger">{{ translate('The Terms & Policy field is required') }}.</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>




         <button type="submit" class="account-btn">{{ translate('Create Account') }}</button>
      </form>
    </div>

    <!-- Form 2 -->
    <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
      <form action="{{ route('register') }}" method="POST">
        @csrf
                        <input type="hidden" value="Company" name="register_as">
                        <input type="hidden" name="individual_id" class="form-control">
                        
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>{{ translate('First Name') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('first_name') }}"
                                            class="@error('first_name') is-invalid @enderror" name="first_name"
                                            placeholder="{{ translate('First Name') }}">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>{{ translate('Last Name') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('last_name') }}"
                                            class="@error('last_name') is-invalid @enderror" name="last_name"
                                            placeholder="{{ translate('Last Name') }}">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Username') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('username') }}"
                                            class="@error('username') is-invalid @enderror" name="username"
                                            placeholder="{{ translate('Username') }}">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Enter Your Email') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="email" value="{{ old('email') }}"
                                            class="@error('email') is-invalid @enderror" name="email"
                                            placeholder="{{ translate('Enter Your Email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Enter Company Name') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('idnumber') }}"
                                            class="@error('email') is-invalid @enderror" name="company_name"
                                            placeholder="{{ translate('Enter Your ID Number') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                 <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Enter Company ID') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('idnumber') }}"
                                            class="@error('email') is-invalid @enderror" name="company_id"
                                            placeholder="{{ translate('Enter Your ID Number') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                 
                               

                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Password') }} <span class="text-danger">*</span></label>
                                        <input type="password" class="@error('password') is-invalid @enderror"
                                            name="password" id="password" placeholder="{{ translate('Password') }}" />
                                        <i class="bi bi-eye-slash" id="togglePassword1"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Confirm Password') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" id="password2"
                                            placeholder="{{ translate('Confirm Password') }}" />
                                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" name="terms_policy" value="1" id="terms_policy"
                                                {{ old('terms_policy') == 1 ? 'checked' : '' }} checked>
                                            <label for="terms_policy"> {{ translate('I agree to the Terms & Policy') }}</label>
                                            <br>
                                            <span class="terms_policy" style="display:none;">
                                                <strong
                                                    class="text-danger">{{ translate('The Terms & Policy field is required') }}.</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>




         <button type="submit" class="account-btn">{{ translate('Create Account') }}</button>
      </form>
    </div>
  </div>






















                        <!-- <form class="w-100 register-form" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>{{ translate('First Name') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('first_name') }}"
                                            class="@error('first_name') is-invalid @enderror" name="first_name"
                                            placeholder="{{ translate('First Name') }}">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label>{{ translate('Last Name') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('last_name') }}"
                                            class="@error('last_name') is-invalid @enderror" name="last_name"
                                            placeholder="{{ translate('Last Name') }}">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Username') }} <span class="text-danger">*</span></label>
                                        <input type="text" value="{{ old('username') }}"
                                            class="@error('username') is-invalid @enderror" name="username"
                                            placeholder="{{ translate('Username') }}">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Enter Your Email') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="email" value="{{ old('email') }}"
                                            class="@error('email') is-invalid @enderror" name="email"
                                            placeholder="{{ translate('Enter Your Email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                               

                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Password') }} <span class="text-danger">*</span></label>
                                        <input type="password" class="@error('password') is-invalid @enderror"
                                            name="password" id="password" placeholder="{{ translate('Password') }}" />
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>{{ translate('Confirm Password') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="password_confirmation" id="password2"
                                            placeholder="{{ translate('Confirm Password') }}" />
                                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" name="terms_policy" value="1" id="terms_policy"
                                                {{ old('terms_policy') == 1 ? 'checked' : '' }} required>
                                            <label for="terms_policy"> {{ translate('I agree to the Terms & Policy') }}</label>
                                            <br>
                                            <span class="terms_policy" style="display:none;">
                                                <strong
                                                    class="text-danger">{{ translate('The Terms & Policy field is required') }}.</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if (get_setting('google_recapcha_check') == 1)
                                <div class="g-recaptcha mb-3" data-sitekey="{{ get_setting('recaptcha_key') }}"></div>
                                @if (Session::has('g-recaptcha-response'))
                                    <p class="text-danger"> {{ Session::get('g-recaptcha-response') }}</p>
                                @endif
                            @endif

                            <button type="submit" class="account-btn">{{ translate('Create Account') }}</button>
                        </form> -->

                        <div class="form-poicy-area mt-3">
                            <p>{{ translate('By clicking the "signup" button, you create a Customer account, and you agree to Customers') }}
                                <a href="{{ get_setting('term_conditions_link') }}"
                                    target="_blank">{{ translate('Terms & Conditions') }}</a> &
                                <a href="{{ get_setting('privacy_policy_link') }}"
                                    target="_blank">{{ translate('Privacy Policy') }}.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
  
@endsection







