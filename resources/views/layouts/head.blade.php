<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>
    @yield('title')
  </title>

  
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="js/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="js/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
 
  <link href="css/newstyle.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
        <a href="/home" class="logo"><b>Adashi<span>App</span></b></a>
      <div class="nav notify-row" id="top_menu">
        
      </div>

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/signout">Logout</a></li>
        </ul>
      </div>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.html">
              <span>Home</span>
              </a>
          </li>
          <li class="sub-menu">
              <span>Balance: </span>
          </li><br>
          <li class="sub-menu">
              <span>Withdrawable: </span>
          </li><br><br>
          <li class="sub-menu">
            <a class="" href="javascript:;">
              <span>Add money</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <span>Withdraw money</span>
              </a>
          </li>
        </ul>
       
      </div>
    </aside>
   
    @yield('content');
    
    
  </section>
  
  <script src="js/lib/jquery/jquery.min.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="js/lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="js/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="js/lib/jquery.scrollTo.min.js"></script>
  <script src="js/lib/jquery.nicescroll.js" type="text/javascript"></script>
  
  <script src="js/lib/common-scripts.js"></script>
  
</body>

</html>