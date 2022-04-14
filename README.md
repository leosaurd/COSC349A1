# COSC349 Assignment 1

This is the first assignment for COSC349 at the University of Otago, Dunedin.

The project is a skeleton of a database server where one virtual machine hosts the database, another machine pushes data to it, and the last machine retrieves data stored inside. 

To utilize our virtual machines, you require three additional programs:
- Bash Terminal:https://www.laptopmag.com/au/articles/use-bash-shell-windows-10 or https://git-scm.com/downloads or https://www.atlassian.com/git/tutorials/git-bash#:~:text=Git%20Bash%20is%20an%20application,operating%20system%20through%20written%20commands.
- Oracle VM Manager:https://www.virtualbox.org
- Vagrant:https://www.vagrantup.com/downloads

After following the installation instructions from the above websites, you can proceed with cloning our github page, or downloading a release(should there be one). 
To clone our github, you can use a program such as SourceTree or the bash terminal, though SourceTree is heavily recommended. 
- SourceTree: https://www.sourcetreeapp.com/
You may then clone using the link https://github.com/matt53211/cosc349Asgn1.git to any location in order to proceed further. A recommendation would be somewhere with sufficient data, as some virtual machines may take up more space than expected. 
After you have successfully cloned the github to a location, you can now open up the bash terminal you installed, and navigate to the directory using the cd command. In case you moved it to another drive, you may access that drive by the command "cd D:" or "cd C:".
If you are unable to locate the file or forgot the name of its location, you may use the command "ls" to view files in the current directory.

Once you have navigated to the directory, ensure that the vagrantfile is in the directory when typing the "ls" command. 
Once that has been confirmed, you may start the program by typing vagrant up in the bash terminal. 
If you wish to view the devices as they function, you may open the Oracle VM Manager you installed earlier. This can also help with debugging, in case you run into unexpected errors. 

To access the websites after you have successfully started up all three virtual machines, you may go to your default browser and type the ip addresses in.
192.168.2.12 - Database Entry Site
192.168.2.11 - Database Retrieval Site
192.168.2.13 - Should not be accessible, holds the database.

Note: Not all operating systems may function in the same way, and thus for developers, this was solely developed on Windows 10 and may be lacking permissions depending on your system.

When wanting to close the virtual machines, you may run the command in the bash terminal "vagrant halt".
If there are any changes you might want to make the the programs on each machine, you may run the command "vagrant reload --provision". This will forcefully reload all configurations without destroying your machines. 
If an error starting up a virtual machine occurs, ensure that "vagrant halt" is run, then start up Task Manager via Ctrl+Shift+Esc and ensure that no VirtualBox threads are running. These are often termed Headless Threads, and are usually the product of a problematic VirtualBox installation. 

