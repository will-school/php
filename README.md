# PHP Dev Container

## Table of Contents
  - [# PHP Dev Container](#php-dev-container)
    - [## Table of Contents](#table-of-contents)
    - [## Foreword](#foreword)
    - [## Introduction](#introduction)
  - [# Github Codespaces](#github-codespaces)
    - [## Prerequisites](#prerequisites)
    - [## Note](#note)
    - [## Setup](#setup)
    - [## Reopening a Codespace](#reopening-a-codespace)
  - [# Dev Containers](#dev-containers)
    - [## Prerequisites](#prerequisites-1)
    - [## Installing and Configuring Docker](#installing-and-configuring-docker)
      - [### Instalation](#instalation)
        - [#### MacOS](#macos)
        - [#### Windows](#windows)
        - [#### ChromeOS, Ubuntu, and Debian](#chromeos-ubuntu-and-debian)
        - [#### Other Linux Distributions](#other-linux-distributions)
    - [## Last installs](#last-installs)
    - [## Opening a Dev Container](#opening-a-dev-container)
  - [# Generic usage instructions](#generic-usage-instructions)
    - [## Opening your server, PHPMyAdmin, and mySQL](#opening-your-server-phpmyadmin-and-mysql)
    - [## Updating the mySQL database user details](#updating-the-mysql-database-user-details)
    - [## Connecting to the database in php](#connecting-to-the-database-in-php)

## Foreword
> This is really long sorry about that but it goes into a lot of detail in places. Head to the relevant section using the table of contents and make sure to read everything! (Obviously you can skip MacOS things if you're on ChromeOS for example)  
> Get in touch with me if you have any issues getting this to work.

## Introduction 

This is a dev container template which includes and configures the following which are also in Easy PHP Dev Server:  
  - `PHP`: Language used for WDD course
  - `Apache`: Used to make PHP code run and be accessible in a web browser
  - `MySQLi`: Library used to connect PHP to mysql.
  - `MySQL Database`: Database. Could be replaced with other mysqli compatiable db (ex: mariaDB)
  - `PHPMyAdmin`: Database management tool.
The workspace is mounted at `/app`, with `/app/src` being exposed to the internet.  
The apache (web server) port, mysql port, and phpmyadmin port are all exposed to the host machine and avaliable under the "ports" tab.

# Github Codespaces

Open the code from any device with a web browser and internet connection (sucks on mobile tho) without installing any tools. Works the same on school devices and personal devices regardless of operating system. Works in chrome, edge, firefox, and safari.  

Github and Github Codespaces are owned by microsoft.

## Prerequisites
A [GitHub](https://github.com) account  

## Note
You only get $2.17USD/mo free for storage and usage credits. When that expires you will loose access to your files until you:
  - Add more credits to your account using real money
  - Registering for a github student account
      - Its not clear how much you get but I THINK this gives you unlimited usage??
      - You need to verify identity and school education. Glow screenshots are not strong proof. Neither is a glow email apparently.
  - Registering for github pro (I *think* this also gives unlimited)
  - Wait until the end of the month.

## Setup
1. Make sure you are signed into github
2. Click the green "Use this template" buttom (top right) and click "Open in a codespace"
3. Wait for the codespace to open. (This usually takes a while)
4. Repeat this whenever you want to have a new server.

## Reopening a codespace
1. Head to <https://github.com/codespaces>
    - *Note*: You can configure settings for codespaces here. Specifically:  
    Renaming codespaces  
    Disabling "Auto-delete" (delete codespaces after a few weeks of inactivity), which defaults to enabled whenever you create a repository.
2. Find the codespace (project) you want to open and click the name to open it in a new tab.
    - *Note*: If you have VSCode installed you can instead open the codespace using vscode, by opening the meatball menu and clicking "Open in Visual Studio Code". ***This is NOT the same as dev containers.***

# Dev Containers
*Note*: Dev containers are much more technical to set up, but are free forever and don't rely on an internet connection.

This runs the servers locally on your machine, and works on windows, linux*, and macOS. This uses "docker" to create small virtual machines (emulated computers) to run the software to ensure it works on all platforms. This requires software to be installed and will not work on the school computers.

VSCode settings, and some extensions (themes, icons, and some others) will automatically work in this environment, with extensions to make php development easier (syntax highlighting and auto formatting if you want it). Any extensions which dont work automatically can still be installed by clicking `Install in Dev Container` from the extension tab. (You will need to do this for every container, but only once (unless it updates))

This relies on free and open source software** which you download to your computer and so will work forever unless the software updates significantly. ***If*** the software changes drasticly, you can continue to use an older version. The software is unlikely to break for many many years.

\* This works properly on linux (and should work on ChromeOS), however the initial installation is MUCH more compicated. I have linked to 

** This relies on the microsoft branded version of vscode, as it requires certain features to be enabled which are not enabled in the foss version. The branded version is not technically foss. Theoretically, this can work on the open source version, but I couldn't get it to work. So we are using the branded version. 

## Prerequisites
  - [Visual Studio Code](https://code.visualstudio.com/download)  
    [ChromeOS specific installation instructions can be found here](https://code.visualstudio.com/blogs/2020/12/03/chromebook-get-started)
  - [Docker Desktop](https://www.docker.com/) (See installation instructions below)

## Installing and Configuring Docker  
Docker is a tool for creating and managing "containers", which are small virtual machines (like a computer inside a computer) with specific tools installed to perform specific tasks, like running a web server/database, or reliably compiling an app.  

"Dev Containers" is a system which allows you to create a container and write your code inside it, ensuring it works the same on any operating system docker can be installed on, and making it easy to install tools for development use.  

Docker is an incredibly compicated and powerful tool, however we only need to install it to allow other apps to interact with it.  

*Note*: While docker provides exelent security to avoid nuking your system/etc, you should always be careful when running untrusted code, as if it finds a major security vulnerability, it would gain root/admin access. Only run code and install containers which you trust.

[Official installation instructions for docker desktop (gui)](https://docs.docker.com/get-started/get-docker/)  
[Official installation instructions for docker engine (no gui) (not reccomended) (linux only)](https://docs.docker.com/engine/install/)

### Instalation 
*Note*: I haven't tested the instructions for the following operating systems, and so they ***may*** not work, however the instructions are based on offical documentation and most likely will. Current list: MacOS, Windows, ChromeOS (tested debian), other linux distributions. 
#### MacOS:
  1. [Download Docker Desktop from this link](https://docs.docker.com/desktop/setup/install/mac-install/)   
  Open about this mac to check if you have an intel or apple chip. If the chip row says "Apple M[something]" you have an apple silicone. If the chip says "Intel" you have an intel chip
  2. Double click the `.dmg` file and drag the icon to "Applications"
  3. Double click `Docker.app` to start Docker
  4. Agree to the terms and conditions (payment for large companies)
  5. Use reccomended settings
  6. Click "finish" and enter your password if needed
#### Windows  
*Note*: Containers may be shared between users. Or it might not since we're using WSL2. The docs are unclear. Don't put your passwords in anyway lol.
  1. [Download Docker Desktop from this (different) link](https://docs.docker.com/desktop/setup/install/windows-install/)
  2. Enable WSL2 (Windows subsystem for linux 2)  
  This is required to run containers on windows.
  You may instead use "Hyper-V", however this may require changing BIOS settings.  
  To install WSL2:  
      1. Search for "Powershell" in the start menu, and open it as "administrator" (right click > "Run as administrator")
      2. Type `wsl --install`. This installs all required features for `wsl`, and is provided by microsoft. [Relevant windows documentation](https://learn.microsoft.com/en-us/windows/wsl/install)
  3. Double click the exe file which you downloaded in step 1.  
      - Docker desktop requires administrator to install  
      - Make sure to select "WSL2" instead of "Hyper-V"
  4. Open Docker Desktop
  5. Agree to the terms and conditions (payment for large companies)
#### ChromeOS, Ubuntu, and Debian  
This is very hard. Get in touch with me if you have any issues.
  1. (ChromeOS only) Enable Linux. (`Settings` > `Advanced` > `Developers` > `Linux development environment`)
      - This will open a "terminal" window. This screen will allow you to type in "shell commands" which perform actions on your system. This is required to install docker engine on your system for ChromeOS
  2. Make sure apt is up to date: Type `sudo apt-get update` and click enter. Enter your password if prompted.  
  `apt` is a package manager. A package manager is used to install "packages" (apps and libraries). Package managers are common for linux based operating systems, and for programing languages (like php, javascript, python, and many more). `apt` is the package manager for ubuntu, which is the version of linux which chromeOS uses.  
  `sudo` runs the following commands as `root`, aka administrator.  
  `apt-get update` updates the local list of packages so that when you install packages you use the latest version. You should usually run `apt-get update` before installing any packages.
  3. Next, install the "dependencies" for docker. These are any packages which docker requires to be able to work properly.  
  `sudo apt-get install apt-transport-https ca-certificates curl gnupg2 software-properties-common -y`  
  `apt-get install` installs any packages listed after it.  
  `-y` at the end means "yes to all". It skips any confirmation prompts.  
      - `apt-transport-https`: This lets you install packages over https instead of http
      - `ca-certificates`: This provides "Certificate Authority Certificates" which are used by https to encrypt data
      - `curl`: This is a library and command for making network requests
      - `gnupg2`: This is a library used for cryptography. (cryptography != crypto coin. cryptography is digital security and encryption)
      - `software-properties-common`: Library for general system utilities. Its DBus if you care enough.
  4. Now we need to install the "Docker GPG key". This is used to make sure the correct package is installed. It is downloaded from `docker.com` and so is safe.  
  `curl -fsSL https://download.docker.com/linux/debian/gpg | sudo apt-key add -`
  5. Now we add the "fingerprint".  
  `sudo apt-key fingerprint 0EBFCD88`  
  I'm gonna be so real I don't know ***WHY*** we do it but I know it is:
      1. Safe to do.
      2. Required for the next steps.  
  6. We now add the docker repository to `apt`. The docker repository tells `apt` where to download docker from.  
  `sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable"`
  7. We update `apt` again to sync the new packages  
  `sudo apt-get update`
  8. We finally install docker by running the command:  
  `sudo apt-get install docker-ce docker-ce-cli containerd.io -y`  
  This contains all components which are required to run docker for the next steps.
  9. We now verify everything was successful and run:
  `sudo docker run hello-world`  
  This command:  
      1. Connects to the docker backend.
      2. Installs the offical `hello-world` image from dockers servers
      3. Creates a container with it
      4. Executes the container and prints the output to the terminal.  
      It should start with
      ```txt
      Hello from Docker!
      This message shows that your installation appears to be working correctly.
      ```
      If it doesnt then something has gone wrong and you should check you didn't miss any error logs earlier. 
  10. While docker is installed, we aren't done yet as we now need to let you run docker without prefacing it with `sudo`, otherwise vscode cannot connect to it later. To do this, run the command:  
  `sudo usermod -aG docker $USER`  
  This adds the current user to the group "docker", which should allow you to connect to the backend without `root`.
  11. Sign out of your chromebook and log back in. You MUST sign out, otherwise the group command from step 10 wont update your permissions. Once you log back in you can re-open the `terminal` app. 
  12. Run `docker run hello-world` (without sudo)  
  This should run without error, just like before. If so: you have successfully installed docker on your chromebook.  
  This is genuinely very complex so genuine congrats! 🎉🎉
#### Other linux distributions:  
Refer to [offical docker engine installation documentation](https://docs.docker.com/engine/install/) or your distributions wiki/docs to learn how to install docker engine. 

## Last installs.
At this point you should now have both `vscode` and `docker` (desktop/engine) installed and running on your system.  
In order to use Dev Containers, we need 2 more things: the devcontainers vscode extension, and the dev container configuration.

[The VSCode extension can be downloaded from here.](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) This allows you to create and connect to dev containers using vscode.

The configuration for this dev container can be found by clicking the green "Code" button at the top of this page, and selecting "Download Zip". This will download a zip file of this code, which you can then extract into a folder. This folder will then be used to store project files/etc. If you want to have multiple containers, either download the zip file again whenever you want to make a new one, or just copy paste the original folder.

## Opening a Dev Container.

1. Open the folder in vscode (make sure the folder contains the `.devcontainer` folder and `src` folder. Don't worry if the `.devcontainer` folder doesn't show up outside of vscode, some OSes hide files and folders who's name starts with a `.`)
2. You should recive a popup in vscode which says "Folder contains a dev container configuration file. Reopen folder to develop in a container." with a button which says "Reopen in Container". Click the button. If you don't get the notification, you can click the "remote" icon in the bottom left which looks like 2 `L`'s rotated and placed against each other. Look for the option which says "Reopen in Container"
3. The window should now reload, and after a potentially lengthy delay (give it a minute or two, it's creating a computer) you should see roughly the same screen. In the bottom left it should say "Dev container: PHP Dev Container" next to the remote icon. 
4. You may have a section which ends in "Done. Press any key to close the terminal." Just click a key, it can be ignored.
4. The Dev Container is now ready and running!

# Generic usage instructions

## Opening your server, PHPMyAdmin, and mySQL

To open the PHP server or PHPMyAdmin, click the radio tower icon in the bottom left, near the remote icon. This should reveal a "ports" section. Listed will be `PHPMyAdmin (admin:8000)`, `Remote PHP Server (80)`, and `MYSql Database (db:3306)`. To open the PHP server, hover over the link next to the label and click the globe icon to open the link in your browser. You can open the PHPMyAdmin server in the same way.  
If you want to use the mySQL app with another app you can copy the link from the same place (its supposed to look messed up in browser)

These links will only work on your device, in the case of dev containers only in the same browser which you have the codespace open in. When using github codespaces you can expose your server to the wider web, if you want to test on a phone or let someone else test it.  
Also note that the mysql server is not accessiable when using codespaces as github thinks the server failed to send a response and simply ignores it and sends a 500 error code back. If you want to use mySQL in an app outside the dev container/codespace you MUST use dev containers.

> [!WARNING]  
> At the time of writing ports are not forwarded automatically when using github codespaces due to an unresolved bug from circa 2021 <!--(great job microsoft. really knocked it out of the park there )-->  
> In order to open PHPMyAdmin or your server you must manually forward the ports. You only need to do this if they are not already visible in the ports tab.  
> Open the ports tab, click `Add Port`, and enter `80` for your PHP server, and `admin:8000` for PHPMyAdmin (mySQL is `db:3306`)  
> If you correctly added the port it should show up as `Remote PHP Server (80)` or `PHPMyAdmin (admin:8000)` (or `MYSql Database (db:3306)`) respectively

## Updating the mySQL database user details.

If you want to change the username, passwords, or default database for the mySQL server, open `.devcontainer/compose.yml` and look for the following code snippet:
```yml
x-db-info: &ENV
  # password for root (admin) account
  MYSQL_ROOT_PASSWORD: root_password
  # default database name
  # idk if changing this replaces the old db or what
  MYSQL_DATABASE: db
  # default non admin username
  MYSQL_USER: user
  # default non admin password
  MYSQL_PASSWORD: password
```
You can change any of these values to update the settings for mysql and mysql admin. Make sure to only change the values after the colon and not the `&ENV` (ie: change `root_password`, `db`, `user`, and `password`) otherwise the codespace will break. If you accidentally break things, just copy paste the `.devcontainer/compose.yml` file from the zip file. 

When you update this, you should recive a notification which tells you to "rebuild the codespace", make sure to click to rebuild. If you don't get the notification, click the remote icon and click "rebuild container". The values should automatically update, although you will need to sign back into php myadmin. Make sure to update any references to the database in php code with the new login details or database. 

## Connecting to the database in php

```php
<?php
  // value 1 is the name of the database server. Keep this as "db"
  // value 2 is the user to sign in as. "root" is the admin, otherwise use whatever `MYSQL_USER` is
  // value 3 is the password for the user. use `MYSQL_ROOT_PASSWORD` for "root" and `MYSQL_PASSWORD` for the not admin account
  // value 4 is the database to use. keep this as whatever `MYSQL_DATABASE` is
  // value 5 is the port on the database server to connect to. leave this as 3306
  $db_con = mysqli_connect("db", "root", "root_password", "db", 3306);

  // couldnt connect to the database 
  // this shouldnt happen unless you use the wrong username/password/etc
  if (mysqli_connect_errno()) {
    echo "Connection to mysql database (<code>http://db:3306</code>) failed with error: " . mysqli_connect_error();
  } else {
    // connected to the database
    echo "Connected successfully to database (<code>http://db:3306</code>)";
  }
?>
```
