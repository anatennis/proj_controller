function startTimer() {
    var min = document.getElementById("minute").innerHTML;
    var sec = document.getElementById("second").innerHTML;
    var m = min;
    var s = sec;
    if (s == 0) {
        if (m == 0) {
            alert("Время вышло");
            window.location.reload();
            return;
        }
        m--;
        if (m < 10) m = "0" + m;
        s = 59;
    }
    else s--;
    if (s < 10) s = "0" + s;
    document.getElementById("minute").innerHTML = m;
    document.getElementById("second").innerHTML = s;
}

var but;
var startstop = document.getElementById("startstop");
startstop.addEventListener('click', StopStart);
function StopStart() {
    if (startstop.value == "Стоп") {
        startstop.value = "Старт";
        clearInterval(but);
    } else {
        startstop.value = "Стоп";
        but = setInterval(startTimer, 1000);
    }
}

function AddStat(s1, s2, rs1, rs2, fm1, fm2) {
    let shots1 = Math.floor(s1*100/(s1+s2));
    let shots2 = Math.floor(s2*100/(s1+s2));
    new Chartist.Pie('#chart1', {
        series: [shots1, shots2]
    }, {
        startAngle: 0,
        total: shots1+shots2,
        donut: true,
        donutWidth: 20,
        donutSolid: true,
        showLabel: false

    });
    new Chartist.Pie('#chart2', {
        series: [rs1, rs2]
    }, {
        startAngle: 0,
        donut: true,
        donutWidth: 20,
        donutSolid: true,
        showLabel: false,
        total: rs1+rs2

    });
    new Chartist.Pie('#chart3', {
        series: [fm1, fm2]
    }, {
        startAngle: 0,
        donut: true,
        donutWidth: 20,
        donutSolid: true,
        showLabel: false,
        total: fm1+fm2

    });
}

AddStat(23, 12, 95, 96, 12, 10);


