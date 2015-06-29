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

                        open(WR,">hostname_".$ARGV[0].".txt")||die("Vous ne pouvez pas créer le fichier");
                        print WR "@cmd";
                        close(WR);

                        open(RD,"<hostname_".$ARGV[0].".txt")||die("Vous ne pouvez pas ouvrir le fichier");
                        @save = <RD>;
                        shift(@save);
                        shift(@save);
                        shift(@save);
                        shift(@save);
                        shift(@save);
                        close(RD);

                        open(WR,">hostname_".$ARGV[0].".txt")||die("Vous ne pouvez pas ouvrir le fichier");

                        print "IP: " . $ARGV[0] ."\n";
                        print WR "IP: " . $ARGV[0] . "\n";

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

                                        print "Constructeur: ".$constructeur;
                                        print WR $a.$b.$mac."\n";
                                        print WR "Constructeur: ".$constructeur."\n";
                                }
                        }

                        # Verification des ports ouverts
                        for(my $i=0; $i < @save-5; $i=$i+1){
                                $save[$i] =~ s/^ +//;

                                if($save[$i] =~ m/^[0-9]/){
                                        print $save[$i];
                                        print WR $save[$i];
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
                                print WR "Type: PC\n";
                        }

                        # Verification de l'OS
                        for(my $i=0; $i < @save-5; $i=$i+1){
                                $save[$i] =~ s/^ +//;
                                if($save[$i] =~ m/^Running/){
                                        $flag_OS = $flag_OS+1;
                                        my ($a, @os) = split(" +", $save[$i]);

                                        for(my $j=0; $j < @os; $j=$j+1){
                                                if($os[$j] =~ m/Windows/){
                                                        my $windows = "Windows 7\n";
                                                        print "OS: ".$windows."\n";
                                                        print WR "OS : ".$windows."\n";
                                                        $flag_OS = $flag_OS+1;
                                                }
                                                if($os[$j] =~ m/Linux/){
                                                        my $linux = "Linux 2.6\n";
                                                        print "OS: ".$linux."\n";
                                                        print WR "OS: ".$linux."\n";
                                                        $flag_OS = $flag_OS+1;
                                                }
                                        }
                                        if($flag_OS == 0){
                                                print @os."\n";
                                                print WR @os."\n";
                                        }
                                }else{
                                        if($flag_OS == 0){
                                                if($save[$i] =~ m/^OS/){
                                                        $flag_OS = $flag_OS+1;
                                                        my ($a, $b, $c) = split(" +", $save[$i]);
                                                        my ($d, $e, $f, $os) = split(":", $c);
                                                        print "OS: ".$os."\n";
                                                        print WR "OS: ".$os."\n";
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
                                                print WR "OS: Linux\n";
                                        }
                                        if($save[$i] =~ m/Windows/){
                                                $flag_OS = $flag_OS+1;
                                                print "OS: Windows\n";
                                                print WR "OS: Windows\n";
                                        }
                                }
                        }

                        if($flag_OS==0){
                                print "OS: Non défini\n";
                                print WR "OS: Non défini\n";
                        }
                }
        }
}else{
        print "Aucun argument d'entrée\n";
}
