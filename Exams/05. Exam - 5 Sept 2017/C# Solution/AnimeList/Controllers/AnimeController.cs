using System.Linq;
using System.Web.Mvc;
using AnimeList.Models;

namespace AnimeList.Controllers
{
    [ValidateInput(false)]
    public class AnimeController : Controller
    {
        private AnimeListDbContext db = new AnimeListDbContext();

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var animes = db.Animes.ToList();

            return View(animes);
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
        public ActionResult Create(Anime anime)
        {
            if (ModelState.IsValid)
            {
                db.Animes.Add(anime);
                db.SaveChanges();

                return Redirect("/");
            }

            return View(anime);
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return Redirect("/");
            }

            var animeFromDb = db.Animes.Find(id);

            if (animeFromDb != null)
            {
                return View(animeFromDb);
            }

            return Redirect("/");
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Anime animeModel)
        {
            if (id == null)
            {
                return Redirect("/");
            }

            var animeFromDb = db.Animes.Find(id);

            if (animeFromDb != null)
            {
                db.Animes.Remove(animeFromDb);
                db.SaveChanges();
            }

            return Redirect("/");
        }
    }
}