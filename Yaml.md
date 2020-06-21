# YAML --> YAML Ain't Markup Language (I am laughing on this since 2 days)
- Simple Script to deploy on any ftp server{Addtional condition only push when branch is master}
`image: php:7.1.29
  pipelines:
    branches:
      master:
        - step:
          caches:
            - composer
          script:
            - pipe: atlassian/ftp-deploy:0.3.2
              variables:
                USER: $FTP_USERNAME
                PASSWORD: $FTP_PASSWORD
                SERVER: $SERVER_IP
                REMOTE_PATH: /public_html `
- Validate Config by - [Demo](https://bitbucket-pipelines.prod.public.atl-paas.net/validator)

