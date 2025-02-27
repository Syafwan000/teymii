
<p align="center">
    <img src="https://raw.githubusercontent.com/Syafwan000/teymii/refs/heads/main/public/assets/images/logo-readme.png" alt="TeyMii Logo">
</p>


# 💬❔TeyMii — Create your own secret! ❔💬

TeyMii is an anonymous messaging app that allows you to connect with others without revealing your identity. Express yourself freely, share your thoughts and feelings, and engage in honest conversations without fear of judgment. TeyMii provides a safe and secure space for authentic communication.


## Features

- Send and receive messages
- Shareable messages
- Light/dark mode toggle
- Interesting animation


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

5. Add `SPOTIFY_CLIENT_ID` and `SPOTIFY_CLIENT_SECRET` in .env file

   ```bash
     SPOTIFY_CLIENT_ID=your-spotify-client-id
     SPOTIFY_CLIENT_SECRET=your-spotify-client-secret
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
    
## Artisan Command

Run this command in a cron job to clear expired messages (older than 7 days)

```bash
  php artisan clear:message
```

## License

This project is licensed under the MIT License. See the [LICENSE](https://github.com/Syafwan000/teymii/blob/main/LICENSE) file for details.
