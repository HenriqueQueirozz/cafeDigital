//Definir competência
const hoje = new Date()
var competencia = document.getElementById("mapa-competencia")

competencia.innerHTML += "0" + hoje.getMonth() + "/" + hoje.getFullYear()

//Gerar gráfico
const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Convites aceitos', 'Assinaturas finalizadas'],
      datasets: [{
        data: [1, 4],
        backgroundColor: [
          '#82b4ff',
          '#FED67A'
        ],
        hoverOffset: 4
      }]
    }
  });