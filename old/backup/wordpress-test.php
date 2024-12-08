<?php
// Einstellungen für die WordPress-API
$base_url = 'https://cmsweb:f6InX9k60A624zC7@cms-web.makeopinion.com/wp-json/wp/v2/';
$category_id = 3; // Ersetze 1 durch die tatsächliche Kategorie-ID

// API-Endpunkt für Artikel in einer Kategorie
$api_endpoint = $base_url . 'posts?categories=' . $category_id;

// cURL-Aufruf
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// JSON-Daten in ein PHP-Array umwandeln
$data = json_decode($response, true);

// Überprüfe, ob die API-Antwort erfolgreich war
if (isset($data) && is_array($data)) {
    // Iteriere durch die Artikel
    foreach ($data as $post) {
        // Artikel-Titel
        $title = $post['title']['rendered'];
print_r($post);
        // Artikel-Thumbnails
        $thumbnail = $post['thumbnail']['source_url'];
        // Artikel-Link
        $link = $post['link'];

        // Ausgabe der Artikelinformationen
        echo '<h2>' . $title . '</h2>';
        if (!empty($thumbnail)) {
            echo '<img src="' . $thumbnail . '" alt="' . $title . ' Thumbnail">';
        }
        echo '<p><a href="' . $link . '">Weiterlesen</a></p>';
        echo '<hr>';
    }
} else {
    // Fehlerbehandlung, falls die API-Antwort fehlschlägt
    echo 'Fehler beim Abrufen der Daten von der API.';
}
?>