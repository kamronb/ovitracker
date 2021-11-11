// Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Negative', 8],
          ['Positive 1 to 5', 4],
          ['Positive > 5', 3]
        ]);

        // Set chart options
        var options = {'backgroundColor': 'transparent',
                       'width': 250,
                       'height': 250,
                       'is3D': 1,
                       'legend': 'none',
                       'pieHole': 0, /*Value between 0 and 1*/
                       'colors': ['#56D568','#E7DB56', '#DE7353']};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }