# Scooter repair shop
Prosta aplikacja w PHP służąca głównie za front dla bazy danych dla serwisu hulajnów elektrycznych.

## Instalacja
1. Sklonuj repozytorium
2. Zimportuj plik 'repair_shop.sql', lub test_db.sql do swojej bazy danych
3. Ustaw zmienne środowiskowe na serwerze, poniżej przykładowa wartości
```
"APP_ENV": "DEBUG", //DEBUG or PROD
"DB_HOST": "localhost",
"DB_PORT": "3306",
"DB_USER": "root",
"DB_PASSWORD": "",
"DB_NAME": "repair_shop",
"APP_HOST": "localhost:2137/"                
```
4. uruchom bazę danych i serwer PHP