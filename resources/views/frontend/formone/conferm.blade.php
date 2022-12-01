@extends('frontend.layouts.main')
@section('content')
<style type="text/css">
.login-page{
	text-align: center;
}
svg {
  display: block;
  height: 5vw;
  width: 100%;
  color: #204066; /* SVG path use currentColor to inherit this */
}

.circle {
  stroke-dasharray: 76;
  stroke-dashoffset: 76;
  animation: draw 1s forwards;
}

.tick {
  stroke-dasharray: 18;
  stroke-dashoffset: 18;
  animation: draw 1s forwards 1s;
}

@keyframes draw { 
  to { stroke-dashoffset: 0 } 
}
</style>

<div class="container-homepage main-div-login p-5">
   <div class="row justify-content-center">
             <div class="col-xl-5 col-md-10">
                 <div class="login_wrap">
                     <div class="padding_eight_all bg-white login-page">
                         <svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
						  <g stroke="currentColor" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
						    <path class="circle" d="M13 1C6.372583 1 1 6.372583 1 13s5.372583 12 12 12 12-5.372583 12-12S19.627417 1 13 1z"/>
						    <path class="tick" d="M6.5 13.5L10 17 l8.808621-8.308621"/>
						  </g>
						</svg>

						<h2 style="margin-top:20px;">Your Quote Submited Successfully</h2>
            <a style="margin-top:20px;" href="{{ url('login') }}">Login To See Your Policy Details</a>
                     </div>
                 </div>
             </div>
         </div>                
</div>
@endsection