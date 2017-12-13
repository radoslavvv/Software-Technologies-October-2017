package imdb.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import imdb.bindingModel.FilmBindingModel;
import imdb.entity.Film;
import imdb.repository.FilmRepository;

import java.util.List;

@Controller
public class FilmController {

	private final FilmRepository filmRepository;

	@Autowired
	public FilmController(FilmRepository filmRepository) {
		this.filmRepository = filmRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		List<Film> allFilms = filmRepository.findAll();

		model.addAttribute("films", allFilms);
		model.addAttribute("view","film/index");

		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		model.addAttribute("film", model);
		model.addAttribute("view","film/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, Film film) {
		if(film.getDirector().equals("")|| film.getGenre().equals("") ||
				film.getName().equals("") || film.getYear() == 0){
			model.addAttribute("view","film/create");

			return "base-layout";
		}

		Film currentFilm = new Film();
		currentFilm.setName(film.getName());
		currentFilm.setDirector(film.getDirector());
		currentFilm.setGenre(film.getGenre());
		currentFilm.setYear(film.getYear());

		filmRepository.saveAndFlush(currentFilm);
		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		Film currentFilm = filmRepository.findOne(id);

		if(currentFilm != null){
			model.addAttribute("film",currentFilm);
			model.addAttribute("view","film/edit");

			return "base-layout";
		}
		return "redirect:/";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, Film film) {
		if(film.getDirector().equals("")|| film.getGenre().equals("") ||
				film.getName().equals("") || film.getYear() == 0){
			model.addAttribute("film",film);
			model.addAttribute("view","film/edit");

			return "base-layout";
		}

		Film currentFilm = filmRepository.findOne(id);
		if(currentFilm != null){
			currentFilm.setName(film.getName());
			currentFilm.setDirector(film.getDirector());
			currentFilm.setGenre(film.getGenre());
			currentFilm.setYear(film.getYear());

			filmRepository.saveAndFlush(currentFilm);
		}
		return "redirect:/";
	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {
		Film film = filmRepository.findOne(id);
		if (film != null) {
			model.addAttribute("film", film);
			model.addAttribute("view", "film/delete");
			return "base-layout";
		}
		return "redirect:/";
	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(@PathVariable int id) {
		try {
			filmRepository.delete(id);
		} catch (Exception ex) {
			// Task was not found -> do nothing
		}
		return "redirect:/";
	}
}
