<details>
    <summary>Table of Contents</summary>
    <ol>
        <li>
            <a href="#about-the-project">About The Project</a>
        </li>
        <li>
            <a href="#getting-started">Getting Started</a>
            <ul>
                <li><a href="#prerequisites">Prerequisites</a></li>
                <li><a href="#installation">Installation</a></li>
                <li><a href="#started">Started</a></li>
            </ul>
        </li>
    </ol>
</details>

## About The Project
This project is an example of how to embed videosdk on a symfony webapp.

## Getting Started

### Prerequisites

### PHP

Make sure you have php installed
```sh 
    php -v
```

### Composer

Make sure you have composer installed
```sh
    composer -v
```

<a href="https://getcomposer.org/download/">Composer install</a>


### Symfony CLI

On Windows, install scoop
```sh
    Set-ExecutionPolicy RemoteSigned -Scope CurrentUser # Optional: Needed to run a remote script the first time
    Invoke-WebRequest get.scoop.sh | Invoke-Expression
```

Install Symfont CLI with scoop
```sh
    scoop install symfony-cli
```

### Installation

1. Get your API key on videosdk

2. Clone the reppo
    ``` sh
        git clone https://github.com/KitschminyofStephan/videosdk-symfony-example.git
    ```

3. Install Symfony packages
    ```sh
        cd videosdk-symfony-example
        composer install
    ```

4. Create .env.local
    create new file .env.local and copy the content of .env
    change VIDEOSDK_API_KEY with your key

5. Start the server
    ```sh
        symfony server:start
    ```

    go to <a href="http://localhost:8000">http://localhost:8000</a>

