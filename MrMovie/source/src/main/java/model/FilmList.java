package model;

import java.util.List;
import javax.xml.bind.annotation.*;


@XmlRootElement(name = "filmList")
@XmlAccessorType(XmlAccessType.FIELD)
public class FilmList {
	@XmlElement(name="film")
	private List<Film> films;
	public FilmList(List<Film> inFilms) {
	films = inFilms;
	}

public FilmList() {}

}