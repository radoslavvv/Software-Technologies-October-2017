package imdb.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import imdb.bindingModel.FilmBindingModel;
import imdb.entity.Film;
import imdb.repository.FilmRepository;

import javax.validation.Valid;
import java.util.List;

@Controller
public class FilmController {

	@Autowired
	private FilmRepository filmRepository;

	@GetMapping("/")
	public String index(Model model) {
		List<Film> films = filmRepository.findAll();

		model.addAttribute("films", films);
		model.addAttribute("view", "film/index");

		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		model.addAttribute("film", new FilmBindingModel());
		model.addAttribute("view", "film/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, @Valid FilmBindingModel filmBindingModel, BindingResult bindingResult) {
		Film film = new Film();

		if(!bindingResult.hasErrors()){
			film.setName(filmBindingModel.getName());
			film.setDirector(filmBindingModel.getDirector());
			film.setGenre(filmBindingModel.getGenre());
			film.setYear(filmBindingModel.getYear());
			filmRepository.save(film);

			return "redirect:/";
		}

		model.addAttribute("film", filmBindingModel);
		model.addAttribute("message", "Error");
		model.addAttribute("view", "film/create");
		return "base-layout";
	}
	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		Film filmFromRepo = filmRepository.findOne(id);

		if(filmFromRepo != null){
			model.addAttribute("view", "film/edit");
			model.addAttribute("film", filmFromRepo);
			return "base-layout";
		}
		return "redirect:/";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, @Valid FilmBindingModel filmBindingModel, BindingResult bindingResult) {
		if(bindingResult.hasErrors()){
			model.addAttribute("film", filmBindingModel);
			model.addAttribute("message", "Error");
			model.addAttribute("view", "film/edit");
			return "base-layout";
		}

		Film filmFromRepo = filmRepository.findOne(id);
		if(filmFromRepo == null){
			return "redirect:/";
		}

		filmFromRepo.setName(filmBindingModel.getName());
		filmFromRepo.setDirector(filmBindingModel.getDirector());
		filmFromRepo.setGenre(filmBindingModel.getGenre());
		filmFromRepo.setYear(filmBindingModel.getYear());
		filmRepository.save(filmFromRepo);

		return "redirect:/";

	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {
		Film filmFromRepo = filmRepository.findOne(id);

		if(filmFromRepo != null){
			model.addAttribute("view", "film/delete");
			model.addAttribute("film", filmFromRepo);
			return "base-layout";
		}
		return "redirect:/";
	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(@PathVariable int id) {
		Film filmFromRepo = filmRepository.findOne(id);
		if(filmFromRepo == null){
			return "redirect:/";
		}
		filmRepository.delete(filmFromRepo);

		return "redirect:/";
	}
}
