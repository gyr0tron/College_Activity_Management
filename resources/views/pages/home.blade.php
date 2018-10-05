@extends('layouts.master')
@section('pre')
  @php
  $title = config('app.name');
  $menu_item = 'home';
@endphp
@section('css')
<link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
@endsection

@section('content')
	<div id="wrap">
  
  <!-- Fixed navbar -->
  <div id="myNav" class="navbar navbar-default" data-spy="affix" data-offset-top="200">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">College Activity <span>Manager</span></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#advertisers-publishers">Advertisers &amp; Publishers</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#tools">Tools</a></li>
          <li><a href="#contacts">Contacts</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <div id="home" class="slide">
	<div class="wrapper"><div class="container"><div class="container-valign-wrapper"><div class="container-valign">
    
    
			<h2 class="text-center wow animated bounceIn">Get on top, get a media!</h2>
     
	      <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3 text-center">
              <div class="stats-container">
                <span class="subject">Regular Banner</span>
                <!--<span class="number">285.1 M</span>-->
                <span class="number" id="stats1"></span>
                
                <span class="suffix">clicks</span>
              </div>
          </div>
            <div class="col-xs-6 col-sm-3 col-md-3 text-center">
              <div class="stats-container">
                <span class="subject">Popunder</span>
                <!--<span class="number">12.5 M</span>-->
                <span class="number" id="stats2"></span>
                
                <span class="suffix">clicks</span>
              </div>
              
          </div>
            <div class="col-xs-6 col-sm-3 col-md-3 text-center">
              <div class="stats-container">
                <span class="subject">Mobile Banner</span>
                <!--<span class="number">74.3 M</span>-->
                <span class="number" id="stats3"></span>
                
                <span class="suffix">clicks</span>
              </div>
          </div>
            <div class="col-xs-6 col-sm-3 col-md-3 text-center">
              <div class="stats-container">
                <span class="subject">Regular Banner</span>
                <!--<span class="number">285.1 M</span>-->
                <span class="number" id="stats4"></span>
                
                <span class="suffix">clicks</span>
              </div>
              
          </div>
      </div> <!--.row-->
      
      <!--<p class="text-center">Last updated: <b>Yesterday</b></p>-->
      
      <p class="text-center">
        <a href="#" id="join-today" class="wow animated slideInLeft">Join our network today!</a>
      </p>
	   
      <div class="row wow animated slideInRight">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <ul style="float: right">
            <li>Monetize web & mobile traffic</li>
            <li>Fast secure payments</li>
            <li>eCPM real-time optimization</li>
            <li>24/7 qualified support</li>
            
          </ul>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <ul>
            <li>Own Adserver solution</li>
            <li>CPC, CPM & CPA</li>
            <li>Advanced targeting</li>
            <li>Real-time detailed statistics</li>
            
          </ul>
        </div>
        
    </div><!--.row-->
    
    </div></div><!--.container VALIGN -->
    
    </div><!--.container--></div>
	</div> <!--#home-->
	
  <div id="advertisers-publishers" class="slide">
    <div class="container">
      <div class="container-valign-wrapper"><div class="container-valign">
        
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="wow bounceInLeft animated">
            <h2 class="text-center publishers-icon">Publishers</h2>
            <p class="text-center">It is only up to you to decide if we have the best payout solutions, all you have to do is give us a try. Test your traffic with our network and enjoy the variety of advertisers and features we put at your disposal. All we want is for you to maximize your profits.</p>
            <p class="text-center">
              <a href="#" id="signup" class=" wow bounceInUp center animated">Sign Up</a>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="wow bounceInRight animated">
            <h2 class="text-center advertisers-icon">Advertisers</h2>
            <p class="text-center">We have a long-term relationship with the most renown affiliate programs, we offer the best support, high-end targeting solutions and a more than a decade of experience. Why would you go to other agencies/networks?</p>
            <p class="text-center">
              <a href="#" id="signup" class=" wow bounceInUp center animated">Sign Up</a>
            </p>
          </div>
        </div>
        
      </div> <!--.row-->
        
        </div></div> <!--.container VALIGN -->
    </div> <!--.container-->
    
  </div> <!--#advertisers-publishers-->
  
  <div id="features" class="slide">
    <div class="wrapper"><div class="container">
      <div class="container-valign-wrapper"><div class="container-valign">
      <div class="slide-description wow bounceInDown animated">
        <h2 class="text-center">Features</h2>
        <center><p class="text-center">Here are some of the perks you get if working with us. Everything you see here is included in all the the tools we offer at your disposal for making loads of cash.</p></center>
      </div>
      
      <div class="row">
        <div class="col-md-2 col-xs-4 col-sm-2 equal-height text-center wow flipInX"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/db572a78_o.png"/></div></div></div>
        <div class="col-md-4 col-xs-8 col-sm-4 equal-height wow flipInX">
          <div class="container-valign-wrapper"><div class="container-valign">
              <h3>Carrier ISP</h3>
              <p>You can select your traffic from a specific carrier</p>
            </div></div>
        </div>
        <div class="col-md-2 col-xs-4 col-sm-2 equal-height text-center  wow flipInX"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/59de9099_o.png"/></div></div></div>
        <div class="col-md-4 col-xs-8 col-sm-4 equal-height  wow flipInX">
          <div class="container-valign-wrapper"><div class="container-valign">
              <h3>Browser Targeting</h3>
              <p>Adjust your targeting based on a browser of your choice</p>
            </div></div>
        </div>
        
      
        <div class="col-md-2 col-xs-4 col-sm-2 equal-height text-center  wow flipInX"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/db572a78_o.png"/></div></div></div>
        <div class="col-md-4 col-xs-8 col-sm-4 equal-height  wow flipInX">
          <div class="container-valign-wrapper"><div class="container-valign">
              <h3>Geo-Location</h3>
              <p>Coordinate your campaigns in each country, or just the countries you are interested in</p>
            </div></div>
        </div>
        <div class="col-md-2 col-xs-4 col-sm-2 equal-height text-center  wow flipInX"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/59de9099_o.png"/></div></div></div>
        <div class="col-md-4 col-xs-8 col-sm-4 equal-height  wow flipInX">
          <div class="container-valign-wrapper"><div class="container-valign">
              <h3>Desktop</h3>
              <p>We have desktop as well, no just mobile</p>
            </div></div>
        </div>
        
        <div class="col-md-2 col-xs-4 col-sm-2 equal-height text-center  wow flipInX"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/db572a78_o.png"/></div></div></div>
        <div class="col-md-4 col-xs-8 col-sm-4 equal-height  wow flipInX">
          <div class="container-valign-wrapper"><div class="container-valign">
              <h3>Mobile</h3>
              <p>Start monetizing the mobile markets right now. Fast-paced and highly productive</p>
            </div></div>
        </div>
        
      </div> <!--.row-->
      
      <p class="text-center">
        <a href="#" id="signup" class=" wow bounceInUp center animated">Sign Up<span>and earn money now!</span></a>
      </p>
      
      </div> <!--.container--> 
      </div></div> <!--.container VALIGN -->
      
      </div>
    
  </div> <!--#features-->
  
	<div id="tools" class="slide">
    <div class="container">
      
      <div class="container-valign-wrapper"><div class="container-valign">
        
      <div class="slide-description wow bounceInDown animated">
        <h2 class="text-center">Tools</h2>
        <center><p class="text-center">Everything you need is right here. Our toolbox is filled with the latest technologies that, once applied to your traffic, will help you earn more money than ever before.</p></center>
      </div>
      
      <div class="row">
        <div class="col-md-1 col-xs-3 col-sm-2 equal-height text-center text-center wow bounceInLeft animated"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/db2453ba_o.png"/></div></div></div>
        <div class="col-md-5 col-xs-9 col-sm-4 equal-height wow bounceInLeft animated">
          <div class="container-valign-wrapper"><div class="container-valign">
          <h3>Mobile ads</h3>
          <p>The ever-growing market that craves for your ads. We’ll help you advertise in the most exclusive place</p>
            </div></div>
        </div>
        
        <div class="col-md-1 col-xs-3 col-sm-2 equal-height text-center text-center wow bounceInRight animated"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/06c7e2a1_o.png"/></div></div></div>
        <div class="col-md-5 col-xs-9 col-sm-4 equal-height wow bounceInRight animated">
          <div class="container-valign-wrapper"><div class="container-valign">
          <h3>Direct Link</h3>
          <p>A CPC-based tool that will boost your traffic through the roof.</p>
            </div></div>
        </div>
        
      
        <div class="col-md-1 col-xs-3 col-sm-2 equal-height text-center text-center wow bounceInLeft animated"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/7363168c_o.png"/></div></div></div>
        <div class="col-md-5 col-xs-9 col-sm-4 equal-height wow bounceInLeft animated">
          <div class="container-valign-wrapper"><div class="container-valign">
          <h3>Popunder</h3>
          <p>Yes, we know the rumors, but we have the stats to prove them wrong. Popunders are still a high converting promo tool, if used correctly.</p>
            </div></div>
        </div>
        
        <div class="col-md-1 col-xs-3 col-sm-2 equal-height text-center text-center wow bounceInRight animated"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/a592c274_o.png"/></div></div></div>
        <div class="col-md-5 col-xs-9 col-sm-4 equal-height wow bounceInRight animated">
          <div class="container-valign-wrapper"><div class="container-valign">
          <h3>Interstitial</h3>
          <p>Inserted carefully based on specific content, this tool will help you get exposure when and where you least expect it to.</p>
            </div></div>
         </div>
        
        <div class="col-md-1 col-xs-3 col-sm-2 equal-height text-center wow bounceInLeft animated"><div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/279b8310_o.png"/></div></div></div>
        <div class="col-md-5 col-xs-9 col-sm-4 equal-height wow bounceInLeft animated">
          <div class="container-valign-wrapper"><div class="container-valign">
          <h3>Instant Message</h3>
          <p>A direct approach is always a good approach. Exploit the instant message tool where the rest do not dare to.</p>
            </div></div>
        </div>
        
        
      </div> <!--.row-->
      
      <p class="text-center">
        <a href="#" id="signup" class=" wow bounceInUp center animated">Sign Up now!</a>
      </p>
      
    </div> <!--.container-->
    
      </div></div> <!--.container VALIGN -->
  </div> <!--#tools-->
	
  
  
    
	<div id="testimonials" class="slide">
    <div class="container">
      
      <div class="container-valign-wrapper"><div class="container-valign">
        
      <h2 class="text-center wow bounceInDown animated">What people say about us</h2>
      
      
      <div class="row">
        
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="col-md-4 col-sm-6 col-xs-4 text-center equal-height wow rollIn animated">
            <div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/8a7e4bf1_o.png" /></div></div>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-8 text-left equal-height wow bounceInRight animated">
            <div class="container-valign-wrapper"><div class="container-valign">
            <h3>Maya</h3>
            <p>"Haha, can't believe I have to vouch for you guys!! I'm sure people know about you by now!"</p>
              </div></div>
          </div>
          
        </div>
        
        
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="col-md-4 col-sm-6 col-xs-4 text-center equal-height wow rollIn animated">
            <div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/8a7e4bf1_o.png" /></div></div>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-8 text-left equal-height wow bounceInRight animated">
            <div class="container-valign-wrapper"><div class="container-valign">
            <h3>Nadia</h3>
            <p>"I'm rich thanks to you guys, what more do you want me to say?"</p>
              </div></div>
          </div>
          
        </div>
        
        
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="col-md-4 col-sm-6 col-xs-4 text-center equal-height wow rollIn animated">
            <div class="container-valign-wrapper"><div class="container-valign"><img src="http://i.share.pho.to/8a7e4bf1_o.png" /></div></div>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-8 text-left equal-height wow bounceInRight animated">
            <div class="container-valign-wrapper"><div class="container-valign">
            <h3>Stephen</h3>
            <p>"Love that you guys keep it fresh, always flexible, thank you for adapting to my needs."</p>
              </div></div>
          </div>
          
        </div>
        
      </div> <!--.row-->
      </div> <!--.container-->
      
      </div></div> <!--.container VALIGN -->
        
      
    
  </div> <!--#tools-->
  
  <div id="contacts" class="slide">
    <div class="wrapper"><div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 wow bounceInLeft animated">
          <h2 class="wow bounceInDown animated">Want to know more?</h2>
          <form action="#" method="post">
            <input type="text" name="name" placeholder="Name" />
            <input type="text" name="email" placeholder="Email" />
            <input type="text" name="website" placeholder="Website" />
            <textarea name="message" placeholder="Message"></textarea>
            <input type="submit" value="Send" class=" wow bounceInUp animated" />
          </form>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12 text-left">
         <div class="col-md-6 col-sm-6 col-xs-6 text-left wow bounceInRight animated"> 
          <h3>General Questions</h3>
          <ul>
            <li class="email">support@getamedia.com</li>
            <li class="skype">getamedia_office</li>
            
          </ul>
          <h3>Publishers</h3>
          <ul>
            <li class="email">support@getamedia.com</li>
            <li class="skype">getamedia_office</li>
            
          </ul>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 text-left wow bounceInLeft animated" style="float: right">
        <h3>Advertisers</h3>
          <ul>
            <li class="email">support@getamedia.com</li>
            <li class="skype">getamedia_office</li>
            
          </ul>
          <h3>Tech Support</h3>
          <ul>
            <li class="email">support@getamedia.com</li>
            <li class="skype">getamedia_office</li>
            
          </ul>
        </div>
          <div class="clearfix"></div>
          <a href="" id="copyright" class="text-left  wow bounceInLeft animated">
          (c) 2014 Getamedia. All Rights Reserved.</a>
        </div>
      </div><!--.row-->
      
      </div><!--.container--></div>
  </div> <!--#tools--> 
  
  
</div>
@endsection

@section('js')
<script src="js/all.js"></script>
@endsection
