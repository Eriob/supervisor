#!/usr/bin/perl -w

#------------------------------------------------------------------------------------
# Author : Alababa
# Date : 13/05/2015
# Object : Découvrir tous les hôtes du réseau
#------------------------------------------------------------------------------------

use strict;
use warnings;

# Pour MySQL
use DBI;
use DBD::mysql;

# Déclaration des variables
my @save;
my @cmd;
my $ligne;
my $i;
my $j;
my @hostname;
my $syn;
my $hostname_host = 0;
my $flag_hostname = 0;

# Déclaration variables MySQL
my $database = "supervisor";
my $username = "root";
my $password = "secret";
my $connect = DBI->connect(
                "dbi:mysql:dbname=$database",
                "$username",
                "$password",
                {RaiseError=>1},
                )or die $DBI::errstr;

$connect->do("DELETE FROM machines");

# Execute la commande smbtree qui découvre les noms de machines
@cmd = `nmap -sP 10.8.96.6/20`;

# Copie le resultat de la commande dans le fichier hostname.txt
open(WR,">/home/alan/scan.txt")||die("Vous ne pouvez pas créer le fichier");
print WR "@cmd";
close(WR);

# Chargement du fichier dans un tableau
open(RD, "</home/alan/scan.txt")||die("Vous ne pouvez pas ouvrir le fichier");
@save = <RD>;
shift(@save);
shift(@save);
close(RD);

# Traitement de la commande
open(WR,">/home/alan/scan.txt")||die("Vous ne pouvez pas ouvrir le fichier");
for($i=0; $i < @save-5; $i=$i+3){
        # On modifie les premières lignes
        chomp($save[$i]);
        $save[$i] =~ s/Nmap scan report for/IP Address:/;
        $save[$i] =~ s/^ +//;

        # On traite les troisièmes lignes
        chomp($save[$i+2]);
        $save[$i+2] =~ s/^ +//;

        # On concatène les premières et les troisièmes lignes
        $ligne = $save[$i] . " " .  $save[$i+2];
        my ($a, $b, $ip, $c, $d, $mac, $constructeur) = split(" +", $ligne);
        $constructeur =~ s/[()]//g;

        # Vérification des informations constructeur
        if($constructeur eq "Asustek"){
                $constructeur = "Asustek Computer";
        }elsif($constructeur eq "Fujitsu"){
                $constructeur = "Fujitsu Technology";
        }elsif($constructeur eq "Hon"){
                $constructeur = "Hon Hai Precision";
        }elsif($constructeur eq "Connect"){
                $constructeur = "Unknown";
        }else{
                #On fait rien
        }

        # On affiche les informations
        $ligne = $ip . " / " . $mac . " / " . $constructeur;
        @hostname = `nbtscan $ip`;
        shift(@hostname);
        shift(@hostname);
        shift(@hostname);
        $flag_hostname = 0;
        for($j=0; $j < @hostname; $j=$j+1){
                if($hostname[$j] =~ m/^10/){
                        my ($ip_host, $hostname_host, $server_host, $user_host, $mac_host) = split(" +", $hostname[$j]);
                        if($hostname_host !~ m/^</){
                                print $ligne . " / " . $hostname_host . "\n";
                                print WR $ligne . " / " . $hostname_host . "\n";
                                $connect->do("INSERT INTO machines VALUES('','$hostname_host','$ip','$mac','$constructeur')");
                                $flag_hostname = $flag_hostname+1;
                        }
                }
        }

        if($flag_hostname == 0){
                print $ligne . "\n";
                print WR $ligne . "\n";
                $connect->do("INSERT INTO machines VALUES('','','$ip','$mac','$constructeur')");
                $flag_hostname = $flag_hostname+1;
        }

}

my @length = `cat scan.txt | wc -l`;
print "Nombre de connectés: " . $length[0];
print WR "Nombre de connectés: " . $length[0];

my @nb = `curl -X POST -d '[{"name":"NbMachine","columns":["nb"],"points":[[$length[0]]]}]' '10.8.96.6:8086/db/machine_number/series?u=root&p=root'`;


