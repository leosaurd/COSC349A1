# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile that configures 3 virtual machines; two as a webpage(possibly) and a database server.
Vagrant.configure("2") do |config|
  # Following the configure settings for vagrantup from the Vagrant website.
  # This line specifies that all servers will be running ubuntu.
  config.vm.box = "ubuntu/xenial64"
  
  # This line will check for updates for the box when vagrant up is run.
  config.vm.box_check_update = true

  # Defining a webserver virtual machine.
  config.vm.define "webserver" do |webserver|
    # These are options specific to the webserver VM
    webserver.vm.hostname = "webserver"
    
    # Enable port forwarding, so we can connect on the host IP using port 8080.
    # Lets network requests reach the webserver VM port 80.
    webserver.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
    
    # Assigned ip for the VM to 192.168.11.
    webserver.vm.network "private_network", ip: "192.168.2.11"

    # Taken from provided labs and information. Mention of marking based on this.
    webserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    # Configure the webserver using the inline SHELL script.
    # READ THIS - We could probably use a shell script (.sh file) to make configuration easier.
    # Did it for this part as an example.
    webserver.vm.provision "shell", path: "webserver.sh"
  end

  # The clientside webpage, following a similar setup to above.
  config.vm.define "client" do |client|
    client.vm.hostname = "client"
    client.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"
    #changing = to : should have fixed the error.
    client.vm.network "private_network", ip: "192.168.2.12" 
    client.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    client.vm.provision "shell", path: "client.sh"
  end

  # Here is the section for defining the database server, which I have
  # named "dbserver".
  # This is probably where we will define the database server for things we need to do; IE Logins, file transfer, etc.
  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.hostname = "dbserver"
    # Note that the IP address is different from that of the webserver
    # above: it is important that no two VMs attempt to use the same
    # IP address on the private_network.
    dbserver.vm.network "private_network", ip: "192.168.2.13"
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    dbserver.vm.provision "shell", path: "dbserv.sh"
  end

end