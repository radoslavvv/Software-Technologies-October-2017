using System.Data.Entity;
using Blog_lab_2.Migrations;
using Blog_lab_2.Models;
using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Blog_lab_2.Startup))]
namespace Blog_lab_2
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            Database.SetInitializer(
                new MigrateDatabaseToLatestVersion<BlogDbContext, Configuration>());
            ConfigureAuth(app);
        }
    }
}
