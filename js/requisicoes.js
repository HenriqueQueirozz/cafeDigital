// webRequest("GET", "https://viacep.com.br/ws/"+17527561+"/json/");

// function webRequest(method, url) {
//     if (window.XMLHttpRequest) {            // Mozilla, Safari, ...
//         request = new XMLHttpRequest();
//     } else if (window.ActiveXObject) {      // IE
//         try {
//             request = new ActiveXObject("Msxml2.XMLHTTP");
//         }
//         catch (exception) {
//             try {
//                 request = new ActiveXObject("Microsoft.XMLHTTP");
//             }
//             catch (exception) {}
//         }
//     }

//     if (!request) {
//         console.log('Desistindo :( Não é possível criar uma instância XMLHTTP.');
//         webResponse(false);
//     }

//     request.open(method, url);
//     request.onreadystatechange = requestResponse;
//     request.send();
// }

// function requestResponse() {
//     if (request.readyState === 4) {
//         if (request.status >= 200 && request.status < 400) {
//             webResponse(JSON.parse(request.responseText));
//         } else {
//             webResponse('Houve um problema com o pedido.');
//         }
//     }
// }

// function webResponse(message) {
//     return(message.cep);
// }