/*function putResult(team, res) {

   team.innerHTML = result1;
}

let result1=0;
let result2=0;*/

var countOfFieldsteam1 = 1; // Текущее число полей
var countOfFieldsteam2 = 1; // Текущее число полей
var curFieldNameIdteam1 = 1; // Уникальное значение для атрибута name
var curFieldNameIdteam2 = 1; // Уникальное значение для атрибута name
var maxFieldLimit = 25; // Максимальное число возможных полей
function deleteFieldteam1(a) {
        if (countOfFieldsteam1 > 1)
        {
            var contDiv = a.parentNode;
            contDiv.parentNode.removeChild(contDiv);
            countOfFieldsteam1--;
        }
    // Возвращаем false, чтобы не было перехода по сслыке
    return false;
}
function deleteFieldteam2(a) {
    if (countOfFieldsteam2 > 1)
    {
        var contDiv = a.parentNode;
        contDiv.parentNode.removeChild(contDiv);
        countOfFieldsteam2--;
    }
    return false;
}

function addFieldteam1() {
    /*if (countOfFields >= maxFieldLimit) {
        alert("Число полей достигло своего максимума = " + maxFieldLimit);
        return false;
    }*/
    var div = document.createElement("div");
    div.classList.add('flex-1');
    div.classList.add('goal');
    countOfFieldsteam1++;
    curFieldNameIdteam1++;

    let res = document.getElementById('res1');
    res.innerHTML = countOfFieldsteam1-1;

    div.innerHTML = "<nobr>" +
        "<div class=\"numofgoal\">#" +countOfFieldsteam1+ "</div>"+
        "<select size=\"1\" name=\"type[" + curFieldNameIdteam1 + "]\" style=\"width:20%;\">" +
        "<option value=\"text\">--гол--</option>" + "</select>" +
        "<select size=\"1\" name=\"type[" + curFieldNameIdteam1 + "]\" style=\"width:20%;\">" +
        "<option value=\"text\">--ассистент1--</option>" + "</select>" +
        "<select size=\"1\" name=\"type[" + curFieldNameIdteam1 + "]\" style=\"width:20%;\">" +
        "<option value=\"text\">--ассистент2--</option>" + "</select>" +
        "<div class=\"timeofgoal\"></div>"+                                                 /*добавить динамически в зависимости от времени*/
        "<div class=\"powplay\"></div>"+
        "<a style=\"color:red;\" onclick=\"return deleteFieldteam1(this)\" href=\"#\">[—]</a> " +
        "<a style=\"color:green;\" onclick=\"return addFieldteam1()\" href=\"#\">[+]</a></nobr>";

        document.getElementById('goalsteam1').appendChild(div);

    return false;
}


function addFieldteam2() {
    var div = document.createElement("div");
    div.classList.add('flex-1');
    div.classList.add('goal');
    countOfFieldsteam2++;
    curFieldNameIdteam2++;
    let res = document.getElementById('res2');
    res.innerHTML = countOfFieldsteam2-1;
    div.innerHTML = "<nobr>" +
        "<div class=\"numofgoal\">#" +countOfFieldsteam2+ "</div>"+
        "<select size=\"1\" name=\"type[" + curFieldNameIdteam2 + "]\" style=\"width:20%;\">" +
        "<option value=\"text\">--гол--</option>" + "</select>" +
        "<select size=\"1\" name=\"type[" + curFieldNameIdteam2 + "]\" style=\"width:20%;\">" +
        "<option value=\"text\">--ассистент1--</option>" + "</select>" +
        "<select size=\"1\" name=\"type[" + curFieldNameIdteam2 + "]\" style=\"width:20%;\">" +
        "<option value=\"text\">--ассистент2--</option>" + "</select>" +
        "<div class=\"timeofgoal\"></div>"+                                                 /*добавить динамически в зависимости от времени*/
        "<div class=\"powplay\"></div>"+
        "<a style=\"color:red;\" onclick=\"return deleteFieldteam2(this)\" href=\"#\">[—]</a> " +
        "<a style=\"color:green;\" onclick=\"return addFieldteam2()\" href=\"#\">[+]</a></nobr>";

    document.getElementById('goalsteam2').appendChild(div);

    return false;
}