<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Mr. Movie</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    
		<link rel="shortcut icon" type="imapge/ico" href="images/favicon.ico">
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="./assets/js/ajax.js" type="text/javascript"></script>
		<script src="./assets/js/ajax-utils.js" type="text/javascript"></script>
		
		
	</head>
	<body>
		<!-- Header -->
		<header id="header" class="alt">
			<div class="logo"><a href="https://templated.co"> <span>Mr. Movie</span></a></div>
		</header>
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<h2>Mr. Movie</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<h2>Mr. Movie</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<h2>Mr. Movie</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<h2>Mr. Movie</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<h2>Mr. Movie</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
		<div id="tabs" style="padding: .2em .2em 40em .2em;">
		 	<ul>
		    	<li><a href="#fragment-1"><span>View all movies</span></a></li>
		    	<li><a href="#fragment-2"><span>Find movie</span></a></li>
		    	<li><a href="#fragment-3"><span>Find movie(by ID)</span></a></li>
		    	<li><a href="#fragment-4"><span>Add movie</span></a></li>
		    	<li><a href="#fragment-5"><span>Update movie</span></a></li>
		    	<li><a href="#fragment-6"><span>Delete movie</span></a></li>
		 	</ul>
		 	
		  	<div id="fragment-1">
		   		<form  id="getAllMovies"  action="#">
			    	<p><label>Browse all the movies:</label>
			     	<h4>Select format:</h4>
				 	<select id="getAllFilms_format">
				    	<option value="STRING">STRING</option>
				    	<option value="XML">XML</option>
			 	   		<option value="JSON" selected="selected">JSON</option>
				   	</select>
				 	<p><input type=button value="Browse movies" id="getAllMoviesButton" onclick='showAllMovies("showAllMovies-result")'></p>				 
		    	</form>
		 		<div id="showAllMovies-result"></div>			    
		    </div>
		  
		  	<div id="fragment-2">
		  		<form  id="getFilmByName" action="#">
		  			<p><label>Find movie by title:</label><input id="getFilmByName_filmName" title="Enter movie title" required>
  		  			<input type="button" value="Find movie" onclick='showMovieByName("showMovieByName-result")'></p>
  		  			<h4>Select format:</h4>
				 	<select id="getFilmByName_format">
				    	<option value="STRING">STRING</option>
				    	<option value="XML">XML</option>
			 	   		<option value="JSON" selected="selected">JSON</option>
				 	</select>	
		  		</form>
		  		<div id="showMovieByName-result"></div>
		  	</div>
		  
		  	<div id="fragment-3">
		  		<form  id="getFilmById" action="#">
		  	    	<p><label>Find movie by ID:</label><input id="getFilmById_Id" title="Enter movie ID" required>
  		  			<input type="button" value="Find movie" onclick='showMovieById("showMovieById-result")'></p>
  		  			<h4>Select format:</h4>
				 	<select id="getFilmById_format">
				    	<option value="STRING">STRING</option>
				     	<option value="XML">XML</option>
			 	    	<option value="JSON" selected="selected">JSON</option>
				 	</select>
  		  		</form>
 			 	<div id="showMovieById-result"></div>
		  	</div>
		  
		  	<div id="fragment-4">
		  		<form  id="insertFilm" action="#">
			    	<p><label>Add movie:</label></p>
				    <p>Movie ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="insertFilm_Id" title="Enter movie ID." required></p>
		   		    <p>Movie title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="insertFilm_Name" title="Enter movie title." required></p>
		   		    <p>Movie year: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="insertFilm_Year" title="Enter movie year" required></p>
		   		    <p>Movie director: <input id="insertFilm_Director" title="Enter movie director" required></p>
		   		    <p>Movie stars: &nbsp;&nbsp;&nbsp;&nbsp;<input id="insertFilm_Stars" title="Enter movie stars" required></p>
		   		    <p>Movie review: &nbsp;&nbsp;<input id="insertFilm_Review" title="Enter movie review." required>
		  		  	<input type="button" value="Add movie" onclick='insertMovie("insertFilm-result")'></p>
		  		  	<h4>Select format:</h4>
					<select id="insertFilm_format">
				    	<option value="STRING">STRING</option>
				     	<option value="XML">XML</option>
			 	    	<option value="JSON" selected="selected">JSON</option>
				 	</select>
	  		 	</form>
			 	<div id="insertFilm-result"></div>
  		  	</div>
  		  
		  	<div id="fragment-5">
		  	    <form  id="updateFilm" action="#">		    
				    <p><label>Update movie:</label></p>
				    <p>Movie ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="updateFilm_Id" title="Update movie ID." required></p>
		   		    <p>Movie title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="updateFilm_Name" title="Update movie title." required></p>
		   		    <p>Movie year: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="updateFilm_Year" title="Update movie year" required></p>
		   		    <p>Movie director: <input id="updateFilm_Director" title="Update movie director" required></p >
		   		    <p>Movie stars: &nbsp;&nbsp;&nbsp;&nbsp;<input id="updateFilm_Stars" title="Update movie stars" required></p>
		   		    <p>Movie review: &nbsp;&nbsp;<input id="updateFilm_Review" title="Update movie review." required>
		  		  	<input type="button" value="Update movie" onclick='updateMovie("updateFilm-result")'></p>
		  		  	<h4>Select format:</h4>
					<select id="updateFilm_format">
				    	<option value="STRING">STRING</option>
				     	<option value="XML">XML</option>
			 	    	<option value="JSON" selected="selected">JSON</option>
				 	</select>
  		  	 	</form>
  		  		<div id="updateFilm-result"></div>  		  	 
  		  	</div>
  		  
		  	<div id="fragment-6">
		  		<form  id="deleteFilm" action="#">		    
		    		<p><label>Delete movie by ID:</label><input id="deleteFilm_Id" title="Enter movie ID" required>
  		  			<input type="button" value="Delete movie" onclick='deleteMovie("deleteFilm-result")'></p>
  		  		</form>
  		  		<div id="deleteFilm-result"></div> 
		  	</div>
		</div>
		 
		 
		<script>
			$( "#tabs" ).tabs();
		</script>
	
		<!-- Footer -->
		<footer id="footer">
			<div class="copyright">
				&copy; Untitled. All rights reserved.
			</div>
		</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>