#!/bin/bash
echo 'Setting up npm global packages path'
echo 'export PATH=~/.npm-global/bin:$PATH' >> ~/.profile
echo 'Adding ea-nodejs20 node binaries to PATH'
echo 'export PATH=$PATH:/opt/cpanel/ea-nodejs20/bin' >> ~/.profile
echo 'Refreshing Current Shell Session'
source ~/.profile
