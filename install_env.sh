#!/usr/bin/env bash
set -e

echo "=== 1. Vérification des privilèges ==="
if [ "$EUID" -ne 0 ]; then
  echo "Veuillez exécuter ce script avec sudo : sudo ./install_env.sh"
  exit 1
fi

echo "=== 2. Mise à jour des paquets de base et prérequis ==="
apt update
apt install -y curl wget git software-properties-common ca-certificates apt-transport-https lsb-release gnupg

echo "=== 3. Ajout du dépôt PPA pour PHP 8.3 ==="
add-apt-repository -y ppa:ondrej/php
apt update

echo "=== 4. Installation de PHP 8.3 et des extensions pour Laravel ==="
apt install -y php8.3 \
  php8.3-cli \
  php8.3-common \
  php8.3-fpm \
  php8.3-mysql \
  php8.3-zip \
  php8.3-gd \
  php8.3-mbstring \
  php8.3-curl \
  php8.3-xml \
  php8.3-bcmath \
  php8.3-intl \
  php8.3-readline

# Définir PHP 8.3 comme version par défaut du CLI
update-alternatives --set php /usr/bin/php8.3

echo "=== 5. Configuration et installation de Node.js (v20 LTS) ==="
curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
apt install -y nodejs

echo "=== 6. Vérification des versions installées ==="
echo "----------------------------------------"
php -v
echo "----------------------------------------"
node -v
npm -v
echo "----------------------------------------"
git --version
echo "----------------------------------------"
echo "Installation terminée avec succès !"
