# Ionic Harga Pasar

Ionic Harga Pasar adalah sebuah aplikasi sample yang dibuat dengan menggunakan Ionic 2. 

## Tutorial Instalasi

Ikuti instruksi instalasi dibawah ini:

1. **Pastikan sudah terinstall Cordova dan Ionic versi terbaru:**
    ```
    npm install -g cordova
    npm install -g ionic
    ```

1. Clone repositori ini:
    ```
    git clone https://github.com/aulianza/Harga-Pasar.git
    ```

1. Masuk ke direktori `Harga-Pasar` :
    ```
    cd Harga-Pasar
    ```

1. Install dependencies
    ```
    npm install
    ```
  
1. Jalankan aplikasi di browser
    ```
    ionic serve -l
    ```

## Menggunakan REST Services

Ikuti langkah dibawah ini untuk menjalankannya dengan REST data services:

1. Ganti semua referensi `property-service-mock` dan `broker-service-mock` dengan `property-service` dan `broker-service`
 
1. Install Node.js implementasi REST services (see [this repository](https://github.com/aulianza/Harga-Pasar) untuk tutorial), dan jalankan Node server.
 
1. Sesuaikan `SERVER_URL` di `providers/config.ts`. Defaultnya adalah http://localhost:5000.

1. Jalankan aplikasi di browser
    ```
    ionic serve -l
    ```
