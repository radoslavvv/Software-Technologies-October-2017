const Task = require('../models/Task');

module.exports = {
    index: (req, res) => {
        Task.find().then(tasks => {
            res.render('task/index', {'tasks': tasks});
		}).catch(err => {
			return res.send("error")
		});
    },
	createGet: (req, res) => {
        res.render('task/create');
	},
	createPost: (req, res) => {
        let task = req.body;

        Task.create(task).then(task=>{
        	res.redirect("/");
		}).catch(err => {
			task.error = "Invalid data entered!";
			res.render('task/create', task);
		});
	},
	deleteGet: (req, res) => {
		let taskId = req.params.id;
		Task.findById(taskId).then(task => {
			if(task){
				res.render('task/delete', task);
			}else{
				res.redirect("/");
			}
		}).catch(err => {
            res.redirect('/');
        });
	},
	deletePost: (req, res) => {
        let taskId = req.params.id;

        Task.findByIdAndRemove(taskId).then(task => {
        	res.redirect("/");
		}).catch(err => {
			res.redirect("/");
		});
	}
};