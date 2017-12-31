# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "ballenasoft-nginx"
    #confif.vm.box_url = "https://www.dropbox.com/s/2bkb40be92t4oe6/ballenasoft-nginx.box?dl=1"
    config.vm.hostname = "ballenasoft.local"

    config.vm.network "forwarded_port", guest: 80, host: 8080
    config.vm.network "private_network", ip: "192.168.26.26"

    #config.vm.synced_folder "./www", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    # Optional NFS. Make sure to remove other synced_folder line too
    config.vm.synced_folder "./www", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    #config.vm.synced_folder "./www", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666", 'vers=3', 'tcp', 'fsc' ,'actimeo=2'

    config.ssh.insert_key = false

end