#!/bin/bash

echo  $( date +%D-%T );

git add app;
git add routes;
git add resources;
git add public;
git add config;
git commit -m  $( date +%D-%T );
git push origin master;