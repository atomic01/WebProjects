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

@WebServlet("/updateFilm")
public class updateFilm extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public updateFilm() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		FilmDAO dao = new FilmDAO();
		
		int id = Integer.parseInt(request.getParameter("updateFilm_Id"));		
		Film updateFilm = dao.getFilmByID(id);
		

		int year = Integer.parseInt(request.getParameter("updateFilm_Year"));
		String name = request.getParameter("updateFilm_Name");
		String director = request.getParameter("updateFilm_Director");
		String stars = request.getParameter("updateFilm_Stars");
		String review = request.getParameter("updateFilm_Review");
		
		updateFilm.setTitle(name);
		updateFilm.setYear(year);
		updateFilm.setDirector(director);
		updateFilm.setStars(stars);
		updateFilm.setReview(review);
		int result = dao.updateFilm(updateFilm);
		
		String format = request.getParameter("updateFilm_format");
	    System.out.println("Format: " + format + ", Input: Id: " + id + ", Title: " + name + 
	    					", Year: " + year + ", Director: " + director + ", Stars: " + stars + 
	    					", Review: " + review);
		
		ArrayList<Film> filmList = new ArrayList<Film>();
		
		if(result > 0)
			filmList.add(updateFilm);
		else
			format = "failed";
	
		   
	    viewHandler viewHandler = new viewHandler();
	    viewHandler.handleView(format, filmList, request, response);

	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}
}
