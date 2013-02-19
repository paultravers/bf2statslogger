bf2statslogger
==============

Stats Logger for Battlefield 2 along with the webserver to view and manage them

Original info:

Well, here is the promised Battlefield 2 COOP/INTERNET RANKING tutorial, step-by-step:

First of all, read all steps before you install the stats system. This is just a tutorial, the bf2statistics.com guys created this system.

1. Introduction, needed stuff and requirements
2. Create the database
3. Install the system on the database
4. Run the ranked system 4.1 without a mod (bf2 vanilla)
4.2 with a mod (xpak, pr, poe... etcetera)
5. Change levels, serversettings and gamemods
6. *New* .bat files for hosts.isc*New*
7. FAQ

1. What stuff do I need to run and what requirements do I need? 

You can run the private ranked system on your pc or on an extra pc.
The best way is to run it on another system, because the dedicated server eats much power of your working memory.
Your extra system should have at least 256mb ram, when you run the client and server on one system, you need at least 2 gb ram maybe more...You need to have FULL ACCESS TO YOUR FTP SERVER!!!

You need following programs and files for your ranking system:

for the client:
- Battlefield 2 ver. 1.41 (link, only needed when your bf2 isn't updated to 1.41) 
- BF2PrivateStats(Client) (+SetACL) file (included in the bf2privaterankingsys.zip)
[- bat files (see point 6): Download [1.75KB]:
see attachments or filefront link: http://files.filefront.com/bat+files+for+r...;/fileinfo.html

for the server:
- Battlefield 2 dedicated server 1.41 (link)
- python files ((included in the bf2privaterankingsys.zip)
- BF2PrivateStats(Server) (+SetACL) file (included in the bf2privaterankingsys.zip)
- ASP folder (included in the bf2privaterankingsys.zip)

bf2privaterankingsys.zip file::
Downloadmirrow 1 @ BFSP http://www.battlefieldsingleplayer.com/fil...erankingsys.zip
Downloadmirrow 2 @ filefront.com http://files.filefront.com/bf2privateranki...;/fileinfo.html
Downloadmirrow 3 @ rapidshare.com
http://rapidshare.de/files/39455698/bf2pri...ingsys.zip.html

for the database:
- xampp (link)

You can join the server, when you start a lan server in the offline mode, too.
There are several advantages and disadvantages concerning the online and offline mode:

- offline:
you do not need an internet connection!
you can use the webserver (running offline) to watch your stats
ingame rank works

-online:
you need an internet connecion!
you can use the webserver (running offline or online) to watch your stats
ingame rank works
you can watch your stats in the BFHQ



2. Create the database

The database can be on an external server... you do not have to create the database on the pc, you want to have the bf2 dedicated server to run.

Install xampp (link above).
Run xampp so this screen will come up (if not start xampp, by clicking on the system tray "x" symbol, which should be next to your clock):

Then start the Apache and MySql service:

Open your explorer (I use firefox, internet explorer works too, of course).
Type "127.0.0.1" or "localhost" in the address bar (without "")
This screen will come up:
 Reduced: 82% of original size [ 1024 x 819 ] - Click to view full image


Click on phpmyAdmin, which you can find under the tool bar at the left side.
 Reduced: 82% of original size [ 1024 x 819 ] - Click to view full image

Type in "bf2stats" into the "create new database" field (left to collation) and create the database by clicking onto the "create" button   :

That should look like this: database created:
 Reduced: 82% of original size [ 1024 x 819 ] - Click to view full image

Now click on server:localhost, which is at the top of the page:

You should now be at the main site.
Click on "privileges" and "add new user", this screen will come up:
 Reduced: 82% of original size [ 1024 x 819 ] - Click to view full image

Now type in following dates:
user name: "bf2statslogger" <-------- note: here you can also use another username and password, but remember it, for the further steps
password: "bf2"
(without "")
then click on "check all" and finally on the "ok" button: 
-> close all windows

3. Install the system on the database

Now you've to install the system on the database.
First of all copy the "python" folder which is included in the .zip file to your gameservers folder ( ...EA GAMES\Battlfield 2 Server\) and overwrite the old one.
Then copy the "asp" folder to your htdocs folder (in this case it should be: ....xampp\htdocs\ )...

Again, open your explorer and type in the addressbar 127.0.0.1/asp.
 Reduced: 96% of original size [ 871 x 331 ] - Click to view full image

you see the two boxes, here you type in following informations:
username: admin
password: password
 Reduced: 92% of original size [ 904 x 372 ] - Click to view full image

Click on "install DB", which can be found on the left bar:
 Reduced: 96% of original size [ 872 x 411 ] - Click to view full image

type in following informations:
server: localhost
database: bf2stats 
username: bf2statslogger
password: bf2

Mark the confirm process box and click on process.

 Reduced: 92% of original size [ 911 x 541 ] - Click to view full image


If you have more errors here, you should re-do all steps accurately!

Now click on "upgrade DB", which can be found in the right bar:
 Reduced: 96% of original size [ 874 x 416 ] - Click to view full image


Check the informations of the upgrade database form and correct it if necessary (should be the same infos as you typied in above!), click on process....
Ignore the errors, the screen should look like this one:

 Reduced: 96% of original size [ 874 x 399 ] - Click to view full image


I always got 10 errors.

Click again on "install DB" and after that on "test config":

 Reduced: 96% of original size [ 874 x 792 ] - Click to view full image


The screen should look like the one above!, I got one or two warn at checking database, but that didnt affect my ranking system.

Close your browser.

4. Run the ranked system 
4.1 without a mod (bf2 vanilla)

I suggest you firstly to run the system without a mod (bf2 vanilla) and then try to use it with a mod.

Run the ranked system without a mod (bf2 vanilla):
Steps for server-side:
Copy the BF2PrivateStats(Server) and setacl to your Battlefield 2 server directory (...EA GAMES\Battlefield 2 Server\).
Copy the BF2 private ranking server.exe shortcut to your desktop.
Make shure that the right path is specified (right click on your shorcut and click on properties):
"C:\Programme\EA Games\Battlefield 2 Server\BF2PrivateStats(Server).vbs" is the standard shortcut path.
Go to your ...EA GAMES\Battlefield 2 Server\ folder and open your BF2PrivateStats(Server).vbs with the texteditor or notepad:

Edit the ip address to the address of the database! Not needed when you run a localserver and the database and gameserver are on the same system.

CODE
' ========================================================================
' EDIT: This Line includes your game server host name/IP address.
'strLookupAddr   = "privatestats.gamespy.host"        ' Host Name
strLookupAddr   = "[b]127.0.0.1[/b]"        ' IP Address
' ========================================================================


Steps for client-side:
Copy the BF2PrivateStats(Client) and the setACL to your Battlefield 2 directory (...EA GAMES\Battlefield 2).
Copy the BF2 Offline Ranked.exe shortcut to your desktop.
Here again check the right game directory path of the shortcut.
Go to your ...EA GAMES\Battlefield 2\ folder and open your BF2PrivateStats(Client).vbs with the texteditor or notepad:

CODE
' ========================================================================
' String Lookup Variables
' ========================================================================
' EDIT: This Line includes your game server host name/IP address.
'strLookupAddr   = "privatestats.gamespy.host"        ' Host Name
strLookupAddr   = "[b]192.168.10.100[/b]"        ' IP Address
' ========================================================================

Edit the IP address to the Ip address of the database!

Run the BF2 private ranking server.exe shortcut to start the server and start the game on the client side with the bf2 offline ranked.exe shortcut.

Join the server, which should be displayed in the "join local" menu (when all server settings are on standard settings, the server should run the Strike at Karkand conquer 16 map, how to change the map and gamemod go to point 5!)

4.2 with a mod 

Do the same steps like you did in the step 4.1!

I use the AIX mod for example:

Make a copy of your Bf2 Offline Ranked.exe shortcut (which should be at your desktop) and paste it on the same position, the desktop.
Rename "copy of bf2 offline ranked.exe" to "AIX OFFLINE RANKED".

Right click on "AIX OFFLINE RANKED" and open the properties of the shortcut.

Use the "+modPath mods" to run mods...

Here you need following modPath:

"C:\Programme\EA Games\Battlefield 2\BF2PrivateStats(Client).vbs" +modPath mods/AIX +menu 1 +fullscreen 1

DO THE SAME STEP WITH THE BF2 Server.exe shortcut ("C:\Programme\EA Games\Battlefield 2 Server\BF2PrivateStats(Server).vbs" +modPath mods/AIX)

5. Change levels, serversettings and gamemods 

Goto your ....Bf2 Server/mods folder.
Choose your mod and open the settings folder of your mod.

Change serversettings:
In the serversettings.con you can change the usual stuff like FF, rounds per map etc... more informations can be found in the ServerSettingsDesc.xls, which should be in the mods\mod_name\Settings folder (you can read this file type with exel)...

Change levels and gamemods:

example for conquer strikeatkarkand mapsize 32:
CODE
mapList.append strike_at_karkand gpm_cq 32

example for coop strikeatkarkand mapsize 16:
CODE
mapList.append strike_at_karkand gpm_coop 16

Note: 
The Battlefield 2 vanilla mod only supports coop maps with size 16 (except Wake_Island_2007)

Use BF2SP64 for all vanilla maps with complete coop support (all map size support coop support)

6. .bat files to change original modded hosts_pr (private ranking) to hosts and hosts to hosts.org and the other way arround 

*Updated*: 20/08/08

Here are the promised .bat files. They work!, but I will release a new version soon, when I fixed one bug.

Install instructions (only for client side):
Go to C:\WINDOWS\system32\drivers\etc.

a.) Open both hosts files with your notepad or texteditor and change the ip before BF2web.gamespy.com to the ip of the server:
"127.0.0.1 BF2web.gamespy.com"
f.e. use 127.0.0.1 when the server and client are on the same computer.

Make a backup of your hosts file!

b.) Copy both files,hosts and hosts_pr into the etc folder and replace the old hosts with the new hosts file.

[c.) If you have more informations in it your hosts file, than the file which you downloaded then just use your current file as hosts and as hosts_pr just add the 
CODE
127.0.0.1    BF2web.gamespy.com        # BF2 Statistics Redirect line.

d.) Copy the 2 .bat files to your desktop or everywhere you like. Then run the privateranking.bat file, when you play on a private ranked server. Run the normalranking.bat file TWICE, when you play on a normal ranked server from EA. RUN IT TWICE!!! That's the bug I reported some lines above. 

