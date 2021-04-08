 <!-- Navigation bar with social media icons -->
	<div class="w3-bar w3-top w3-black w3-hide-small">
	   <button class="w3-button w3-black w3-large w3-left-align" onclick="w3_open()">☰</button>	 
	</div>
	<!-- end nav -->	
		
	<!-- Sidebar: used code from w3cschools sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="bands.php" class="w3-bar-item w3-button">Bands</a>
  <a href="orchestra.php" class="w3-bar-item w3-button">Orchestra</a>
  <a href="facilities.php" class="w3-bar-item w3-button">Facilities</a>
  <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
</div>
		<!-- open and close the hamburger menu -->
		<script>
			function w3_open() {
			  document.getElementById("mySidebar").style.display = "block";
			}

			function w3_close() {
			  document.getElementById("mySidebar").style.display = "none";
			}
		</script>
		
