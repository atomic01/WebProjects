<%@ page import="java.util.List"%>
<%@ page import="model.Film"%>
<%@ page import="com.google.gson.Gson"%>
<%@ page trimDirectiveWhitespaces="true"%>


<%
@SuppressWarnings("unchecked")

List<Film> films = (List<Film>) request.getAttribute("films");
Gson gson = new Gson();
String jsonInString = gson.toJson(films);
response.getWriter().println(jsonInString);
%>