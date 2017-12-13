package teistermask.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import teistermask.bindingModel.TaskBindingModel;
import teistermask.entity.Task;
import teistermask.repository.TaskRepository;

import java.util.List;
import java.util.stream.Collectors;

@Controller
public class TaskController {
	private final TaskRepository taskRepository;

	@Autowired
	public TaskController(TaskRepository taskRepository) {
		this.taskRepository = taskRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		List<Task> allTasks = taskRepository.findAll();

		List<Task> openTasks = allTasks.stream()
				.filter(t -> t.getStatus().equals("Open"))
				.collect(Collectors.toList());

		List<Task> inProgressTasks = allTasks.stream()
				.filter(t -> t.getStatus().equals("In Progress"))
				.collect(Collectors.toList());

		List<Task> finishedTasks = allTasks.stream()
				.filter(t -> t.getStatus().equals("Finished"))
				.collect(Collectors.toList());

		model.addAttribute("openTasks",openTasks);
		model.addAttribute("inProgressTasks",inProgressTasks);
		model.addAttribute("finishedTasks",finishedTasks);

		model.addAttribute("view","task/index");

		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		model.addAttribute("view","task/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createPost(Model model, Task taskModel) {
		if(taskModel.getTitle().equals("") || taskModel.getStatus().equals("")){
			model.addAttribute("task",taskModel);
			model.addAttribute("view","task/create");
			return "base-layout";
		}

		Task currentTask = new Task();
		currentTask.setTitle(taskModel.getTitle());
		currentTask.setStatus(taskModel.getStatus());
		taskRepository.saveAndFlush(currentTask);
		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		Task currentTask = taskRepository.findOne(id);

		if(currentTask != null){
			model.addAttribute("task", currentTask);
			model.addAttribute("view", "task/edit");
			return "base-layout";
		}
		return "redirect:/";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, Task taskModel) {
		if(taskModel.getTitle().equals("") || taskModel.getStatus().equals("")){
			taskModel.setId(id);
			model.addAttribute("task",taskModel);
			model.addAttribute("view","task/edit");
			return "base-layout";
		}

		Task currentTask = taskRepository.findOne(id);
		if(currentTask != null){
			currentTask.setTitle(taskModel.getTitle());
			currentTask.setStatus(taskModel.getStatus());
			taskRepository.saveAndFlush(currentTask);
		}

		return "redirect:/";
	}
}
