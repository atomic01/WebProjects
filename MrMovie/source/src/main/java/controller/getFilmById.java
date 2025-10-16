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

@WebServlet("/getFilmById")
public class getFilmById extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public getFilmById() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		FilmDAO dao = new FilmDAO();		
		
		int id= Integer.parseInt(request.getParameter("getFilmById_Id"));
		Film film = dao.getFilmByID( id);
		
		ArrayList<Film> filmList = new ArrayList<Film>();
		filmList.add(film);
	
	    String format = request.getParameter("getFilmById_format");
	    System.out.print("Format: " + format + ", ----" + film +"Input:" + id);
	    
	    viewHandler viewHandler = new viewHandler();
	    viewHandler.handleView(format, filmList, request, response);
	
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}
}
