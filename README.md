
![Logo](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/th5xamgrr6se0x5ro4g6.png)


# 💬❔TeyMii — Create your own secret! ❔💬

TeyMii is an anonymous messaging app that allows you to connect with others without revealing your identity. Express yourself freely, share your thoughts and feelings, and engage in honest conversations without fear of judgment. TeyMii provides a safe and secure space for authentic communication.


## Features

- Send and receive messages
- Shareable messages
- Light/dark mode toggle


## Installation

1. Clone the project

    ```bash
      git clone https://github.com/Syafwan000/teymii
    ```

2. Go to the project directory

    ```bash
      cd teymii
    ```

3. Add .env file

    ```bash
      cp .env.example .env
    ```

4. Change `DB_CONNECTION` to mysql in .env file

   ```bash
     DB_CONNECTION=mysql
   ```

6. Install dependencies

    ```bash
      composer install
      npm install
    ```

7. Start the server

    ```bash
      npm run dev
      php artisan serve
    ```


## License

This project is licensed under the MIT License. See the [LICENSE](https://choosealicense.com/licenses/mit/) file for details.
