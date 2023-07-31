//Definir valores
//Competência
const hoje = new Date()
console.log(hoje)
var competencia = document.getElementById("mapa-competencia")

//Total de pessoas indicadas
var qt_indicados = document.getElementById("qt_indicados").value;

//Total de pessoas indicadas que finalizaram o cadastro
var qt_finalizados = document.getElementById("qt_finalizados").value;

competencia.innerHTML += "0" + (hoje.getMonth()+1) + "/" + hoje.getFullYear()
console.log(hoje.getMonth())
//Gerar gráfico
const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Indicações feitas', 'Indicações finalizadas'],
      datasets: [{
        data: [qt_indicados, qt_finalizados],
        backgroundColor: [
          '#82b4ff',
          '#FED67A'
        ],
        hoverOffset: 4
      }]
    }
  });