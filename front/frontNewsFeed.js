let getJSONResults

let addNewsDom = function() {
    $.each(getJSONResults, function(i, item) {
        let date = new Date(item.date)
        let yy = date.getFullYear(date)
        let mm = ("0" + (date.getMonth() + 1)).slice(-2)
        let dd = ("0" + date.getDate()).slice(-2)
        let newsDay = yy + '.' + mm + '.' + dd
        let title = item.title.rendered
        let id = item.id
        $('.article-loading').remove();
        $('.frontNewsFeed').append('<li class="frontPage-newsItem"><time class="day">' + newsDay + '</time><span class="cat">インフォメーション</span><a href="//lita-pr.com/announcement#' + id + '"class="ttlLink"><span class="ttl">' + title + '</span><span class="caret">＞</span></a></li>');
    });
        $('.frontNewsFeed').append('<li class="frontPage-btnWrap"><a href="//lita-pr.com/announcement" class="frontPage-btn">お知らせ一覧 ></a></li>')

}

$(document).ready(function() {
    getJSONUrl = 'https://lita-pr.com/wp-json/wp/v2/posts/?page=1&per_page=5'
    $.getJSON( getJSONUrl, function(results) {
        getJSONResults = results
        addNewsDom()
    })
})
