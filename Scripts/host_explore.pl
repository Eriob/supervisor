#!/usr/bin/perl -w

#------------------------------------------------------------------------------------
# Author : Alababa
# Date : 13/05/2015
# Object : Découvrir un hôte du réseau
#------------------------------------------------------------------------------------

use strict;
use warnings;

# Déclaration des variables
my @save;
my @cmd;
my $ligne;
my $flag_device = 0;
my $flag_OS = 0;
my $windows = 0;
my $linux = 0;

if (@ARGV){
        open(RD,"<scan.txt")||die("Vous ne pouvez pas ouvrir le fichier");
        @save = <RD>;

        foreach $ligne (@save){
                my ($ip, $mac, $constructeur) = split (" / ", $ligne);
                if($ARGV[0] eq $ip){
                        @cmd = `nmap -T5 -O $ARGV[0]`;

                        open(WR,">/var/www/supervisor/Viewer/Explored/hostname_".$ARGV[0].".php")||die("Vous ne pouvez pas créer le fichier");
                        print WR "@cmd";
                        close(WR);

                        open(RD,"</var/www/supervisor/Viewer/Explored/hostname_".$ARGV[0].".php")||die("Vous ne pouvez pas ouvrir le fichier");
                        @save = <RD>;
                        shift(@save);
                        shift(@save);
                        shift(@save);
                        shift(@save);
                        shift(@save);
                        close(RD);

                        open(WR,">/var/www/supervisor/Viewer/Explored/hostname_".$ARGV[0].".php")||die("Vous ne pouvez pas ouvrir le fichier");

                        print "IP: " . $ARGV[0] ."\n";
                        print WR "<br>IP : " . $ARGV[0] . "</br>\n";

                        # Verification adresse MAC
                        for(my $i=0; $i < @save-5; $i=$i+1){
                                $save[$i] =~ s/^ +//;

                                if($save[$i] =~ m/^MAC/){
                                        my ($a, $b, $mac, $constructeur) = split(" +", $save[$i]);
                                        $constructeur =~ s/[()]//g;
                                        #$a = chaine "MAC" $c = "ADRESSE MAC"
                                        print $a.": ".$mac."\n";
                                        if($constructeur eq "Asustek"){
                                                $constructeur = "Asustek Computer";
                                        }elsif($constructeur eq "Fujitsu"){
                                                $constructeur = "Fujitsu Technology";
                                        }elsif($constructeur eq "Hon"){
                                                $constructeur = "Hon Hai Production";
                                        }elsif($constructeur eq "Connect"){
                                                $constructeur = "Unknown";
                                        }else{
                                                #On fait rien
                                        }

                                        print "Constructeur: ".$constructeur."\n";
                                        print WR "<br>".$a." : ".$mac."</br>\n";
                                        print WR "<br>Constructeur : ".$constructeur."</br>\n";
                                }
                        }

                        # Verification des ports ouverts
                        for(my $i=0; $i < @save-5; $i=$i+1){
                                $save[$i] =~ s/^ +//;

                                if($save[$i] =~ m/^[0-9]/){
                                        print $save[$i];
                                        chomp($save[$i]);
                                        print WR "<br>".$save[$i]."</br>\n";
                                }
                        }

                        # Verification du type d'appareil
                        for(my $i=0; $i < @save-5; $i=$i+1){
                                $save[$i] =~ s/^ +//;

                                #if($save[$i] =~ m/^Device type:/){
                                #       $flag_device = $flag_device+1;
                                #       print "Type: Phone\n";
                                #       print WR "Type: Phone\n";
                                #}
                        }
                        if($flag_device==0){
                                print "Type: PC\n";
                                print WR "<br>Type : PC</br>\n";
                        }

                        # Verification de l'OS
                        for(my $i=0; $i < @save-5; $i=$i+1){
                                $save[$i] =~ s/^ +//;
                                if($save[$i] =~ m/^Running/){
                                        $flag_OS = $flag_OS+1;
                                        my ($a, @os) = split(" +", $save[$i]);

                                        for(my $j=0; $j < @os; $j=$j+1){
                                                if($os[$j] =~ m/Windows/){
                                                        my $windows = "Windows 7";
                                                        print "OS: ".$windows."\n";
                                                        print WR "<br>OS : ".$windows."</br>\n";
                                                        $flag_OS = $flag_OS+1;
                                                }
                                                if($os[$j] =~ m/Linux/){
                                                        my $linux = "Linux 2.6";
                                                        print "OS: ".$linux."\n";
                                                        print WR "<br>OS : ".$linux."</br>\n";
                                                        $flag_OS = $flag_OS+1;
                                                }
                                        }
                                        if($flag_OS == 0){
                                                print @os."\n";
                                                print WR "<br>".@os."</br>\n";
                                        }
                                }else{
                                        if($flag_OS == 0){
                                                if($save[$i] =~ m/^OS/){
                                                        $flag_OS = $flag_OS+1;
                                                        my ($a, $b, $c) = split(" +", $save[$i]);
                                                        my ($d, $e, $f, $os) = split(":", $c);
                                                        print "OS: ".$os."\n";
                                                        print WR "<br>OS : ".$os."</br>\n";
                                                }
                                        }
                                }
                        }
                        for(my $i=0; $i < @save-5; $i=$i+1){
                                $save[$i] =~ s/^ +//;

                                if($save[$i] =~ m/^Aggressive OS/){
                                        if($save[$i] =~ m/Linux/){
                                                $flag_OS = $flag_OS+1;
                                                print "OS: Linux\n";
                                                print WR "<br>OS : Linux</br>\n";
                                        }
                                        if($save[$i] =~ m/Windows/){
                                                $flag_OS = $flag_OS+1;
                                                print "OS: Windows\n";
                                                print WR "<br>OS : Windows</br>\n";
                                        }
                                }
                        }

                        if($flag_OS==0){
                                print "OS: Non défini\n";
                                print WR "<br>OS: Non défini</br>\n";
                        }

                }
        }
}else{
        print "Aucun argument d'entrée\n";
}
