# Table of Contents

- [Introduction](#introduction)
  - [Features](#features)
- [Quick Start](#quick-start)
- [Installation](#installation)
  - [Fig](#fig)
- [Upgrading](#upgrading)


# Introduction

Dockerfile to build an OpenSUSE 13.2 container image with apache2 and php5.

## Features:
- Apache2
- php5 & common modules
- php.ini configured to utilize `getenv()`

# Quick Start

Run the opensuse-apache-docker image

```bash
docker run --name='opensuse-apache' -it --rm -p 80:80 novacoast/opensuse-apache-docker:latest
```
# Installation

Pull the latest version of the image from the docker index. These builds are performed by the **Docker Trusted Build** service.

```bash
docker pull novacoast/opensuse-apache:latest
```

Alternately you can build the image yourself.

```bash
git clone https://github.com/novacoast/opensuse-apache-docker.git
cd opensuse-apache-docker
docker build -t="$USER/opensuse-apache" .
```

## Fig

Build and run using [Fig](http://www.fig.sh)

```bash
git clone https://github.com/novacoast/opensuse-apache-docker.git
cd opensuse-apache-docker
fig build
fig up
```

The [webapp](webapp) folder on the host will be mounted into the container's apache root


# Upgrading

To upgrade to newer releases, simply follow this 3 step upgrade procedure.

- **Step 1**: Stop the currently running image

```bash
docker stop opensuse-apache
```

- **Step 2**: Update the docker image.

```bash
docker pull novacoast/opensuse-apache:latest
```

- **Step 3**: Start the image

```bash
docker run --name='opensuse-apache' -d -p 80:80 novacoast/opensuse-apache-docker:latest
```
