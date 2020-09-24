
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=" Sagar Bisht">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Dashboard</title>
     <script >
$(document).ready(function(){
  $("#side-button").click(function(){
    $("#slide").toggle();
    $("main").toggle();
  });
});
</script>
    <style>
    body {
  font-size: 15px;
    line-height: 1.42857143;
      font-family: Arial,sans-serif;
    font-weight: 400;
    overflow-x: hidden;
    overflow-y: auto;

          }
          h2{
          	font-family:"Times New Roman",Arial;
          }

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
    overflow-x: hidden;
  background-color: white; /* Behind the navbar */
  padding: 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .10);
  
}

.sidebar-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 48px; /* Height of navbar */
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 510;
  color: #333;
  font-size: 16px; font-family: Monospace,Arial;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}
.slide-out{
	margin-top: 5px;

	float: right;
	background-color: transparent;
	border: none;
	display: none;
}
.slide-in{
	display: none;
}
 @media screen and (max-width: 1024px)
 {
 	.sidebar{
 		display: none;
 		transition: 0.5s;
 	}
 	.slide-out{
 		display: inline;
 		margin-right: 8px;
 	}
 	.slide-in{
 		display: inline;
 	}
 }
/*
 * Navbar
 */

.navbar-brand {
 
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

@media screen and (max-width: 1024px)
 {
 	.brand{
 		display: none;
 	}
 }

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }
.test{
  background-color: blue;
  
}
.main{
	margin-left: 250px; 
	margin-top: 60px;
	z-index: -1;
}

@media screen and (max-width: 1024px){
  .main{
	margin-left: 2px; 
}	
}
</style>
  </head>

  
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="glyphicon glyphicon-chevron-down"></span>
                                
      </button>
      <a class="navbar-brand" href="#"><img src="logo2.png" width="100px" height="35px"></a>
       <span class="glyphicon glyphicon-menu-hamburger slide-in  navbar-brand"  id="side-button"></span>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>    
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block  sidebar" id="slide">
          <div class="sidebar-sticky">
          	
            <ul class="nav flex-column">
            	
            	 <li class="nav-item">
            			<img src="logo.png" style="width: 150px; margin-left: 4px;">
                		
                 </form>
           		  </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span class="glyphicon glyphicon-dashboard"></span>&nbsp
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#333333; font-family: Monospace,Arial;">
                  <span class="glyphicon glyphicon-duplicate"></span>&nbsp
                  Master Data<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
            		<li><a href="#"><span class="glyphicon glyphicon-file"></span>&nbspCompany Profile</a></li>
            		<li><a href="#"><span class="glyphicon glyphicon-globe"></span>&nbspSocial Media </a></li>
            		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp Email setting</a></li>
         		 </ul>
              </li>
              <li class="nav-item">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#333333; font-family: Monospace,Arial;">
                  <span class="glyphicon glyphicon-retweet"></span>&nbsp
                 Engagement<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
            		<li><a href="message.php"><span class="glyphicon glyphicon-send"></span>&nbspMessage</a></li>
            		<li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbspComment </a></li>
            		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp Email</a></li>
         		 </ul>
              </li>
              <li class="nav-item">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#333333; font-family: Monospace,Arial;">
                  <span class="glyphicon glyphicon-th-list"></span>&nbsp
                  Category<span class="caret"></span>
                </a>
                 <ul class="dropdown-menu">
            		<li><a href="#"><span class="glyphicon glyphicon-paperclip"></span>&nbspNew Category</a></li>
            		<li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbspEdit Category </a></li>
            		
         		 </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="news-articles.php">
                  <span class="glyphicon glyphicon-pencil"></span>&nbsp
                  News Articles
                </a>
                 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php">
                  <span class="glyphicon glyphicon-eur"></span>&nbsp
                  Ad Channel
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="glyphicon glyphicon-scale"></span>&nbsp
                  SEO
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="glyphicon glyphicon-stats"></span>&nbsp
                  Analytics
                </a>
              </li>
            
              <li class="nav-item">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#333333; font-family: Monospace,Arial;">
                  <span class="glyphicon glyphicon-user"></span>&nbsp
                  User Management<span class="caret"></span>
                </a>
                 <ul class="dropdown-menu">
            		<li><a href="#"><span class="glyphicon glyphicon-phone"></span>&nbspNew User</a></li>
            		<li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbspEdit User</a></li>
            		
         		 </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="glyphicon glyphicon-cog"></span>&nbsp
                  CMS Setting
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="glyphicon glyphicon-info-sign"></span>&nbsp
                  Support suite
                </a>
              </li>
            </ul>
          </div>
        </nav>

      
