# Should write an article about which to choose when and how to set it up.

### SCP for copying file from server to local with pem file for auth directly.
 - scp -i ~/.ssh/{.pem file} -r {LIGHTSAIL_SERVER_NAME}@{SERVER_IP}:/var/www/{FOLDER_NAME} ~/Desktop/{FOLDER_NAME} 
