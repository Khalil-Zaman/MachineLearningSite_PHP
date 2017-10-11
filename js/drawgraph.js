$(document).ready(function(){
  $('#run').click(function(){
    $.ajax({
      type: "POST",
      url: "pyfolder/LinearRegression.py",
      data: {'X': 3},
      success: function(data) {
        alert(data);
      }});
      /*
    }).done(function( o ) {
      x = 1;
       // do something
    });*/
    y = $('#y-value').html();
    y++;
    $('#y-value').html(y);
    draw_graph(y);
  });
});





function draw_graph(new_y){
  var ctx = $('#myChart');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'scatter',
    // The data for our dataset
    data: {
      datasets: [{
        type: 'scatter',
        label: "Points",
        pointBackgroundColor: "rgb(255, 12, 244)",
        data: [ {x: 0, y: 4},
                {x: 1, y: 7},
                {x: 2, y: 9},
                {x: 3, y: 13},
                {x: 4, y: 16},
                {x: 5, y: 19}],
        fill: false,
        showLine: false,
      }, {
        type: 'line',
        label: 'Linear Regression',
        fill: false,
        data: [ {x: 0, y: 4},
                {x: 5, y: new_y}],
      }]
    },

    // Configuration options go here
    options: {
        animation: false,
          scales: {
              xAxes: [{
                  type: 'linear',
                  position: 'bottom'
              }]
          }
      }
  });
}
