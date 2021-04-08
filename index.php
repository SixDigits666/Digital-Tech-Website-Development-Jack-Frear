<?php include "topbit.php";?>

<!-- Site Contents -->
	
<body> 
	
	<div class="wrapper">
	  <!-- Changed Header class to acompany image -->
		<header class="w3-display-container">
		   <div>
		   <img class="w3-image" src="img/index_header.jpg" alt="Student Playing Piano" width="100%">
		   <div class="w3-display-middle w3-center">
		     <h1>
			   <b>Music At MAGS</b>
		     </h1>
		   </div>
		   </div>
		</header>
		
		<main class="box">
		 
			<h2>
			  Make music, make friends, make people happy
			</h2>
			
			<p>
			  There are many reasons to get involved in music at MAGS.  MAGS has a renowned music department, and has links to some of New Zealand's best recording artists, including The Beths.  Have a look through this site to see what's going on in the world of music at MAGS.
			</p>
			
		</main>
		
		<aside class="box">
			<!-- poll script -->
		   <script>
             function getVote(int) {
				 var xmlhttp=new XMLHttpRequest();
				 xmlhttp.onreadystatechange=function() {
					 if (this.readyState==4 && this.status==200) {
						  document.getElementById("poll").innerHTML=this.responseText;
					}
			 	}
			    xmlhttp.open("GET","polls/indexpoll_vote.php?vote="+int,true);
			    xmlhttp.send();
             }
           </script>
			
			<div id="poll">
				<h2>Do you play an instrument?</h2>
				<form>
					Yes:<input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
					No:<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
				</form>
			</div>
			
		</aside>
		<!-- footer code -->
		<?php include "bottombit.php";?>	
		
	</div>
	
	
</body>
	
</html>