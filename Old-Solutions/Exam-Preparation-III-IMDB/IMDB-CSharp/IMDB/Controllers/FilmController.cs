using System.Linq;
using System.Net;
using System.Runtime.InteropServices;
using System.Web.Mvc;
using IMDB.Models;

namespace IMDB.Controllers
{
    [ValidateInput(false)]
    public class FilmController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            using (var db = new IMDBDbContext())
            {
                var films = db.Films.ToList();
                return View(films);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Film film)
        {
            if (ModelState.IsValid)
            {
                using (var db = new IMDBDbContext())
                {
                    db.Films.Add(film);
                    db.SaveChanges();
                    return Redirect("/");
                }
            }
            return View();
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            using (var db = new IMDBDbContext())
            {
                var film = db.Films.Find(id);

                if (film != null)
                {
                    return View(film);
                }
            }
            return Redirect("/");
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Film film)
        {
            if (!ModelState.IsValid)
            {
                return View(film);
            }

            using (var db = new IMDBDbContext())
            {
                var filmFromDb = db.Films.Find(id);

                if (filmFromDb != null)
                {
                    filmFromDb.Name = film.Name;
                    filmFromDb.Genre = film.Genre;
                    filmFromDb.Director = film.Director;
                    filmFromDb.Year = film.Year;
                    db.SaveChanges();
                }
            }
            return Redirect("/");
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            using (var db = new IMDBDbContext())
            {
                var film = db.Films.Find(id);

                if (film != null)
                {
                    return View(film);
                }
            }
            return Redirect("/");
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Film film)
        {
            using (var db = new IMDBDbContext())
            {
                var filmFromDb = db.Films.Find(id);

                if (filmFromDb != null)
                {
                    db.Films.Remove(filmFromDb);
                    db.SaveChanges();
                }
            }
            return Redirect("/");
        }
    }
}