var numCols = prompt("Number of cols: ", 4);
var numRows = prompt("Number of rows: ", 6);
var table = document.getElementById("Etable");

for(var rows = 1; rows <= numRows ;rows++){
    table = document.write("\
    <table border='1'> \
    <tr>\
    </tr>\
    </table>");
    for (var cols = 1; cols <= numCols; cols++){
        table = document.write("<td> 0 </td>")
    }
}
document.write("<br><br>Number of rows: " + numRows +"<br>" + "Number of cols: " + numCols);

/*

*/