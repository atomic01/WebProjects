package controller;

import java.io.IOException;
import java.util.ArrayList;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import model.Film;
import view.viewHandler;

@WebServlet("/getAllFilms")
public class getAllFilms extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public getAllFilms() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		FilmDAO dao = new FilmDAO();
		ArrayList<Film> filmList ;
	
	    String format = request.getParameter("getAllFilms_format");
		System.out.println("Format: " + format);
		filmList = dao.getAllFilms();


	    viewHandler viewHandler = new viewHandler();
	    viewHandler.handleView(format, filmList, request, response);
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}
}
