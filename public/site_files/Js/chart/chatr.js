var xValues = [ "راضي", "محايد", "غير راضي"];
var yValues = [60,30,10];
var barColors = [
  
  "#f5ae45",
  "#f5f763",
  "#5e5c59",
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "مدينة الثقافه والعلوم"
    }
  }
});