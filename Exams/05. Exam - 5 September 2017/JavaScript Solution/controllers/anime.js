const Anime = require('../models/Anime');

module.exports = {
	index: (req, res) => {
        Anime.find().then(animes => {
        	return res.render('anime/index',
				{
					'animes': animes
                });
		}).catch(err => {
			return res.send(err);
		});
	},
	createGet: (req, res) => {
		res.render('anime/create');
    },
    createPost: (req, res) => {
		let anime = req.body;
		Anime.create(anime).then(anime => {
			res.redirect("/");
		}).catch(err => {
			anime.error = "Invalid data entered";
			res.render("anime/create", anime);
		});
	},
	deleteGet: (req, res) => {
		let animeId = req.params.id;

		Anime.findById(animeId).then(anime =>{
			if(anime){
				res.render('anime/delete', anime);
			}else{
				res.redirect("/");
			}
		}).catch(err => {
			res.redirect("/");
		});
	},
	deletePost: (req, res) => {
		let animeId = req.params.id;

		Anime.findByIdAndRemove(animeId).then(anime => {
			res.redirect("/");
		}).catch(err => {
			res.redirect("/");
		});
	}
};