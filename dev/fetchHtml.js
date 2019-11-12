const request = require("request-promise");
const fs = require("fs");
const cheerio = require("cheerio");

async function getHtml(url) {
    const html = await request.get(url);
    return html;
}

function saveHtmlToFile(fileName, html) {
    fs.writeFileSync(fileName, html);
    console.log("Writing HTML file");
}

async function main() {
    let $;
    const html = await getHtml('https://www.david-lewis.com');

    $ = cheerio.load(html);
    $('link:nth-child(3)').attr('href', './style.css');
    saveHtmlToFile("./dev/index.html", $.html());

    const article = await getHtml('https://www.david-lewis.com/when-you-have-no-work-from-home-policy-start-here/');
    $ = cheerio.load(article);
    $('link:nth-child(3)').attr('href', './style.css');
    saveHtmlToFile("./dev/article.html", $.html());
}

main();