<header>
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#" class="logo-st">Rise<em style="color: #ff4641;font-style:normal;">The</em>Flag</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Start Petison</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Browse</a>
                    </li>
                    <li class="nav-item btn-cl">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal" style="color:#fff!important"> Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-center">SignUp</h4>
                <button type="button" class="close sign-close" data-dismiss="modal">&times;</button>
<!--
                <form action="">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Firstname">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Lastname">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option >Select gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                <option>Select City</option>
                                    <option>Vellore</option>
                                    <option>Chennai</option>
                                    <option>Salem</option>
                                    <option>Delhi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="sign-btn">Submit</a>

                </form>
-->
         <div class="form"> 
          <form class="register-form">
            <input type="text" placeholder="NGO name"/>
            <input type="text" placeholder="NGO registration number"/>
            <input type="text" placeholder="Trust name"/>
            <input type="text" placeholder="Email id"/>
            <input type="text" placeholder="Phone Number"/>
            <button>Create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form class="login-form">
            <input type="text" placeholder="Username"/>
            <input type="password" placeholder="Password"/>
            <input type="text" placeholder="Phone Number"/>
            <input type="text" placeholder="Email id"/>
            <button>login</button>
            <p class="message">Signup With NGO<a href="#" style="text-decoration:underline;font-weight:bold;">&nbsp;Click Here</a></p>
          </form>
        </div>

            </div>

            <!-- Modal footer -->
        </div>
    </div>
</div>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>