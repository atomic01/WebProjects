package controller;
import java.sql.Connection;
import java.sql.SQLException;
import java.util.ArrayList;

import model.Film;

import java.sql.*;

public class FilmDAO {
	
	Film oneFilm = null;
	Connection conn = null;
    Statement stmt = null;
	String user = "tomicica";
    String password = "Meffnery5";
    String url = "jdbc:mysql://mudfoot.doc.stu.mmu.ac.uk:6306/" + user;
    
	public FilmDAO() {}

	
	private void openConnection(){
		try{
		    Class.forName("com.mysql.jdbc.Driver").newInstance();
		} catch(Exception e) { System.out.println(e); }

		try{
 			conn = DriverManager.getConnection(url, user, password);
		    stmt = conn.createStatement();
		} catch(SQLException se) { System.out.println(se); }
		
	
    }
	
	private void closeConnection(){
		try {
			conn.close();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	private Film getNextFilm(ResultSet rs){
    	Film thisFilm=null;
		try {
			thisFilm = new Film(
					rs.getInt("id"),
					rs.getString("title"),
					rs.getInt("year"),
					rs.getString("director"),
					rs.getString("stars"),
					rs.getString("review"));
		} catch (SQLException e) {
			e.printStackTrace();
		}
    	return thisFilm;		
	}	
	
    public ArrayList<Film> getAllFilms(){
	   
		ArrayList<Film> allFilms = new ArrayList<Film>();
		openConnection();
		
		try{
		    String selectSQL = "select * from films";
		    System.out.print(selectSQL);
		    
		    ResultSet rs1 = stmt.executeQuery(selectSQL);
		    while(rs1.next()){
		    	oneFilm = getNextFilm(rs1);
		    	allFilms.add(oneFilm);
			    System.out.println(oneFilm.toString());
		   }
		    stmt.close();
		    closeConnection();
		} catch(SQLException se) { System.out.println(se); }

	   return allFilms;
   }

    public Film getFilmByID(int id){
	   
		openConnection();
		oneFilm=null;
		
	    String selectSQL = "select * from films where id="+id;
	    ResultSet rs1;
		try {
			rs1 = stmt.executeQuery(selectSQL);
			while(rs1.next()){
		    	oneFilm = getNextFilm(rs1);
			    System.out.println(oneFilm);
		}
			stmt.close();
		    closeConnection();
		} catch (SQLException e) { System.out.println(selectSQL); }   
	    
	
		return oneFilm;
  }
   
    public ArrayList<Film>  getFilmByName(String name){
	   
		openConnection();
		ArrayList<Film> allFilms = new ArrayList<Film>();
		oneFilm=null;
		try{
		    String selectSQL = "select * from films where title like '%" + name +"%'";
		    ResultSet rs1 = stmt.executeQuery(selectSQL);
		    System.out.println(selectSQL);
		    
		    while(rs1.next()){
		    	oneFilm = getNextFilm(rs1);
		    	allFilms.add(oneFilm);
			    System.out.println(oneFilm.toString());
		    }
		    stmt.close();
		    closeConnection();
		} catch(SQLException se) { System.out.println(se); }

	   return allFilms;
  }
   
    public int insertFilm(Film newFilm){
	   
		openConnection();
		int result = 0;
		String selectSQL = "";
		System.out.println(selectSQL + " --> " );
		try{
		    selectSQL = "insert into films(id,title,year,director,stars,review) values (" + newFilm.getId() + ",'"+ newFilm.getTitle() +"'," + newFilm.getYear() +",'" + newFilm.getDirector() + "','" + newFilm.getStars() + "','"+ newFilm.getReview()+"');"; 
		    result = stmt.executeUpdate(selectSQL);
		    System.out.println(selectSQL + " --> " + result);
		    
		    stmt.close();
		    closeConnection();
			} catch(SQLException se) { System.out.println(se); }

		return result;
   }
  
    public int deleteFilm(int id){
 	   
		openConnection();
		int result = 0;
		String selectSQL = "";
		try{
		    selectSQL = "DELETE FROM films WHERE id = " + id + ";"; 
		    result = stmt.executeUpdate(selectSQL);
		    System.out.println(selectSQL + " --> " + result);
		    
			    stmt.close();
			    closeConnection();
			} catch(SQLException se) { System.out.println(se); }
		
		return result;
   }
   
    public int updateFilm(Film film){
 	   
		openConnection();
		int result = 0;
		String selectSQL = "";
		try{
		    selectSQL = "UPDATE films SET title = '" + film.getTitle() + "', year = " + film.getYear() + ", director = '" + film.getDirector() + "', stars = '" + film.getStars() + "', review = '" + film.getReview() + "' WHERE id = " + film.getId() + ";"; 
		    result = stmt.executeUpdate(selectSQL);
		    System.out.println(selectSQL + " --> " + result);
		    
		    stmt.close();
		    closeConnection();
			} catch(SQLException se) { System.out.println(se); }

		return result;
   } 
}
