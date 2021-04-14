  var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
  };

  var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(231,233,237)'
  };

  var color = Chart.helpers.color;
  var config = {
    type: 'bar',
    data: {
      labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
      datasets: [{
        label: "My First dataset",
        backgroundColor: color(chartColors.red).alpha(0.2).rgbString(),
        borderColor: chartColors.red,
        pointBackgroundColor: chartColors.red,
        data: [
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor()
        ]
      }, {
        label: "My Second dataset",
        backgroundColor: color(chartColors.blue).alpha(0.2).rgbString(),
        borderColor: chartColors.blue,
        pointBackgroundColor: chartColors.blue,
        data: [
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor()
        ]
      }, {
        label: "My Third dataset",
        backgroundColor: color(chartColors.orange).alpha(0.2).rgbString(),
        borderColor: chartColors.orange,
        pointBackgroundColor: chartColors.orange,
        data: [
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor(), 
          randomScalingFactor()
        ]
      },]
    },
    options: {
      legend: {
        position: 'top',
        labels: {
          fontColor: 'rgb(255, 99, 132)'
        },
        onHover: function(event, legendItem) {
          document.getElementById("myChart2").style.cursor = 'pointer';
        },
        onClick: function(e, legendItem) {
          var index = legendItem.datasetIndex;
          var ci = this.chart;
          var alreadyHidden = (ci.getDatasetMeta(index).hidden === null) ? false : ci.getDatasetMeta(index).hidden;

          ci.data.datasets.forEach(function(e, i) {
            var meta = ci.getDatasetMeta(i);

            if (i !== index) {
              if (!alreadyHidden) {
                meta.hidden = meta.hidden === null ? !meta.hidden : null;
              } else if (meta.hidden === null) {
                meta.hidden = true;
              }
            } else if (i === index) {
              meta.hidden = null;
            }
          });

          ci.update();
        },
      },
      tooltips: {
        custom: function(tooltip) {
          if (!tooltip.opacity) {
            document.getElementById("myChart2").style.cursor = 'default';
            return;
          }
        }
      },
      title: {
        display: true,
        text: 'Chart.js Radar Chart'
      },
      scale: {
        ticks: {
        beginAtZero: true
        }
      }
    }
  };

  window.onload = function() {
    window.myRadar = new Chart(document.getElementById("myChart2"), config);
  };