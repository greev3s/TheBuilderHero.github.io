<!DOCTYPE html>

<html lang="en">
<head>
  <title>Painting Grid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="./myjs.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  
	<style>
	.grid-container {
	  display: grid;
	  grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
	  background-color: unset;
	  padding: 10px;
	}
	.grid-item {
		display:grid;
		  background-color: rgba(255, 255, 255, 0.8);
		  border: 1px solid rgba(0, 0, 0, 0.8);
		  padding: 20px;
		  font-size: 30px;
		  text-align: center;
		grid-template-columns: repeat(auto-fit, minmax(1px, 1fr));
		grid-template-rows: repeat(auto-fit, minmax(1px, 1fr));
	}

	.container {
	  display: grid;
	  grid-gap: 10px;
	  grid-template-columns: repeat(auto-fill, minmax(min(200px,100%), 1fr));
	}

	.child {
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  padding: 5px;
	  border: 3px solid #a07;
	}

    .sidenav{
        height: 190%;
    }
	body {
	  margin:0;
	}

	</style>
</head>
<body>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./usage.html">Usage</a></li>
          <li class="active"><a href="#">Experiment</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav" style="margin-bottom: 40px">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>Let us draw a grid of squares which we will color later.</p>
      <hr>
      <h3>Draw Below using inputs</h3>
        <?php
        // The global $_POST variable allows you to access the data sent with the POST method by name
        // To access the data sent with the GET method, you can use $_GET
        $dim_x = htmlspecialchars($_POST['dim_x']);
        $dim_y  = htmlspecialchars($_POST['dim_y']);

        //echo  $dim_x, ' ', $dim_y;
        ?>
		<p><canvas id="canvas" role="presentation"></canvas></p>  <?php
        /*
         * -- The size of Canvas is set in the javascript file on page load. -->
        */?>
		<label for="l_x">X:</label>
		<input type="number" id="l_x" name="l_x" value="<?php echo $dim_x;?>"><br><br>
		<label for="l_y">Y:</label>
		<input type="number" id="l_y" name="l_y" value="<?php echo $dim_y;?>"><br><br>
		<button type="button" onclick="draw();">Draw grid!</button><br><br>
        <button type="button" onclick="fillRandomCellWithRandomColor();">Random Color Fill!</button><br><br>
        <label for="l_x_i">X:</label>
        <input type="number" id="l_x_i" name="l_x_i"><br><br>
        <label for="l_y_i">Y:</label>
        <input type="number" id="l_y_i" name="l_y_i"><br><br>
        <button type="button" onclick="fill();" style="margin-bottom: 40px">fill rect at above (x, y)!</button>
	  <div class="grid-container">
		</div>
			</div>
			<div class="col-sm-2 sidenav" style="margin-bottom: 40px">
			  <div class="well">
				<p>ADS</p>
			  </div>
			  <div class="well">
				<p>ADS</p>
			  </div>
			</div>
		  </div>
		</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>

    <audio loop autoplay id="backGroundAudio" name="backGroundAudio">
        <source src="./Interlude_Larry Owens_The_Joy_Of_Painting.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
</footer>

</body>
</html>
