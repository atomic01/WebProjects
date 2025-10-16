<%@ page import="java.util.List"%>
<%@ page import="model.Film"%>
<%@ page import="com.google.gson.Gson"%>
<%@ page trimDirectiveWhitespaces="true"%>


<% 
@SuppressWarnings("unchecked")

List<Film> films = (List<Film>) request.getAttribute("films");
String result = "";
Film oneFilm;

for(int i = 0; i < films.size();i++)
{
	oneFilm = films.get(i);
	result += oneFilm.getId() + "#" + oneFilm.getTitle() + 
						"#"+ oneFilm.getYear() + "#"+ oneFilm.getDirector() + 
						"#" + oneFilm.getStars() + "#" + oneFilm.getReview() + "\r\n";
}

response.getWriter().println(result);
%>