If anyone knows, why you have to run it twice, please contact me to fix it. 

Download [1.75KB]:
see attachments or filefront link: http://files.filefront.com/bat+files+for+r...;/fileinfo.html

7. FAQ

My rank system works, but I always get a crash, when I want to log me into an online account (no crash when system and server are running!)?

- Go to: C:\windows\system32\drivers\etc and open the hosts.isc with the texteditor.
-> delete the bf2web.gamespy.com line 
Online account should work now (and private rank system works,too!!!)...

*Update: Or just have a look at point 6! You can now change the hosts with the added .bat files.


The rank system works ingame, but the system didnt save the stats ingame and on the webserver.

- You must re-direct your bf2 (client) with the server. Type in the right server address to BF2PrivateStats(Client).vbs.

How can I change the numbers of bots and more other useful answers can be found here:

http://battlefieldsingleplayer.planetbattl...?showtopic=3768





---------------------------------------------------------------------------------------------------------------

In the extrastuff folder of your bf2privaterankingsys.zip you can find two folders:

1.) Webserver:
You can watch your stats with the bf2 web statistics. Simply copy the bf2statistics folder (....bf2privaterankingsystem\extrastuff\webserver)
Into your htdocs folder of your server (....xampp\htdocs\).
Then open your webbrowser and type in following adress:
http://192.168.10.100/bf2statistics/ (for 192.168.10.100 type in the ip adress of your server)
Now the bf2statistics web site should be displayed.

2.) modded phyton files
I also added a modded phyton file, it's useful for lan parties, because you got medals and badges very faster than when you play a normal bf2 online.
Here is the changelog:
- easier to get veteran and expert badges 
f.e.:
assault:
basic: 10 kills i. a. r
veteran: 1h played and 20 kills i. a. r
expert: 4h played and 40 kills i. a.
install:
make a copy of your old file located in:
........Bf2Server\pyhton\bf2\stats\...
and then replace the new with the old files!!


Good luck   

