# Farming4 PHP Website

This is a multi-language PHP website for Farming4.

## How to Run with Docker

1. Ensure you have Docker and Docker Compose installed.
2. Open a terminal in this directory.
3. Run the following command:

```bash
docker-compose up -d --build
```

4. Open your browser and go to: [http://localhost:8080](http://localhost:8080)

## Project Structure

- `index.php`: Homepage
- `includes/`: Header, footer, and functions
- `lang/`: Language files (tr.php, en.php)
- `assets/`: CSS, JS, and images
- `docker-compose.yml`: Docker Compose configuration
- `Dockerfile`: Docker image configuration
