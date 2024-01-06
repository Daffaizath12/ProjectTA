<?php

class Geocoding {
    private $apiKey;
    private $errorMessage;

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
    public function getErrorMessage() {
        return $this->errorMessage;
    }

    public function geocodeAddress($address) {
        $address = rawurlencode($address); // Menggunakan rawurlencode
        $apiKey = $this->apiKey;
    
        // Buat panggilan API ke Geocoding service
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=$apiKey";
        $response = file_get_contents($url);
        $data = json_decode($response);
    
        if ($data->status === "OK" && !empty($data->results)) {
            $location = $data->results[0]->geometry->location;
            return $location;
        } else {
            $this->errorMessage = "Gagal melakukan geocoding untuk alamat: $address";
            if (isset($data->error_message)) {
                $this->errorMessage .= ". Pesan kesalahan: " . $data->error_message;
            }
            return null;
        }
    }
    
}

?>
