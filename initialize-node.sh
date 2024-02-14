#!/bin/bash
# This script will initialize node.js environment for the user
# Run this script only in user's home directory, not as root 
# Check if the user is root
if [ "$EUID" -eq 0 ]
  then echo "Please do not run as root"
  exit
fi
echo 'Setting up npm global packages path'
echo 'export PATH=~/.npm-global/bin:$PATH' >> ~/.profile
echo 'Adding ea-nodejs20 node binaries to PATH'
echo 'export PATH=$PATH:/opt/cpanel/ea-nodejs18/bin' >> ~/.profile
echo 'Refreshing Current Shell Session'
source ~/.profile
# remove ea-nodejs20 from PATH
sed -i '/ea-nodejs20/d' ~/.profile
# remove npm-global from PATH