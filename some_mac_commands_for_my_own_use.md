# For open file in Terminal
For Long Files --> less {{File_name}}
For normal we can use --> cat {{File_name}}

# Find folder's size in Terminal
du -sh * (* --> for all files , -s is for  specified to a line, -h is for the human readable format)

# Find The PID of a Port
sudo lsof -i :PORT_NUMBER

# While install laravel in mac os(Catlina) it might not found a package called ext-zip.
- brew update
- brew install php@7.3
- brew link php@7.3
- And reload the terminal

# Open a RAR File without any application.
- brew Install unrar
- unrar e file.rar ../destinationFolder/
