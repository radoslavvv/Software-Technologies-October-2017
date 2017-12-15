using System.CodeDom;
using System.Linq;
using System.Net;
using System.Web.Mvc;
using IMDB.Models;

namespace IMDB.Controllers
{
    [ValidateInput(false)]
    public class FilmController : Controller
    {
        private IMDBDbContext db = new IMDBDbContext();

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var films = db.Films.ToList();

            return View(films);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View(new Film());
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Film film)
        {
            if (ModelState.IsValid)
            {
                db.Films.Add(film);
                db.SaveChanges();

                return Redirect("/");
            }
            return View(film);
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            var movie = db.Films.Find(id);
            if (movie == null)
            {
                return HttpNotFound();
            }
            return View(movie);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Film filmModel)
        {
            var filmFromDb = db.Films.Find(id);

            if (filmFromDb == null)
            {
                return HttpNotFound();
            }

            if (ModelState.IsValid)
            {

                filmFromDb.Name = filmModel.Name;
                filmFromDb.Director = filmModel.Director;
                filmFromDb.Year = filmModel.Year;
                filmFromDb.Genre = filmModel.Genre;

                db.SaveChanges();
                return Redirect("/");
            }
            return View("Edit",filmModel);
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            var movie = db.Films.Find(id);
            if (movie == null)
            {
                return HttpNotFound();
            }
            return View(movie);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id)
        {
            var filmFromDb = db.Films.Find(id);

            if (filmFromDb == null)
            {
                return HttpNotFound();
            }

            db.Films.Remove(filmFromDb);
            db.SaveChanges();

            return Redirect("/");
        }
    }
}