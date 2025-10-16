//SHOW ALL MOVIES MAIN FUNCTIONS
function showAllMovies(resultRegion) {
	  var format = document.getElementById("getAllFilms_format");
	  var data = 'getAllFilms_format=' + format.value;
	  if(format.value=="XML")
	  { 
		  showXMLAllMovies(resultRegion, data)
	  }
	  else if(format.value == "JSON")
	  {
		  showJSONAllMovies(resultRegion, data)
	  }
	  else if(format.value == "STRING")
	  {
		  showSTRINGAllMovies(resultRegion, data)
	  }
	  
}

function showXMLAllMovies(resultRegion, data) {
  var address = "getAllFilms";
  ajaxPost(address, data, 
           function(request) { 
      		showXmlFilmInfo(request, resultRegion);
	 
	  	         });
}

function showJSONAllMovies(resultRegion, data) {
	  var address = "getAllFilms";
	  ajaxPost(address, data, 
	           function(request) { 
	             showJsonFilmInfo(request, resultRegion); 
	           });
	}

function showSTRINGAllMovies(resultRegion, data) {
  var address = "getAllFilms";
  ajaxPost(address, data, 
           function(request) { 
             showStringFilmInfo(request, resultRegion); 
           });
}



//SHOW MOVIES BY NAME MAIN FUNCTIONS
function showMovieByName(resultRegion)
{
	  var format = document.getElementById("getFilmByName_format");
	  var input = document.getElementById("getFilmByName_filmName");
	  var data = 'getFilmByName_format=' + format.value + '&getFilmByName_filmName=' + input.value;
	  if(format.value=="XML")
	  { 
		  showXMLMovieByName(resultRegion, data)
	  }
	  else if(format.value == "JSON")
	  {
		  showJSONMovieByName(resultRegion, data)
	  }
	  else if(format.value == "STRING")
	  {
		  showSTRINGMovieByName(resultRegion, data)
	  }
	  
}

function showXMLMovieByName(resultRegion, data) {
	  var address = "getFilmByName";
	  ajaxPost(address, data, 
	           function(request) { 
	      		showXmlFilmInfo(request, resultRegion);
		 
		  	         });
	}

function showJSONMovieByName(resultRegion, data) {
	  var address = "getFilmByName";
	  ajaxPost(address, data, 
	           function(request) { 
	             showJsonFilmInfo(request, resultRegion); 
	           });
	}

function showSTRINGMovieByName(resultRegion, data) {
  var address = "getFilmByName";
  ajaxPost(address, data, 
           function(request) { 
             showStringFilmInfo(request, resultRegion); 
           });
	}



//SHOW MOVIE BY ID MAIN FUNCTIONS
function showMovieById(resultRegion)
{
	  var format = document.getElementById("getFilmById_format");
	  var input = document.getElementById("getFilmById_Id");
	  var data =  'getFilmById_Id=' + input.value + '&getFilmById_format=' + format.value;
	  if(format.value=="XML")
	  { 
		  showXMLMovieById(resultRegion, data)
	  }
	  else if(format.value == "JSON")
	  {
		  showJSONMovieById(resultRegion, data)
	  }
	  else if(format.value == "STRING")
	  {
		  showSTRINGMovieById(resultRegion, data)
	  }
	  
}

function showXMLMovieById(resultRegion, data) {
	  var address = "getFilmById";
	  ajaxPost(address, data, 
	           function(request) { 
	      		showXmlFilmInfo(request, resultRegion);
		 
		  	         });
	}

function showJSONMovieById(resultRegion, data) {
	  var address = "getFilmById";
	  ajaxPost(address, data, 
	           function(request) { 
	             showJsonFilmInfo(request, resultRegion); 
	           });
	}

function showSTRINGMovieById(resultRegion, data) {
  var address = "getFilmById";
  ajaxPost(address, data, 
           function(request) { 
             showStringFilmInfo(request, resultRegion); 
           });
	}



//INSERT MOVIE MAIN FUNCTIONS
function insertMovie(resultRegion)
{
	  var format = document.getElementById("insertFilm_format");
	  
	  var id = document.getElementById("insertFilm_Id");
	  var year = document.getElementById("insertFilm_Year");
	  var title = document.getElementById("insertFilm_Name");
	  var director = document.getElementById("insertFilm_Director");
	  var stars = document.getElementById("insertFilm_Stars");
	  var review = document.getElementById("insertFilm_Review");
	  
	  var data = 'insertFilm_format=' + format.value;
	  data += '&insertFilm_Id=' + id.value;
	  data += '&insertFilm_Year=' + year.value;
	  data += '&insertFilm_Name=' + title.value;
	  data += '&insertFilm_Director=' + director.value;
	  data += '&insertFilm_Stars=' + stars.value;
	  data += '&insertFilm_Review=' + review.value;
	  
	  if(format.value=="XML")
	  { 
		  showXMLinsertMovie(resultRegion, data)
	  }
	  else if(format.value == "JSON")
	  {
		  showJSONinsertMovie(resultRegion, data)
	  }
	  else if(format.value == "STRING")
	  {
		  showSTRINGinsertMovie(resultRegion, data)
	  }
	  
}

function showXMLinsertMovie(resultRegion, data) {
	  var address = "insertFilm";
	  ajaxPost(address, data, 
	           function(request) { 
	      		showXmlFilmInfo(request, resultRegion);
		 
		  	         });
	}

function showJSONinsertMovie(resultRegion, data) {
	  var address = "insertFilm";
	  ajaxPost(address, data, 
	           function(request) { 
	             showJsonFilmInfo(request, resultRegion); 
	           });
	}

