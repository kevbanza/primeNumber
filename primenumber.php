<?php
		//$z=round(100.8456);
		//echo $z;
		//$n=103483;
		$n=$_POST['nombre'];
		$z=0; //equalizer
?>


<html>
<header>
<!--<meta  http-equiv="content-type" content="text/html; charset=utf-8">-->
</header>
<body style="background-color:#222222"> <h1 align="center" style="margin-top:50px; color: white">PRIME NUMBER</h1>
	<div>
		
		<div id="encryption" align="left" style="text-align:center;margin-top:50px; background-color:#dedede; width:1000px; margin-left:150px;padding-left: 20px" >
			<h3 align="center">THE NUMBER IS <?php echo $n;?></h3>
			<?php
					//NUMBER CHECKing
				 
				if ($n<1){	?>
					<b><?php echo ('The number must be greater than 1');?></b>
					
				<?php }
				else{
			?>
			
			<div>
				
				<h4>METHOD I</h4>
					
					<?php 
							$test=0;
							$conter=0;
							
							for($i=2; $i<$n; $i++){
								$conter=$conter+1;
								if(($n % $i)==0){
									echo $i; 
									echo (', ');
									$test=1;
								}
								
							}
							
							
							echo ('<br>');
							echo ("Number of iteration"); echo (': ');
							echo $conter;
							echo ('<br>');
							
							if ($test==0){
								echo('<b>'); echo ($n); echo (' ');
								echo ('is a prime number'); echo('</b>');
								
							
							}
							else {
								echo('<b>'); echo ($n); echo (' ');
								echo ('is a composite number'); echo('</b>');								
								
							}
					?>
			
			</div>
			
			
			
			
			
			
			
			
			<div>
				
				<h4>METHOD II</h4>
					
					<?php
						
						$x=$n;
						$b=sqrt($n);
						$i=2;
						//echo $b;echo ("<br>");echo ("<br>");
						
						$count=0;
						$countnotprime=0;
						
						
						while($x>1 && $i<=$b){
							$count=$count+1;
							
							while(($x % $i)==0){
								echo $i;
								
								$x=$x/$i;
								$b=sqrt($x);
								$countnotprime=$countnotprime+1;
								
								echo (", ");
									
							}
							
							$i=$i+1;	
							
						}


						
						if ($countnotprime==0){
							
							echo('<b>'); echo ($n); echo (' ');
							echo ('is a prime number'); echo('</b>');echo('<br>');
							

							echo ("Number of iteration: ");
							echo $count; 
						}
						else{
							
							if($x>1){
							echo $x; 
							echo ("<br>"); 
							$z=1;
							//echo $count;echo ("<br>");
							
							}
							
								echo('<b>'); echo ($n); echo (' ');
								echo ('is a composite number'); echo('</b>');	echo ("<br>");
							//echo ('divisers of '); echo $n; echo('are :');
							 echo ("Number of iteration: ");
							echo ($countnotprime+$z); 
						}
					?>
			

			</div>
			
			
	<?php
		}
	?>
			
			
			

			
			<h3 align="center">NUMBER TO TEST</h3>
			<form action="primenumber.php" method="post">
				   Shift number <input type="number" name="nombre"><br><br>
				<br> <button type="submit" style=" width:100px; height:35px; border-radius:10px; background-color:#f79b3f">Analyse</button>

			</form>
		</div>
		 
		 
	</div>
	
	<style>
		
		#encryption{
			display: inline-block;
			border-radius:20px
			
		}
		#decryption{
			display: inline-block;
			border-radius:20px
			
		}
	
	
	
	</style>
</body>
</html>
