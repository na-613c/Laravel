function startBG() {
    let colors = ['#ec73a8', '#f29700', '#faef01', '#c1d500', '#9dd1a3', '#00a0ea', '#9fc3e7', '#b1569c'];

    let i = Math.floor(Math.random() * Math.floor(7));


    $("body").css({
        "backgroundColor": `${colors[i]}`,
    });


    $("#search").css({
        "color": `${colors[i]}`,
        "border-color": `${colors[i]}`
    });

    $("#search").hover(function () {
        $(this).css({
            "color": "white",
            "background": `${colors[i]}`
        })
    }, function () {
        $(this).css({
            "color": `${colors[i]}`,
            "border-color": `${colors[i]}`,
            "background": 'white'
        })
    });
}