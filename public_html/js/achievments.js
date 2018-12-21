function AddAch(n) {
    let ach = document.getElementById("achievm");
    let counts = n;
    let width = ach.offsetWidth/counts + "px";
    for (let i=0; i<counts; i++) {
        let nach = document.createElement('div');

        nach.style.width = width;
        console.log(nach.style.width);
        let nachp = document.createElement('p');
        nachp.innerHTML = 'Champion';
        nach.classList.add("achievment");
        let img = document.createElement('img');
        nach.appendChild(img);
        img.src = "lesson4/pics/cup1.png";
        nach.appendChild(nachp);
        ach.appendChild(nach);
    }
}

AddAch(4);

/*new Chartist.Pie('#chart1', {
    labels: [1, 2, 3, 4],
    series: [[100, 120, 180, 200]]
});

// Initialize a Line chart in the container with the ID chart2
new Chartist.Bar('#chart2', {
    labels: [1, 2, 3, 4],
    series: [[5, 2, 8, 3]]
});*/
let g = 2;
let p = 8;

function AddStat(g, p) {
    let goal = Math.floor(g*200/(g+p));
    let pass = Math.floor(p*200/(g+p));
    new Chartist.Pie('#chart1', {
        series: [goal, pass]
    }, {
        /*donutWidth: 20,*/
        startAngle: 0,
        total: 200

    });
    let stat = document.getElementById("stat");
    console.log(stat);
    let statg = document.createElement('p');
    statg.innerHTML = 'Голы '+ g;
    let statp = document.createElement('p');
    statp.innerHTML = 'Передачи '+ p;
    statg.classList.add("sts");
    statp.classList.add("sts");
    stat.appendChild(statg);
    stat.appendChild(statp);
}

AddStat(g, p);