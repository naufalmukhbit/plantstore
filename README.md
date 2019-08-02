# Plantstore Web for Rasa Chatbot
This web platform is a mockup of an e-commerce website with an extension of a chatbot widget to be connected with Rasa framework. The web is based on CodeIgniter framework that can be found on https://github.com/bcit-ci/CodeIgniter, and the chatroom is based on https://github.com/scalableminds/chatroom.

## How to install & run
##### 1. Download and install XAMPP 
https://www.apachefriends.org/download.html
##### 2. Clone the repo and put it on 
```
C:\xampp\htdocs
```
##### 3. Download the Rasa framework for Agriculture
https://github.com/naufalmukhbit/Chatbot2019
##### 4. Run the command prompt and change the directory to the rasa framework
```
python -m rasa_core_sdk.endpoint --actions action
```
Open new command prompt window in the same directory and run the following
```
python -m rasa_core.run -d models/dialogue -u models/nlu/default/farm_nlu --port 5005 --endpoints endpoints.yml --credentials credentials.yml --cors "*"
```
##### 5. Run XAMPP Apache and MySQL
##### 6. Import plantstore_db.sql to localhost/phpmyadmin with the name
```
plantstore_db
```
##### 7. Go to
```
http://localhost/plantstore
```
