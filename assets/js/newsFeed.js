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
        $('.newsFeed').append('<li class="announcement-list horizontal"><time class="day">' + newsDay + '</time><div class="title-img-wrapper"><a href="//lita-pr.com/announcement#' + id + '"class="title-link">' + title + '</a></div></li>');
    });
        $('.newsFeed').append('<p class="link-text"><a href="//lita-pr.com/announcement" class="link">>> お知らせ一覧</a></p>')

}

$(document).ready(function() {
    getJSONUrl = 'https://lita-pr.com/wp-json/wp/v2/posts/?page=1&per_page=5'
    $.getJSON( getJSONUrl, function(results) {
        getJSONResults = results
        addNewsDom()
    })
})
