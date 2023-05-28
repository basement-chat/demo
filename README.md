<div align="center">
  <p><a href="https://github.com/basement-chat/basement-chat"><img src="https://raw.githubusercontent.com/basement-chat/basement-chat/main/assets/basement-chat.svg" alt="Basement Chat Logo" height="60"/></a></p>
  <h1>Basement Chat Demo</h1>
  <p>[Basement Chat](https://github.com/basement-chat/basement-chat) demo integration with Laravel Breeze and Pusher</p>
</div>

## Table of Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Comparing which files were changed](#comparing-which-files-were-changed)

## Introduction

This is a demo implementation of the [Basement Chat package](https://github.com/basement-chat/basement-chat/) with Laravel Braze and Pusher broadcast driver. Here's a [live demo](https://basement.up.railway.app/) link using Railway, you should register first before trying it (no email verification required).

## Installation

- Requirements:

  - `git`
  - `php >= 8.0`
  - `node.js >= 18`

- To install this demo repository, you can do the following steps:

  - Clone this repository `git clone https://github.com/basement-chat/demo.git`
  - Change your current working directory to `demo`
  - Install composer dependencies with `composer install` and install npm dependencies with `npm install`
  - Copy the environment file from `.env.example` to `.env`
  - Generate the key using `php artisan key:generate`
  - Configure your database connection in `.env`, you can simply create a new empty file to `database/database.sqlite` if you want to use the default SQLite connection
  - Create a new Pusher channel and configure your Pusher connection in `.env`
    > If you want to use a different broadcast driver, see [this installation guide](https://github.com/basement-chat/basement-chat#installation).
  - Run database migration `php artisan migrate`
  - Build assets `npm run build`
  - Finally, run the Laravel HTTP server `php artisan serve` and open your browser

# Comparing which files were changed
To compare which files are changed in this repo when integrating the Basement Chat package, you can visit [the following page](https://github.com/basement-chat/demo/compare/feb0e7fd1aa51b8cd1835bcc8b8e62686f625199..4475c4174e0df6d31119bca39f347b071b9baa61).
