# UTTrackerPub
 UT99 Stats Tracker

This is the full source code of tracker.ut99.tk
__namonakers__ (author) released this code to [the community](https://ut99.org/viewtopic.php?t=11690) in 2016

>As I don't have will or time to run and maintain this site, I thought it would be proper to give it to the good hands of Community. You can use or reuse anything from the included package for whatever purpose you wish :) Keep in mind that I don't give any help or support for this, just let me know if anything's missing.

# Description
Unreal Tournament Stats Tracker allows you to view various statistics about players and servers. Also, it presents some detailed informations about maps, including automatically generated map layouts.

![fssRERg](/img/fssRERg.jpg)

![GjpSwVU](/img/GjpSwVU.jpg)

![CqXx5JY](/img/CqXx5JY.jpg)

## Frontend requirements:
- Apache 2.4
- PHP >= 5.3, with extensions:
  - pdo
  - mbstring
  - gd
- MySQL idunno

## Server scanner:
- Windows
- .NET Framework Runtime 4

## If you want to run Map Downloader, you'll also need:
- Windows VM with UT installation
- PHP configured for CLI usage, with curl extension

## Configuration files:
- Web frontend:
  /appConfig.php
- Server scanner: 
  /Scanner/bin/[buildType]/utt_updater3.ini
- UT Map Downloader:
  /UTMP/mapdlcron2.php
- Wireframe renderer:
  /WireframeRenderer/RendererConfig.php
  
## INSTALLATION
After you configure all components, create database tables using /Installer/index.php script. 
Remember to grant CREATE permission to the user for the time of installation.

## FOR SECURITY REASONS, create different SQL users for scanner, frontend and map downloader!!
### uttWeb only needs modification permissions for tables:
- mapinfo: INSERT, UPDATE
- mapdownloadqueue: INSERT
- serverqueue: INSERT
### Permissions needed for Map Downloader:
- mapdownloadqueue: SELECT, DELETE
  
## Directories explained:
- Assets - static files (graphics, styles, js, etc)
- Installer - setup script
- Locale - language files
- N14Core = Namonaki14's Completely Oosless and Redundant Extensions
- N14Data = used by some of the generic purpose scripts
- N14Inc - additional includes
- Scanner - VB.NET server scanner and master server
- UTMDC = UT Map Download CSomething, database of map download links
- UTMP = UT Map Page content - screenshots, layouts, map reports, etc.
    Also, the directory of Map Downloader.
- WireframeRenderer - script creating map layout images from T3D files
