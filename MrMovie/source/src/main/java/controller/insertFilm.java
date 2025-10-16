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


@WebServlet("/insertFilm")
public class insertFilm extends HttpServlet {
	private static final long serialVersionUID = 1L;

    public insertFilm() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		FilmDAO dao = new FilmDAO();
		
		int id = Integer.parseInt(request.getParameter("insertFilm_Id"));
		int year = Integer.parseInt(request.getParameter("insertFilm_Year"));
		String name = request.getParameter("insertFilm_Name");
		String director = request.getParameter("insertFilm_Director");
		String stars = request.getParameter("insertFilm_Stars");
		String review = request.getParameter("insertFilm_Review");
		
		Film newFilm = new Film(id, name, year, director, stars, review);
		int result = dao.insertFilm(newFilm);
		
		String format = request.getParameter("insertFilm_format");
	    System.out.println("Format: " + format + ", Input: Id: " + id + ", Title: " + name + 
	    					", Year: " + year + ", Director: " + director + ", Stars: " + stars + 
	    					", Review: " + review);
	    
		ArrayList<Film> filmList = new ArrayList<Film>();
		
		if(result > 0)
			filmList.add(newFilm);	    
		else
			format = "failed";
		
	    viewHandler viewHandler = new viewHandler();
	    viewHandler.handleView(format, filmList, request, response);

	}


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}
}
