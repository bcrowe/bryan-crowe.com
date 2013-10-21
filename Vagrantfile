# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "wheezy"
  config.vm.box_url = " http://puppet-vagrant-boxes.puppetlabs.com/debian-70rc1-x64-vbox4210-nocm.box"
  config.vm.provision :shell, :path => "bootstrap.sh"
  config.vm.synced_folder "~/Projects/bryan-crowe.com", "/vagrant", owner: "www-data", group: "www-data", :mount_options => ['dmode=775', 'fmode=775']
  config.vm.network :forwarded_port, guest: 80, host: 8080
end
