package view;

import java.io.IOException;
import java.util.ArrayList;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import model.Film;

public class viewHandler {
	
	
	String format;
	ArrayList<Film> filmList;

	
	public void handleView(String format, ArrayList<Film> filmList, HttpServletRequest request, HttpServletResponse response) 
			throws ServletException, IOException
	{	
		String outputPage;
		boolean toDispatch = true;
		
		response.setHeader("Cache-Control", "no-cache");
	    response.setHeader("Pragma", "no-cache");
		request.setAttribute("films", filmList);
		
	    if ("XML".equals(format) || "xml".equals(format)) {
	      response.setContentType("text/xml");
	      outputPage = "/WEB-INF/films-xml.jsp";
	    } else if ("JSON".equals(format) || "json".equals(format)) {
	      response.setContentType("text/javascript");
	      outputPage = "/WEB-INF/films-json.jsp";

	    } else if("STRING".equals(format) || "string".equals(format)){
	      response.setContentType("text/plain");
	      outputPage = "/WEB-INF/films-string.jsp";
	    }
	    else if("delete".equals(format)){
	    	outputPage = "";
	    	response.getWriter().println("Film successfully deleted!\n");
	    	toDispatch = false;
	    }
	    else{
	    	outputPage = "";
	    	response.getWriter().println("Operation failed!\n");
	    	toDispatch = false;
	    }
	    
	    if (toDispatch == true) {
	    	RequestDispatcher dispatcher = request.getRequestDispatcher(outputPage);
	    	dispatcher.include(request, response);	    
	    }
	}
}
