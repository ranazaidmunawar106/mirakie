<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <!--<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />-->
                    <!--<button class="au-btn--submit" type="submit">-->
                    <!--    <i class="zmdi zmdi-search"></i>-->
                    <!--</button>-->
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                         {{-- <div class="noti__item js-item-menu">
                           
                            <i class="fab fa-first-order"></i>
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">2</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have 2 news message</p>
                                </div>
                               
                                
                                <div class="mess__footer">
                                    <a href="#">View all messages</a>
                                </div>
                            </div>
                        </div>  --}}

                        {{-- <div class="noti__item js-item-menu">
                            <i class="fa fa-product-hunt" aria-hidden="true"></i>

                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">1</span>
                           
                        </div>  --}}
                        {{-- <div class="noti__item js-item-menu"> --}}
                            {{-- <i class="fa fa-user" aria-hidden="true"></i> --}}

                            {{-- <i class="zmdi zmdi-email"></i> --}}
                            {{-- <span class="quantity">1</span> --}}
                            {{-- <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have 3 New Emails</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, 3 min ago</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, April 12,,2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div> --}}
                        {{-- </div>  --}}

                        <style>


.noti__item .quantity {
  position: absolute;
  display: inline-block;
  top: -4px!important;
  right: -14px!important;
  height: 23px!important;
  width: 27px!important;
  line-height: 2!important;
  text-align: center;
  background: #ff4b5a;
  color: #fff;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  font-size: 10px;
}


                            </style>


<?php


// $user = Auth::user(); // Get the currently logged in user
//         $users_id = Auth::id(); // Get the currently logged in user
//         $UserStat = App\Models\UserStatus::where('user_id',$users_id)->first();
//         $order_role = App\Models\Role::where('id', $UserStat->status)->first();

        // dd($order_role);
?>










{{-- @if($order_role->name == 'Super Admin') --}}

                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"  style="font-size: 38px"></i>
                            <span class="quantity user_countt">0</span>
                            <div class="notifi-dropdown js-dropdown" id="userDataContainer" style="height: 350px;
                                 overflow: auto;">
                               
                            </div>
                        </div>

                        {{-- @else



                   


                        @endif --}}


                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">

                                <?php
                                       
                                $user_image = App\Models\User::where('id',Auth::id())->first();
                                                          //  dd($user_image->image);
          
                                                      ?>
          
                                                     @if( $user_image->image != "" )
                                                      <img src="{{ asset('users_images/'.$user_image->image) }}" alt="John Doe" />
                                                      @else
                                                      <img src="{{asset('images/icon/avatar-01.jpg')}}" alt="John Doe" />
          
                                                      @endif



                                
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">  
                                        <a href="#">

                                            <?php
                                       
                      $user_image = App\Models\User::where('id',Auth::id())->first();
                                                //  dd($user_image->image);

                                            ?>

                                           @if( $user_image->image != "" )
                                            <img src="{{ asset('users_images/'.$user_image->image) }}" alt="John Doe" />
                                            @else
                                            <img src="{{asset('images/icon/avatar-01.jpg')}}" alt="John Doe" />

                                            @endif
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{Auth::user()->name}}</a>
                                        </h5>
                                        <span class="email">{{Auth::user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{route('edituser',auth()->id())}}">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>