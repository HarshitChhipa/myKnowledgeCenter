# Show a list of images
`docker images`

# Show a list of containers
`docker container ls docker ps`

# Create a new image from a container (preferably after making changes you want to keep)
`docker commit c5534sdf343 my-new-image`

# Create an image from a dockerfile in this directory "."
`docker build -t "some-image" .`

# Tag you build with a new
`docker tag mywebapp harshit/mywebapp`

# Push out to docker hub…
`docker push harshit/mywebapp`

# Stop container with id d86ead82e236
`docker stop d86ead82e236`
