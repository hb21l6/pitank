<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ddh</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<body>
<?php
				$fwd = $_POST['forward'];
				 
				if($fwd=="1"){
					$output = shell_exec('sudo python cmd/Forward.py');
					//echo "<pre>$output</pre>";
				}
				
				$fwdstop = $_POST['fwdstop'];
				if($fwdstop=="1"){
					$output = shell_exec('sudo python cmd/piStopfR.py');
					$output = shell_exec('sudo python cmd/piStopfL.py');					
				}
				
				//-------------------------------------------------------
				$lft = $_POST['lft'];
				if($lft=="1"){
					$output = shell_exec('sudo python cmd/piForwardL.py');				
				}
				$lftstop = $_POST['lftstop'];
				if($lftstop=="1"){
					$output = shell_exec('sudo python cmd/piStopfL.py');			
				}
				
				//-------------------------------------------------------
				$right = $_POST['right'];
				if($right=="1"){
					$output = shell_exec('sudo python cmd/piForwardR.py');				
				}
				$rightstop = $_POST['rightstop'];
				if($rightstop=="1"){
					$output = shell_exec('sudo python cmd/piStopfR.py');			
				}
				
				//-------------------------------------------------------
				$backw = $_POST['backw'];
				if($backw=="1"){
					$output = shell_exec('sudo python cmd/Backward.py');
				}
				
				$backwstop = $_POST['backwstop'];
				if($backwstop=="1"){
					$output = shell_exec('sudo python cmd/piStopbR.py');
					$output = shell_exec('sudo python cmd/piStopbL.py');					
				}
				?>
				

 <form action="index.php" method="post" id='frm1'>
  <input type="hidden" id='forward' name="forward" value="0">
  <input type="hidden" id='fwdstop' name="fwdstop" value="0">
  
  <input type="hidden" id='lft' name="lft" value="0">
  <input type="hidden" id='lftstop' name="lftstop" value="0">
  
  <input type="hidden" id='right' name="right" value="0">
  <input type="hidden" id='rightstop' name="rightstop" value="0">
  
  <input type="hidden" id='backw' name="backw" value="0">
  <input type="hidden" id='backwstop' name="backwstop" value="0">

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                    SETTINGS   
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                    <strong>PI-Tank</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">
      <center>

        <div class="album col-md-12 bg-light">
            <div class="container" >

                
		
  <div >
  
	<table>
		<tr>
			<td></td>
			<td>
			<?php
			if($fwd=="1"){
				echo "<input type='button' onclick='stopcmd();' value='forward STOP'>";
			} else {
				echo "<img src='img/arrUp.png' style='width:100px' onclick='GoForward();'>";
			}
			?>			
			</td>
			<td></td>
		</tr>
		<tr>
			<td>
			<?php
			if($lft=="1"){
				echo "<input type='button' onclick='lftstopcmd();' value='left STOP'>";
			} else {
				echo "<img src='img/arrLeft.png' style='width:100px' onclick='GoLeft();'>";
			}
			?>	
			</td>
			<td></td>
			<td>
				<?php
			if($right=="1"){
				echo "<input type='button' onclick='rightstopcmd();' value='right STOP'>";
			} else {
				echo "<img src='img/arrRight.png' style='width:100px' onclick='GoRight();'>";
			}
			?>	
			</td>
			</tr>
		<tr>
			<td></td>
			<td>
				<?php
			if($backw=="1"){
				echo "<input type='button' onclick='backstopcmd();' value='back STOP'>";
			} else {
				echo "<img src='img/arrDown.png' style='width:100px' onclick='GoBack();'>";
			}
			?>	
			</td>
			<td></td>
		</tr>
		
	</table>
</div>
</form>

<script>
function GoForward(){
	document.getElementById('fwdstop').value=0;
	document.getElementById('forward').value=1; 
	document.getElementById('frm1').submit();
}

function stopcmd(){
	document.getElementById('forward').value=0;
	document.getElementById('fwdstop').value=1;
	document.getElementById('frm1').submit();
}
//-------------------------------------------------

function GoLeft(){
	document.getElementById('lftstop').value=0;
	document.getElementById('lft').value=1; 
	document.getElementById('frm1').submit();
}

function lftstopcmd(){
	document.getElementById('lft').value=0;
	document.getElementById('lftstop').value=1;
	document.getElementById('frm1').submit();
}
//-------------------------------------------------

function GoRight(){
	document.getElementById('rightstop').value=0;
	document.getElementById('right').value=1; 
	document.getElementById('frm1').submit();
}

function rightstopcmd(){
	document.getElementById('right').value=0;
	document.getElementById('rightstop').value=1;
	document.getElementById('frm1').submit();
}
//-------------------------------------------------

function GoBack(){
	document.getElementById('backwstop').value=0;
	document.getElementById('backw').value=1; 
	document.getElementById('frm1').submit();
}

function backstopcmd(){
	document.getElementById('backw').value=0;
	document.getElementById('backwstop').value=1;
	document.getElementById('frm1').submit();
}
//-------------------------------------------------



</script>

                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
    <script src="js/bootstrap.min.js"></script>
   
</body>
</html>