function showSTRINGinsertMovie(resultRegion, data) {
  var address = "insertFilm";
  ajaxPost(address, data, 
           function(request) { 
             showStringFilmInfo(request, resultRegion); 
           });
	}



//UPDATE MOVIE MAIN FUNCTIONS
function updateMovie(resultRegion)
{
	  var format = document.getElementById("updateFilm_format");
	  
	  var id = document.getElementById("updateFilm_Id");
	  var year = document.getElementById("updateFilm_Year");
	  var title = document.getElementById("updateFilm_Name");
	  var director = document.getElementById("updateFilm_Director");
	  var stars = document.getElementById("updateFilm_Stars");
	  var review = document.getElementById("updateFilm_Review");
	  
	  var data = 'updateFilm_format=' + format.value;
	  data += '&updateFilm_Id=' + id.value;
	  data += '&updateFilm_Year=' + year.value;
	  data += '&updateFilm_Name=' + title.value;
	  data += '&updateFilm_Director=' + director.value;
	  data += '&updateFilm_Stars=' + stars.value;
	  data += '&updateFilm_Review=' + review.value;
	  
	  if(format.value=="XML")
	  { 
		  showXMLupdateMovie(resultRegion, data)
	  }
	  else if(format.value == "JSON")
	  {
		  showJSONupdateMovie(resultRegion, data)
	  }
	  else if(format.value == "STRING")
	  {
		  showSTRINGupdateMovie(resultRegion, data)
	  }
	  
}

function showXMLupdateMovie(resultRegion, data) {
	  var address = "updateFilm";
	  ajaxPost(address, data, 
	           function(request) { 
	      		showXmlFilmInfo(request, resultRegion);
		 
		  	         });
	}

function showJSONupdateMovie(resultRegion, data) {
	  var address = "updateFilm";
	  ajaxPost(address, data, 
	           function(request) { 
	             showJsonFilmInfo(request, resultRegion); 
	           });
	}

function showSTRINGupdateMovie(resultRegion, data) {
  var address = "updateFilm";
  ajaxPost(address, data, 
           function(request) { 
             showStringFilmInfo(request, resultRegion); 
           });
	}



//DELETE MOVIE MAIN FUNCTIONS
function deleteMovie(resultRegion) {
	  var address = "deleteFilm";
	  var id = document.getElementById("deleteFilm_Id");
	  var data = 'deleteFilm_Id=' + id.value;
	  ajaxPost(address, data, 
	           function(request) { 
	             showStringFilmInfo(request, resultRegion); 
	           });
		}




//ALL OTHER LOWER LEVEL FUNCTIOONS
function ajaxPost(address, data, responseHandler) {
	  var request = getRequestObject();
	  request.onreadystatechange = 
	    function() { responseHandler(request); };
	  request.open("POST", address, true);
	  request.setRequestHeader("Content-Type", 
	                           "application/x-www-form-urlencoded");
	  request.send(data);
	}

function showXmlFilmInfo(request, resultRegion) {
  if ((request.readyState == 4) &&
      (request.status == 200)) {
    var xmlDocument = request.responseXML;
    var films = 
      xmlDocument.getElementsByTagName("film");
    var rows = new Array();
    for(var i=0; i<films.length; i++) {
      var film = films[i];
      var subElements = 
        ["id", "title", "year", "director", "stars", "review"];
      rows[i] = getElementValues(film, subElements);
    }
    var table = getFilmTable(rows);
    htmlInsert(resultRegion, table);
  }
}

function showJsonFilmInfo(request, resultRegion) {
  if ((request.readyState == 4) &&
      (request.status == 200)) {
    var rawData = request.responseText;
    var films = eval("(" + rawData + ")");
    var rows = new Array();
    for(var i=0; i<films.length; i++) {
      var film = films[i];
      rows[i] = [film.id, film.title,
                 film.year, film.director,
                 film.stars, film.review];
    }
    var table = getFilmTable(rows);
    htmlInsert(resultRegion, table);
  }
}

function showStringFilmInfo(request, resultRegion) {
	  if ((request.readyState == 4) &&
	      (request.status == 200)) {
	    var rawData = request.responseText;
	    var films = rawData.split(/\n+/);
	    var rows = new Array();
	    for(var i=0; i<films.length; i++) {
	      if (films[i].length > 1) {  // Ignore blank lines
	        rows.push(films[i].split("#"));
	      }
	    }
	    var table = getFilmTable(rows);
	    htmlInsert(resultRegion, table);
	  }
	}

function getTable(headings, rows) {
  var table = "<table border='1' class='ajaxTable'>\n" +
              getTableHeadings(headings) +
              getTableBody(rows) +
              "</table>";
  return(table);
}

function getTableHeadings(headings) {
  var firstRow = "  <tr>";
  for(var i=0; i<headings.length; i++) {
    firstRow += "<th>" + headings[i] + "</th>";
  }
  firstRow += "</tr>\n";
  return(firstRow);
}

function getTableBody(rows) {
  var body = "";
  for(var i=0; i<rows.length; i++) {
    body += "  <tr>";
    var row = rows[i];
    for(var j=0; j<row.length; j++) {
      body += "<td>" + row[j] + "</td>";
    }
    body += "</tr>\n";
  }
  return(body);
}

function getFilmTable(rows) {
	  var headings = 
	    [ "Movie ID", "Title", "Year", "Director", "Stars", "Review" ];
	  return(getTable(headings, rows));
	}