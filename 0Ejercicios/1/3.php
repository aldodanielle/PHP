<h1>Consumo API "3.2"</h1>
<?php
//          ---+++++     consumo de API "Frase del motivadora"     +++++---

// Usando cURL
$ch = curl_init();      // iniciamos el cURL

// Configuramos la URl
curl_setopt($ch, CURLOPT_URL, "https://frasedeldia.azurewebsites.net/api/phrase");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutamos la solicitud y Almacenamos la respuesta
$response =  curl_exec($ch);

// Cerramos cURL
curl_close($ch);

// Decodificamos la respuesta JSON
$data = json_decode($response, true);

// Verificamos si la decodificacion tuvo exito
if(json_last_error() === JSON_ERROR_NONE){
    $phrase = $data ['phrase'] ?? 'NO phrase funnd';
    $author = $data['author'] ?? 'Unknown author funnd';
    echo "Phrase: $phrase " . "<br>" . " Author: $author";
}else{
    echo "Failed to decode JSON response";
}




// // Usando file_get_contents
// // Obtener el contenido de la URL
// $response = file_get_contents("https://frasedeldia.azurewebsites.net/api/phrase");
// // Verificar si la solicitud fue exitosa
// if ($response !== false) { 
//     // Decodificar la respuesta JSON 
//     $data = json_decode($response, true); 
//     // Verificar si la decodificación fue exitosa 
//     if (json_last_error() === JSON_ERROR_NONE) { 
//         // Acceder a los datos de la frase y el autor 
//         $phrase = $data['phrase'] ?? 'No phrase found'; 
//         $author = $data['author'] ?? 'Unknown author'; 
//         echo "Phrase: $phrase\nAuthor: $author\n"; 
//     } else { 
//         echo "Failed to decode JSON response\n"; 
//     }} else { 
//         echo "Failed to fetch data from API\n";
//     }

?>