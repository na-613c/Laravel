let id = 100;

$(function new_img() {
    id--;

    const rnd = Math.floor(Math.random() * Math.floor(978));
    const real_id = `#${id}`;

    if ($(real_id).length) {
        $.getJSON(`https://picsum.photos/v2/list?page=${rnd}&limit=1`, function (data) {
            let imgUrl = data[0].download_url;
            $(real_id).attr("src", imgUrl)
        });

    }
    if (id > 0) new_img();
});
