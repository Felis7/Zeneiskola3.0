using NUnit.Framework;
using System;
using OpenQA.Selenium;
using OpenQA.Selenium.Firefox;

namespace SzintenZeneszTest
{
    public class Tests
    {
        IWebDriver driver;
        [SetUp]
        public void Setup()
        {
            driver = new FirefoxDriver();
        }

        [Test]
        public void webcimek_test()
        {
            string[] urelek = { "http://localhost/Zeneiskola/public/", 
                    "http://localhost/Zeneiskola/public/kereso", 
                    "http://localhost/Zeneiskola/public/hangszerpiac",
                    "http://localhost/Zeneiskola/public/login",
                    "http://localhost/Zeneiskola/public/register" };

            string[] elvartCimek = { "SzinténZenész", "Tanárkereső", "Hangszerpiac", "Belépés", "Regisztráció" };
            string bongeszoOldalCime = "";
            string elvartOldalCim = "";



            int kulcs = 0;
            foreach (string url in urelek)
            {
                driver.Navigate().GoToUrl(url);                
                bongeszoOldalCime = driver.Title;
                elvartOldalCim = elvartCimek[kulcs];
                Assert.That(elvartOldalCim, Is.EqualTo(bongeszoOldalCime));
                kulcs++;
            }
        }
        [TearDown]
        public void TearDown()
        {
            driver.Close();
        }
    }
}
