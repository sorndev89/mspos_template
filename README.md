# MsPOSNew - ລະບົບຈັດການຈຸດຂາຍ (POS) ໃໝ່

ໂຄງການນີ້ແມ່ນລະບົບຈັດການຈຸດຂາຍ (Point of Sale - POS) ທີ່ຖືກພັດທະນາດ້ວຍ Laravel ສຳລັບ Backend ແລະ Vue.js ສຳລັບ Frontend.

## ການຕິດຕັ້ງ

ປະຕິບັດຕາມຂັ້ນຕອນລຸ່ມນີ້ເພື່ອຕິດຕັ້ງ ແລະ ເປີດໃຊ້ງານໂຄງການ.

### ຄວາມຕ້ອງການ

*   PHP >= 8.1
*   Composer
*   Node.js >= 16
*   npm ຫຼື Yarn
*   ຖານຂໍ້ມູນ (MySQL, PostgreSQL, SQLite, etc.)

### ຂັ້ນຕອນການຕິດຕັ້ງ Backend (Laravel)

1.  **Clone ໂຄງການ:**
    ```bash
    git clone <URL_ຂອງ_ໂຄງການ>
    cd MsPOSNew
    ```
    *(ໝາຍເຫດ: ປ່ຽນ `<URL_ຂອງ_ໂຄງການ>` ດ້ວຍ URL ຕົວຈິງຂອງ Git repository ຂອງທ່ານ)*

2.  **ຕິດຕັ້ງ Dependencies ຂອງ Composer:**
    ```bash
    composer install
    ```

3.  **ສ້າງໄຟລ໌ .env:**
    ຄັດລອກໄຟລ໌ `.env.example` ເປັນ `.env`:
    ```bash
    cp .env.example .env
    ```

4.  **ສ້າງ Application Key:**
    ```bash
    php artisan key:generate
    ```

5.  **ຕັ້ງຄ່າຖານຂໍ້ມູນ:**
    ເປີດໄຟລ໌ `.env` ແລະ ຕັ້ງຄ່າຂໍ້ມູນການເຊື່ອມຕໍ່ຖານຂໍ້ມູນຂອງທ່ານ:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ms_pos_new
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    *(ປ່ຽນຄ່າຕາມການຕັ້ງຄ່າຖານຂໍ້ມູນຂອງທ່ານ)*

6.  **Run Migrations ແລະ Seeders (ທາງເລືອກ):**
    ```bash
    php artisan migrate --seed
    ```
    *(ຄຳສັ່ງນີ້ຈະສ້າງຕາຕະລາງຖານຂໍ້ມູນ ແລະ ໃສ່ຂໍ້ມູນຕົວຢ່າງ)*

### ຂັ້ນຕອນການຕິດຕັ້ງ Frontend (Vue.js)

1.  **ຕິດຕັ້ງ Dependencies ຂອງ Node:**
    ຢູ່ໃນ Root Directory ຂອງໂຄງການ:
    ```bash
    npm install
    # ຫຼື
    yarn install
    ```

2.  **Compile Assets:**
    ```bash
    npm run dev
    # ຫຼື ສຳລັບ Production
    npm run build
    ```

### ການເປີດໃຊ້ງານ Application

1.  **ເປີດໃຊ້ງານ Laravel Development Server:**
    ```bash
    php artisan serve
    ```
    Application Backend ຈະເຮັດວຽກຢູ່ທີ່ `http://127.0.0.1:8000` (ຫຼື Port ອື່ນໆ).

2.  **ເປີດໃຊ້ງານ Vite Development Server (ສຳລັບ Frontend):**
    ```bash
    npm run dev
    ```
    Vite ຈະເປີດໃຊ້ງານ Development Server ສຳລັບ Frontend. ທ່ານສາມາດເຂົ້າເຖິງ Application ໄດ້ຜ່ານ URL ທີ່ Laravel Development Server ໃຫ້ມາ (ເຊັ່ນ: `http://127.0.0.1:8000`).

## ການນຳໃຊ້

(ເພີ່ມລາຍລະອຽດກ່ຽວກັບວິທີການນຳໃຊ້ລະບົບຂອງທ່ານທີ່ນີ້)

## License

ໂຄງການນີ້ແມ່ນ Open-source ພາຍໃຕ້ License MIT.