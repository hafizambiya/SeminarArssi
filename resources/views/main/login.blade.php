 @extends('layout.template')


 @section('content')
   <!-- Header -->
   <div class="header bg-gradient-primary py-7 py-lg-8">
     <div class="container">
       <div class="header-body text-center mb-7">
         <div class="row justify-content-center">
           <div class="col-lg-5 col-md-6">
             <h1 class="text-white">Welcome!</h1>
             <p class="text-lead text-light">Use these awesome forms to login or create new account in your
               project for free.</p>
             @if ($message = Session::get('failed'))
               <p class="text-danger bg-light">{{ $message }}
               </p>
             @endif


           </div>
         </div>
       </div>
     </div>
     <div class="separator separator-bottom separator-skew zindex-100">
       <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
         xmlns="http://www.w3.org/2000/svg">
         <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
       </svg>
     </div>
   </div>
   <!-- Page content -->
   <div class="container mt--8 pb-5">
     <div class="row justify-content-center">
       <div class="col-lg-5 col-md-7">
         <div class="card bg-secondary shadow border-0">

           <div class="card-body px-lg-5 py-lg-5">

             <form action="{{ url('login/proses') }}" method="POST">
               @csrf
               <div class="form-group mb-3">
                 <div class="input-group input-group-alternative">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                   </div>
                   <input class="form-control" placeholder="Email" type="email" name="email"
                     value="{{ old('email') }}">
                 </div>
                 @error('email')
                   {{ $message }}
                 @enderror
               </div>
               <div class="form-group">
                 <div class="input-group input-group-alternative">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                   </div>
                   <input class="form-control" placeholder="Password" type="password" name="password">
                 </div>
                 @error('password')
                   {{ $message }}
                 @enderror
               </div>
               <div class="custom-control custom-control-alternative custom-checkbox">
                 <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                 <label class="custom-control-label" for=" customCheckLogin">
                   <span class="text-muted">Remember me</span>
                 </label>
               </div>
               <div class="text-center">
                 <button type="submit" class="btn btn-primary my-4">Sign in</button>
               </div>
             </form>
           </div>
         </div>
         <div class="row mt-3">
           <div class="col-6">
             <a href="#" class="text-light"><small>Forgot password?</small></a>
           </div>
           <div class="col-6 text-right">
             <a href="#" class="text-light"><small>Create new account</small></a>
           </div>
         </div>
       </div>
     </div>
   </div>

   @if ($message = session::get('failed'))
   @endif
 @endsection
