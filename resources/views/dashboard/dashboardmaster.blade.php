@include('layouts.dash_header')
<body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
                <div class="pcoded-overlay-box"></div>
                <div class="pcoded-container navbar-wrapper" id="app">
                @include('dashboard.nav')

                {{--  main body  --}}
               
                        
                        

                    
                </div>
        </div>
        

                       
   @include('layouts.dash_footer')
