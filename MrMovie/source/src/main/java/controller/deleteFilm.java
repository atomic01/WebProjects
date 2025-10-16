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

@WebServlet("/deleteFilm")
public class deleteFilm extends HttpServlet {
	private static final long serialVersionUID = 1L;
    public deleteFilm() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		FilmDAO dao = new FilmDAO();
		
		int id = Integer.parseInt(request.getParameter("deleteFilm_Id"));
		System.out.println("Input: Id: " + id);
		int result = dao.deleteFilm(id);
		
		
		ArrayList<Film> filmList = null;
		viewHandler viewHandler = new viewHandler();

		if(result > 0)
			viewHandler.handleView("delete", filmList, request, response);
		else
			viewHandler.handleView("failed", filmList, request, response);
	}


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
