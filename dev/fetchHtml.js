const request = require("request-promise");
const fs = require("fs");

async function getHtml(url) {
    const html = await request.get(url);
    return html;
}

function saveHtmlToFile(fileName, html) {
    fs.writeFileSync(fileName, html);
    console.log("Writing HTML file");
}

async function main() {
    const html = await getHtml('https://www.david-lewis.com');
    saveHtmlToFile("./dev/index.html", html);

    const article = await getHtml('https://www.david-lewis.com/when-you-have-no-work-from-home-policy-start-here/');
    saveHtmlToFile("./dev/article.html", article);
}

main();