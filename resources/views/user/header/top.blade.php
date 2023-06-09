            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Wolmart Store message or remove it!</p>
                    </div>
                    <div class="header-right">
                        

                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                    height="8" class="dropdown-image" /> ENG</a>
                            <div class="dropdown-box">
                                <a href="#ENG">
                                    <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    ENG
                                </a>
                                <a href="#FRA">
                                    <img src="assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    FRA
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                  
                       
                        <span class="divider d-lg-show"></span>
                        <a href="blog.html" class="d-lg-show">Blog</a>
                        <a href="contact-us.html" class="d-lg-show">Contact Us</a>
                        <a href="{{url('myaccount')}}" class="d-lg-show">My Account</a>
                        
                        
                       @if (Route::has('login'))
                        
                        @auth

                        <span style="">  
                            <x-app-layout>
                            </x-app-layout>
                        </span>
                      
                        @else
                       

                            <a href="{{ route('login') }}" class="d-lg-show login sign-in"><i
                                class="w-icon-account"></i>Sign In</a>
                            <span class="delimiter d-lg-show">/</span>
                             <a href="{{ route('register')}}" class="ml-0 d-lg-show login register">Register</a>
                        @endauth
                            
                        @endif
                       
                    </div>
                </div>
            </div>