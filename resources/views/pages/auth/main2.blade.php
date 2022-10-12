<x-auth-layout title="Masuk">
    <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y"> 
            <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20"> 
                <a href="../../../index.html" class="py-9 mb-5">
                    <img alt="Logo" src="../../../assets/media/logos/logo-2.svg" class="h-60px" />
                </a> 
                <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to {{config('app.name')}}</h1> 
                <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing {{config('app.name')}} 
                <br />with great build tools</p> 
            </div> 
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(/metronic8/demo15/assets/media/illustrations/dozzy-1/13.png"></div>
        </div> 
    </div> 
    <div class="d-flex flex-column flex-lg-row-fluid py-10"> 
        <div class="d-flex flex-center flex-column flex-column-fluid"> 
            <div class="w-lg-500px p-10 p-lg-15 mx-auto"> 
                <form class="form w-100" novalidate="novalidate" id="form_login"> 
                    <div class="text-center mb-10"> 
                        <h1 class="text-dark mb-3">Sign In to Metronic</h1> 
                        <div class="text-gray-400 fw-bold fs-4">New Here? 
                        <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a></div> 
                    </div> 
                    <div class="fv-row mb-10"> 
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label> 
                        <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" /> 
                    </div> 
                    <div class="fv-row mb-10"> 
                        <div class="d-flex flex-stack mb-2"> 
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label> 
                            <a href="password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> 
                        </div> 
                        <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" /> 
                    </div> 
                    <div class="text-center"> 
                        <button type="submit" id="tombol_login" onclick="handle_post('#tombol_login','#form_login','{{route('auth.login')}}');" class="btn btn-lg btn-primary w-100 mb-5">
                            <span class="indicator-label">Continue</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="../../../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a> 
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="../../../assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a> 
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                        <img alt="Logo" src="../../../assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
</x-auth-layout>