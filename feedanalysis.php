<?php session_start(); ?>
<?php
$connection = new MongoClient();
$collection = $connection->travelfood->feedback;

$cursor1 = $collection->find();
$count = $cursor1->count();
$analyse = array(
			'$group'=>array(
					'_id'=> '$feedbacktype',
					'count'=>array('$sum'=>1)				
				)		
		);
$output = $collection->aggregate($analyse);
$data = $output;
//print_r($data);
foreach($data as $key)
{
    foreach($key as $key => $value)
    {
	$data1 = $value;
	$feedtype[]=$data1[_id];
	$percent[]=$data1[count];
  	//  print($key.': '.$value.'<br>');
    }
}

//print_r($station);
//print_r($pop);

$stat = count($feedtype);
for($i=0;$i<$stat;$i++)
{
	$final[$i]=array($feedtype[$i],$percent[$i]);

}
 json_encode($final, true);

?>
<html>
  <head>
	<link rel = "stylesheet" type = "text/css" href = "addfield.css">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.load("visualization", "1", {packages:["corechart"]});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
      
    function drawChart() {
	
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.arrayToDataTable([["Feedback", "Poll"], <?php
			
					for($r=0;$r<$stat;$r++)
				{
					echo "[ ";
						echo " '".$final[$r][0]."',";
						echo " ".$final[$r][1]." ";
					echo "] ";
					if($r!=$count-1)
						echo ",";
				}
					
				
		?>]);
	//alert(data);
      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		var options = {
	    title: 'ASSESSMENT OF SYSTEM',
	    vAxis: {title: 'Poll', titleTextStyle: {color: 'red'}},	
	    hAxis: {title: 'Feedback', titleTextStyle: {color: 'red'}},
		pieHole:0.4,
	  };
      chart.draw(data,options, {width: 100, height: 200});
    }

    </script>
  </head>

  <body>
	
	


	<div id = "header">
		<div id = "link"> 
		
		<span class = "slash">|<img src = "images/view.png" width = "20px" height = "20px" hspace = "7px"> <a href = "viewfield.php" >View Avalibilty</a> </span>
  <span class = "slash">|<img src = "images/login.png" width = "20px" height = "20px" hspace = "7px"> <?php $admin = $_SESSION['use']; echo "Welcome  ".$admin; ?></span>
	<span class = "slash">|<span class = "echo"><?php echo "<a href='logout.php'> Logout</a> "; ?></span>
</div>
	<div class="right">
		<form method="POST">
			<input type = "button" name="back" id="back" value= "BACK" onclick=window.open("adminlogin.php","_self")>
		</form>
	</div>		
		
	<div id = "mid">
    <!--Div that will hold the area chart-->
    <div id="chart_div" style="width:800px; height:400px; color:#dcffed;"></div>
	</div>

	</div>
  </body>
</html>
