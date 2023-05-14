
// Requisicao("https://h-apigateway.conectagov.estaleiro.serpro.gov.br/api-cep/v1/consulta/cep/"+60130240);
// https://h-apigateway.conectagov.estaleiro.serpro.gov.br/api-cep/v1/consulta/cep/60130240


// function Requisicao(url) {
//     if (window.XMLHttpRequest) {            // Mozilla, Safari, ...
//         httpRequest = new XMLHttpRequest();
//     } else if (window.ActiveXObject) {      // IE
//         try {
//             httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
//         }
//         catch (e) {
//             try {
//             httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
//             }
//             catch (e) {}
//         }
//     }

//     if (!httpRequest) {
//       alert('Giving up :( Cannot create an XMLHTTP instance');
//       return false;
//     }

//     // httpRequest.onreadystatechange = alertContents;
//     httpRequest.open('GET', url);
//     httpRequest.send();
// }